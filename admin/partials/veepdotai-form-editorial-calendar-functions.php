<?php

include('veepdotai-form-functions.php');

/**
 * Generate a list with all the dates to generate a post for.
 */
function generate_editorial_calendar_selector($class_css) {
    $user_login = wp_get_current_user()->user_login;
    $csv_content = Veepdotai_Util::get_option('ai-section-edstrat0-strategy');
    $lines = str_getcsv($csv_content, "\n");
    $options = "";
    $date = date_create(); // today
    for ($i = 1; $i < count($lines); $i++) {
        $options .= '<option name="' . $user_login . '-' . date_format($date, 'Ymd') . '-' . md5($lines[$i]) . '">'
                        . date_format($date, 'd/m/Y') . ' - ' . $lines[$i]
                        . '</option>';
        $date = date_add($date, new DateInterval('P1D'));
    }
    $list =  '<div class="' . $class_css . '">'
                . '<select>'
                . $options
                . '</select>'
            . '</div>';

    return $list;
}

/**
 * Complete form with AI generated data
 */
function generate_editorial_calendar_vocal_form_section($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';
    $name_escaped = $pn . "-ai-section-edcal" . $num_section;
    $section = '<div id="veep_id_' . $intent . '" class="veep_section">'
                . '<label>' . $section_title . ' [' . $num_section . ']</label>'
                . '<p id="context-' . $num_section . '" class="veep_context">' . $context . '</p>'
                . display_escaped($enable_voice, "Retranscription", $name_escaped . "-transcription", "textarea", true)
                . '</div>';
    return $section;
}

function generate_editorial_calendar_form_section_escaped($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';
    $name_escaped = $pn . "-ai-section-edcal" . $num_section;
    $section = '<div id="veep_id_' . $intent . '" class="veep_section">'
                . '<label>' . $section_title . ' [' . $num_section . ']</label>'
                . '<p id="context-' . $num_section . '" class="veep_context">' . $context . '</p>'
                . display_escaped($enable_voice, "Titre", $name_escaped . "-title", "text", true)
                . display_escaped($enable_voice, "Description", $name_escaped . "-description", "textarea", true)
                . display_escaped($enable_voice, "Contenu", $name_escaped . "-content", "textarea", true)
                . display_escaped($enable_voice, "Hashtags", $name_escaped . "-hashtags", "text", true)
                . display_escaped($enable_voice, "Thèmes", $name_escaped . "-themes", "text", true)
                . display_escaped($enable_voice, "Mots-clés", $name_escaped . "-keywords", "text", true)
                . '</div>';
    return $section;
}

/**
 * $pn stands for plugin name
 */
function generate_editorial_calendar_selector_dyn($pages) {
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';

    /* Wordpress pages */
    $select = '<select name="' . $pn . '-lp-templates">';
    if ( ! empty( $pages ) ) {
        foreach ( $pages as $page ) {
            if (preg_match('/^mod(è|e)le\sde/i', $page->post_title)) {
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
