<?php

function init_nonce() {
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';

    return wp_nonce_field( $pn . '-main_admin_site', $pn . '-main_admin_site_nonce' );
}

function display(string $legend, string $field_name, string $type, bool $in_section = false) {
    $fieldform = '';
    $fieldstyle = '';

    if ($type == "text") {
        $field_element = '<input type="text" name="' . $field_name . '" value="' . get_option($field_name) . '"/>';
    } elseif ($type == "textarea") {
        $field_element = '<textarea rows="5" type="text" name="'.$field_name.'">'.get_option($field_name).'</textarea>';
    } elseif ($type == "img") {
        $field_element = '<input rows="5" type="url" name="' . $field_name . '" value="' . get_option($field_name) . '" />';
    } else {
        $field_element = '<input type="text" name="' . $field_name . '" value="' . get_option($field_name) . '"/>';
    }
    
    $section = '<fieldset>'
                . '<legend>' . $legend . '</legend>'
                . '<label for="' . $field_name . '"></label>'
                . $field_element
                . '</fieldset>';

    return $section;
}

function generate_form_section(int $num_section){
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';
    $section = '<div>'
                . '<label>Section ' . $num_section . '</label>'
                . display("Title", $pn . "-ai-section" . $num_section . "-title", "text", true).''
                . display("Article", $pn . "-ai-section" . $num_section . "-text", "textarea", true)
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
            $option = '<option value="' . esc_attr( $page->ID ) .'">'
                        . esc_html( $page->post_title )
                        . '</option>';
            //echo $option;
            $select .= $option;
        }
    } else {
        echo 'Aucun modèle de page disponible.';
    }
    $select .= '</select>';

    $fieldset = '<fieldset>'
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