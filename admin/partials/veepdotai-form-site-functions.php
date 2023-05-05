<?php

include('veepdotai-form-functions.php');

/**
 * Complete form with AI generated data
 */
function generate_hero_section($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    return generate_form_section($enable_voice, $intent, $section_title, $num_section, $context);
}

function generate_contact_section($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    return generate_form_section($enable_voice, $intent, $section_title, $num_section, $context);
}

function generate_form_section($enable_voice, $intent, $section_title, int $num_section, $context = '') {
        //$pn = $this->plugin_name;
    $pn = 'veepdotai';
    $section = '<div class="veep_section">'
                . '<label>' . $section_title . ' [' . $num_section . ']</label>'
                . '<p id="context-' . $num_section . '" class="veep_context">' . $context . '</p>'
                . display($enable_voice, "Title", $pn . "-ai-section" . $num_section . "-title", "text", true).''
                . display($enable_voice, "Contenu", $pn . "-ai-section" . $num_section . "-text", "textarea", true)
                . display($enable_voice, "Image", $pn . "-ai-section" . $num_section . "-img", "img", true)
                . display($enable_voice, "CTA text", $pn . "-ai-section" . $num_section . "-cta-text", "text", true)
                . display($enable_voice, "CTA href", $pn . "-ai-section" . $num_section . "-cta-href", "text", true)
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
