<?php

include('veepdotai-form-functions.php');

/**
 * Complete form with AI generated data
 */
function generate_hero_section_escaped($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    return generate_form_section_escaped($enable_voice, $intent, $section_title, $num_section, $context);
}

function generate_contact_section_escaped($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    return generate_form_section_escaped($enable_voice, $intent, $section_title, $num_section, $context);
}

function generate_form_section_escaped($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    //$pn = $this->plugin_name;
    $pn = 'veepdotai';
    $name_escaped = $pn . "-ai-section" . $num_section;
    $section = '<div id="veep_id_' . $intent . '" class="veep_section">'
                . '<label>' . $section_title . ' [' . $num_section . ']</label>'
                . '<p id="context-' . $num_section . '" class="veep_context">' . $context . '</p>'
                . display_escaped($enable_voice, 'Title', $name_escaped . '-title', 'text', true).''
                . display_escaped($enable_voice, 'Résumé', $name_escaped . '-text', 'textarea', true)
                . display_escaped($enable_voice, 'Contenu', $name_escaped . '-page', 'textarea', true)
                . display_escaped($enable_voice, 'Image prompt', $name_escaped . '-img-prompt', 'text', true)
                . display_escaped(false, 'Image href', $name_escaped . '-img-href', 'img', true)
                . display_escaped($enable_voice, 'Image alt', $name_escaped . '-img-alt', 'text', true)
                . display_escaped($enable_voice, 'CTA text', $name_escaped . '-cta-text', 'text', true)
                . display_escaped(false, 'CTA href', $name_escaped . '-cta-href', 'text', true)
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
