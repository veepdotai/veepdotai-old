<?php

function init_nonce() {
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';

    return wp_nonce_field( $pn . '-main_admin_site', $pn . '-main_admin_site_nonce' );
}

function generate_button_escaped($pn, $button_id, $button_name) {
    $input_button = '<input class="button-primary" type="submit" name="'
                    . esc_attr( $pn . '-' . $button_id )
                    . '" value="'
                    . esc_attr( $button_name )
//                    . esc_attr( _e( $button_name, $pn ))
                    . '" />';
    
    return $input_button;
}

function generate_tabs_escaped() {
    $questions = [
        'benefices' => 'Bénéfices',
        'besoins' => 'Besoins',
        'solutions' => 'Solutions',
        'differenciation' => 'Différenciation',
    ];

    $list_items = '';
    foreach($questions as $key => $label) {
        $list_items .= '<li onclick="toggle_display(\'' . esc_js('veep_id_' . $key ) . '\')">'
                        . esc_html( $label )
                        . '</li>';
    }
    return '<ul class="tabs_questions">' . $list_items . '</ul>';
}

function display_escaped(bool $enable_voice, string $legend, string $field_name, string $_type, bool $in_section = false) {
    $fieldform = '';
    $fieldstyle = '';
    $value = get_option($field_name);

    $type = 'type="' . esc_attr( ($_type == 'img' ? 'url' : 'text')) . '"';
    $name = 'name="' . esc_attr( $field_name ) . '"';
    $class = 'class="' . esc_attr( $field_name ) . '"';

    $events = $enable_voice ? 'onclick="start_listening(this)"' : "";
               //                . 'onmouseleave="stop(this)"';

    $common_attrs_escaped = "$events $type $name $class";
    if ($_type == "textarea") {
        $style = 'style="width: 100%; height: 100px;"';
        $field_element_escaped = "<textarea $style $common_attrs_escaped >"
                                    . esc_textarea( $value )
                                    . "</textarea>" ;
    } else {
        $style = 'style="width: 100%;"';
        $field_element_escaped = "<input $style $common_attrs_escaped value=\""
                                    . esc_attr( $value )
                                    . "\" />";
    }
    
    $section_escaped = '<fieldset>'
                . '<legend>' . esc_html( $legend ) . '</legend>'
                . '<label for="' . esc_attr( $field_name ) . '"></label>'
                . $field_element_escaped
                . '</fieldset>';

    return $section_escaped;
}

function generate_context($context) {
    $content = '<div>'
                . '<p id="context" class="context">' . $context . '</p>'
                . '</div>';

    return $content;
}
