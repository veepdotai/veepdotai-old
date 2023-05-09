<?php

include('veepdotai-form-functions.php');

/**
 * Simple form to input interview
 */
function generate_checkbox($context = '') {
    return '<input type="checkbox" name="same_prompts" onclick="fillWithSameValues(this)">Utiliser les mêmes valeurs pour chaque section';
}

function generate_prompt_hero_section($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    return generate_prompt_form_section($enable_voice, $intent, $section_title, $num_section, $context);
}

function generate_prompt_contact_section($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    return generate_prompts_form_section($enable_voice, $intent, $section_title, $num_section, $context);
}

function generate_prompt_form_section($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    $pn = 'veepdotai';
    $section_head = '<div class="veep_section">'
                . '<label>' . $section_title . ' [' . $num_section . ']</label>';

    $section_pre = '<p id="context-' . $num_section . '" class="veep_context veep_context_pre">' . $context . '</p>'
                . display($enable_voice, "Pré-prompt", $pn . "-ai-section" . $num_section . "-text-prompt-pre", "textarea", true);

    $section_post = '<p id="context-' . $num_section . '" class="veep_context veep_context_post">' . $context . '</p>'
    . display($enable_voice, "Post-prompt", $pn . "-ai-section" . $num_section . "-text-prompt-post", "textarea", true);

    $section = $section_head
                . $section_pre
                . $section_post
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
