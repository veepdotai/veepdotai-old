<?php

include('veepdotai-form-functions.php');

/**
 * Simple form to input interview
 */
function generate_configuration_form_section($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    $pn = 'veepdotai';
    $section = '<div id="veep_id_' . $intent . '" class="veep_section">'
                . '<label>' . $section_title . ' [' . $num_section . ']</label>'
                . '<p id="context-' . $num_section . '" class="veep_context">' . $context . '</p>'
                . display_escaped(false, "OpenAI API Key*", "openai-api-key", "text", true)
                . '<p>*' 
                    . __( 'If you dont have one, <a href="https://platform.openai.com/account/api-keys" target="_blank">get an API Key</a>', $pn )
                . '</p>'
                . display_escaped(false, "Pexels API Key**", "pexels-api-key", "text", true)
                . '<p>**'
                    . __( 'If you dont have one, <a href="https://www.pexels.com/fr-fr/api/new/" target="_blank">get an API Key</a>', $pn )
                . '</p>'
                . display_escaped(false, "Unsplash API Key**", "unsplash-api-key", "text", true)
                . '<p>**'
                    . __( 'If you dont have one, <a href="https://unsplash.com/developers" target="_blank">get an API Key</a>', $pn )
                . '</p>'
                . '</div>';
                
    return $section;
}

