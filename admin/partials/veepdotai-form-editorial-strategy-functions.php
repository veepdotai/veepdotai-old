<?php

include('veepdotai-form-functions.php');

/**
 * Complete form with AI generated data
 */
function generate_editorial_strategy_form_section_escaped($enable_voice, $intent, $section_title, int $num_section, $context = '') {
    //$pn = $this->plugin_name;
    $pn = VEEPDOTAI_PLUGIN_NAME;
    $name_escaped = "ai-section-edstrat" . $num_section;
    $section = '<div id="veep_id_' . $intent . '" class="veep_section">'
                . '<label>' . $section_title . ' [' . $num_section . ']</label>'
                . '<p id="context-' . $num_section . '" class="veep_context">' . $context . '</p>'
                . display_escaped($enable_voice, __ ('Keywords' ), $name_escaped . "-keywords", "text", true)
                . display_escaped($enable_voice, __('Strategy') , $name_escaped . "-strategy", "textarea", true)
                . display_escaped($enable_voice, __( 'Prompt' ), $name_escaped . "-prompt", "textarea", true)
                . '</div>';
    return $section;
}

function generate_editorial_strategy_form_datatable() {
    return <<<_EOF_
    <table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Âge</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
    <tfoot>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Âge</th>
        </tr>
    </tfoot>
</table>
_EOF_;

}
