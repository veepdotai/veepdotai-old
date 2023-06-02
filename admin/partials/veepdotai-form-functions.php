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
                    . '" />';
    
    return $input_button;
}

function generate_editorial_calendar_tabs_escaped() {
    $questions = [
        'vocal' => 'Vocal',
        'article' => 'Article',
        'post_li' => 'Post LinkedIn',
        'post_fb' => 'Post Facebook',
        'post_insta' => 'Post Instagram',
    ];

    $list_items = '';
    foreach($questions as $key => $label) {
        $list_items .= '<li'
                        . ' id=' . esc_attr('veep_id_' . $key . '_menu')
                        . ' onclick="toggle_display(\'' . esc_js('veep_id_' . $key ) . '\')">'
                        . esc_html( $label )
                        . '</li>';
    }
    // A more generic tabs should have been better...
    return '<ul class="tabs_questions">' . $list_items . '</ul>';
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
        $list_items .= '<li'
                        . ' id=' . esc_attr('veep_id_' . $key . '_menu')
                        . ' onclick="toggle_display(\'' . esc_js('veep_id_' . $key ) . '\')">'
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

    $common_attrs_escaped = "$type $name $class";
    if ($_type == "textarea") {
        $style = 'style="width: 100%; height: 101px;"';
        $field_element_escaped = "<textarea $style $common_attrs_escaped >"
                                    . esc_textarea( $value )
                                    . "</textarea>" ;
    } else {
        $style = 'style="width: 100%;"';
        $field_element_escaped = "<input $style $common_attrs_escaped value=\""
                                    . esc_attr( $value )
                                    . "\" />";
    }
    
    $section_input_escaped = '<fieldset>'
                . '<legend>' . esc_html( $legend ) . '</legend>'
                . '<label for="' . esc_attr( $field_name ) . '"></label>'
                . $field_element_escaped
                . '</fieldset>';

    $result = $section_input_escaped;
    if ($enable_voice) {
        $section_audio_escaped = '<div id="controls-' . esc_attr( $field_name ) . '">'
        . '<button id="recordButton">Record</button>'
        . '<button id="pauseButton" disabled>Pause</button>'
        . '<button id="stopButton" disabled>Stop</button>'
      . '</div>'
      . '<div id="formats">Format: start recording to see sample rate</div>'
      . '<p><strong>Recordings:</strong></p>'
      . '<ol id="recordingsList"></ol>';

      $result = $section_audio_escaped . $section_input_escaped;
    }

    return $result;
}

function generate_context($context) {
    $content = '<div>'
                . '<p id="context" class="context">' . $context . '</p>'
                . '</div>';

    return $content;
}
