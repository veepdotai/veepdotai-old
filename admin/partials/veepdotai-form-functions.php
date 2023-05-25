<?php

function init_nonce() {
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';

    return wp_nonce_field( $pn . '-main_admin_site', $pn . '-main_admin_site_nonce' );
}

function generate_tabs() {
    $questions = [
        'benefices' => 'Bénéfices',
        'besoins' => 'Besoins',
        'solutions' => 'Solutions',
        'differenciation' => 'Différenciation',
    ];

    $list_items = '';
    foreach($questions as $key => $label) {
        $list_items .= '<li onclick="toggle_display(\'veep_id_' . $key . '\')">' . $label . '</li>';
    }
    return '<ul class="tabs_questions">' . $list_items . '</ul>';
}

function display(bool $enable_voice, string $legend, string $field_name, string $_type, bool $in_section = false) {
    $fieldform = '';
    $fieldstyle = '';
    $value = get_option($field_name);
    $type = 'type="' . ($_type == 'img' ? 'url' : 'text') . '"';
    $name = 'name="' . $field_name . '"';
    $class = 'class="' . $field_name . '"';

    $events = $enable_voice ? 'onclick="start_listening(this)"' : "";
               //                . 'onmouseleave="stop(this)"';

    $common_attrs = "$events $type $name $class";
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
