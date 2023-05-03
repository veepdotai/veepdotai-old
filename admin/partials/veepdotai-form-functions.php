<?php

function init_nonce() {
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';

    return wp_nonce_field( $pn . '-main_admin_site', $pn . '-main_admin_site_nonce' );
}

function display(string $legend, string $field_name, string $_type, bool $in_section = false) {
    $fieldform = '';
    $fieldstyle = '';
    $value = get_option($field_name);
    $type = 'type="' . ($_type == 'img' ? 'url' : 'text') . '"';
    $name = 'name="' . $field_name . '"';

    $events = 'onclick="start_listening(this)"';
//                . 'onmouseleave="stop(this)"';
    $common_attrs = "$events $type $name";
    if ($_type == "textarea") {
        $style = 'style="width: 100%; height: 100px;"';
        $field_element = "<textarea $style $common_attrs >$value</textarea>";
    } else {
        $style = 'style="width: 100%;"';
        $field_element = "<input $style $common_attrs value=\"$value\" />";
    }
    
    $section = '<fieldset>'
                . '<legend>' . $legend . '</legend>'
                . '<label for="' . $field_name . '"></label>'
                . $field_element
                . '</fieldset>';

    return $section;
}

function generate_context($context) {
    $content = '<div>'
                . '<p id="context" class="context">' . $context . '</p>'
                . '</div>';

    return $content;
}

function generate_hero_section($intent, $section_title, int $num_section, $context = '') {
}

function generate_contact_section($intent, $section_title, int $num_section, $context = '') {
}

function generate_form_section($intent, $section_title, int $num_section, $context = '') {
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';
    $section = '<div class="veep_section">'
                . '<label>' . $section_title . ' [' . $num_section . ']</label>'
                . '<p id="context-' . $num_section . '" class="veep_context">' . $context . '</p>'
                . display("Title", $pn . "-ai-section" . $num_section . "-title", "text", true).''
                . display("Contenu", $pn . "-ai-section" . $num_section . "-text", "textarea", true)
                . display("Image", $pn . "-ai-section" . $num_section . "-img", "img", true)
                . display("CTA text", $pn . "-ai-section" . $num_section . "-cta-text", "text", true)
                . display("CTA href", $pn . "-ai-section" . $num_section . "-cta-href", "text", true)
                . '</div>';
    return $section;
}

/**
 * $pn stands for plugin name
 */
function generate_template_selector($pages) {
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';

    /* Wordpress pages */
    $select = '<select name="' . $pn . '-lp-templates">';
    if ( ! empty( $pages ) ) {
        foreach ( $pages as $page ) {
            if (preg_match('/^mod(è|e)le/i', $page->post_title)) {
                $option = '<option value="' . esc_attr( $page->ID ) .'">'
                            . esc_html( $page->post_title )
                            . '</option>';
                //echo $option;
                $select .= $option;
            }
        }
    } else {
        echo 'Aucun modèle de page disponible.';
    }
    $select .= '</select>';

    $fieldset = '<fieldset class="template-selector">'
                    .'<legend>' . _e('Landing page template', $pn) . '</legend>'
                    .'<label for="' . $pn . '"-lp-templates"></label>'
                    . $select
                    . '</fieldset>';

    return $fieldset;
}

/*
            <fieldset>
                <legend><?php _e('WordPress template', $this->plugin_name) ?> :</legend>

                <label for="<?php echo $this->plugin_name ?>-wp-templates"></label>
                <?php
                if ( ! empty( $page_templates ) ) {
                    echo '<select name="'.$this->plugin_name.'-wp-templates">';
                    foreach ( $page_templates as $template_name => $template_file ) {
                        echo '<option value="' . esc_attr( $template_file ) . '"'. selected($selected_wp_template,  esc_attr( $template_file )) .'>' . esc_html( $template_name ) . '</option>';
                    }
                    echo '</select>';
                } else {
                    echo 'Aucun modèle de page disponible.';
                }?>
            </fieldset>
*/