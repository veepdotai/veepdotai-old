<?php

class Veep_Builder
{

    public $css = [];
    public $data = [];
    public $custom_css;


    function __construct() {
        //add_filter( 'veep_query_args', [ $this, 'hydrate_date_values' ], 999 );
    }


    /**
     * Generate the layout HTML
     * @since 3.2.0
     */
    function render_layout( $layout ) {
        global $wp_query, $post;

        $output = "";

        $settings = $layout['settings'];
        $this->custom_css = $settings['custom_css'];

        $output .= '</div>';
        $output .= $this->render_css();
 
        return $output;
    }


    /**
     * Populate short-tag content, e.g. {{ first_name }}
     */
    function short_tags( $output ) {
        foreach ( $this->data as $tag => $tag_value ) {
            $pattern = '/({{[ ]?' . $tag . '[ ]?}})/s';
            $tag_value = str_replace( '$', '\$', $tag_value );
            $output = preg_replace( $pattern, $tag_value, $output );
        }

        return $output;
    }


    /**
     * Build the redundant styles (border, padding,etc)
     * @since 3.2.0
     */
    function build_styles( $settings ) {
        $styles = [];

        if ( isset( $settings['border'] ) ) {
            $styles['border-style'] = $settings['border']['style'];
            $styles['border-color'] = $settings['border']['color'];
            $styles['border-width'] = $this->get_widths( $settings['border']['width'] );
        }
        if ( isset( $settings['background_color'] ) ) {
            $styles['background-color'] = $settings['background_color'];
        }
        if ( isset( $settings['padding'] ) ) {
            $styles['padding'] = $this->get_widths( $settings['padding'] );
        }
        if ( isset( $settings['text_style'] ) ) {
            $styles['text-align'] = $settings['text_style']['align'];
            $styles['font-weight'] = $settings['text_style']['bold'] ? 'bold' : '';
            $styles['font-style'] = $settings['text_style']['italic'] ? 'italic' : '';
        }
        if ( isset( $settings['font_size'] ) ) {
            $styles['font-size'] = $settings['font_size']['size'] . $settings['font_size']['unit'];
        }
        if ( isset( $settings['text_color'] ) ) {
            $styles['color'] = $settings['text_color'];
        }
        if ( isset( $settings['button_border'] ) ) {
            $border = $settings['button_border'];
            $width = $border['width'];
            $unit = $width['unit'];

            $styles['color'] = $settings['button_text_color'];
            $styles['background-color'] = $settings['button_color'];
            $styles['padding'] = $this->get_widths( $settings['button_padding'] );
            $styles['border-style'] = $border['style'];
            $styles['border-color'] = $border['color'];
            $styles['border-top-width'] = $width['top'] . $unit;
            $styles['border-right-width'] = $width['right'] . $unit;
            $styles['border-bottom-width'] = $width['bottom'] . $unit;
            $styles['border-left-width'] = $width['left'] . $unit;
        }

        return $styles;
    }


    /**
     * Build the CSS widths, e.g. for "padding" or "border-width"
     * @since 3.2.0
     */
    function get_widths( $data ) {
        $unit = $data['unit'];
        $top = $data['top'];
        $right = $data['right'];
        $bottom = $data['bottom'];
        $left = $data['left'];

        if ( $top == $right && $right == $bottom && $bottom == $left ) {
            return "$top$unit";
        }
        elseif ( $top == $bottom && $left == $right ) {
            return "$top$unit $left$unit";
        }

        return "$top$unit $right$unit $bottom$unit $left$unit";
    }


    /**
     * Convert a value into a link
     * @since 3.2.0
     */
    function linkify( $value, $link_data, $term_data = [] ) {
        global $post;

        $type = $link_data['type'];
        $href = $link_data['href'];
        $target = $link_data['target'];

        if ( 'none' !== $type ) {
            if ( 'post' == $type ) {
                $href = get_permalink();
            }
            if ( 'term' == $type ) {
                $href = get_term_link( $term_data['term_id'], $term_data['taxonomy'] );
            }

            $value = '<a href="' . $href . '" target="' . $target . '">' . $value . '</a>';
        }

        return $value;
    }


    /**
     * Turn the CSS array into valid CSS
     * @since 3.2.0
     */
    function render_css() {
        $output = "\n<style>\n";

        foreach ( $this->css as $selector => $props ) {
            $valid_rules = $this->get_valid_css_rules( $props );

            if ( ! empty( $valid_rules ) ) {
                $output .= $selector . " {\n";
                foreach ( $valid_rules as $prop => $value ) {
                    $output .= "    $prop: $value;\n";
                }
                $output .= "}\n";
            }
        }

        if ( ! empty( $this->custom_css ) ) {
            $output .= $this->custom_css . "\n";
        }

        $output .= "
@media (max-width: 480px) {
    .fwpl-layout {
        grid-template-columns: 1fr;
    }
}
";

        $output .= "</style>\n";

        return $output;
    }


    /**
     * Filter out empty or invalid rules
     * @since 3.2.0
     */
    function get_valid_css_rules( $props ) {
        $rules = [];

        foreach ( $props as $prop => $value ) {
            if ( $this->is_valid_css_rule( $prop, $value ) ) {
                $rules[ $prop ] = $value;
            }
        }

        return $rules;
    }


    /**
     * Optimize CSS rules
     * @since 3.2.0
     */
    function is_valid_css_rule( $prop, $value ) {
        $return = true;

        if ( empty( $value ) || 'px' === $value || '0px' === $value || 'none' === $value ) {
            $return = false;
        }

        if ( 'font-size' === $prop && '0px' === $value ) {
            $return = false;
        }

        return $return;
    }


    /**
     * Get necessary data for the query builder
     * @since 3.0.0
     */
    function get_query_data() {
        $builder_post_types = [];

        $post_types = get_post_types( [ 'public' => true ], 'objects' );

        // Remove ACF choices
        unset( $data_sources['acf'] );

    }


    /**
     * Replace "date|" placeholders with actual dates
     */
    function hydrate_date_values( $query_args ) {
        if ( isset( $query_args['meta_query'] ) ) {
            foreach ( $query_args['meta_query'] as $index => $row ) {
                if ( isset( $row['value'] ) && is_string( $row['value'] ) && 0 === strpos( $row['value'], 'date|' ) ) {
                    $value = trim( substr( $row['value'], 5 ) );
                    $value = date( 'Y-m-d', strtotime( $value ) );
                    $query_args['meta_query'][ $index ]['value'] = $value;
                }
            }
        }

        return $query_args;
    }
}
