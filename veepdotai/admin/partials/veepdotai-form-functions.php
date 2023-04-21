<?php
function display(string $legend, string $class_name, string $type, bool $in_section = false) {
    $fieldform = '';
    $fieldstyle = '';
    if ($in_section == true){
        $fieldstyle = 'margin-left: 20px';
    }
    if ($type == "text") {
        $fieldform = '<input style="width: 90%" type="text" name="'.$class_name.'" value="'.get_option($class_name).'"/>';
    } elseif ($type == "textarea") {
        $fieldform = '<textarea style="width: 90%" rows="5" type="text" name="'.$class_name.'">'.get_option($class_name).'</textarea>';
    } elseif ($type == "img") {
        $fieldform = '<input style="width: 50%" rows="5" type="url" name="'.$class_name.'" value="'.get_option($class_name).'" />';
    } else {
        $fieldform = '<input style="width: 90%" type="text" name="'.$class_name.'" value="'.get_option($class_name).'"/>';
    }
    $section = '
    <fieldset style="'.$fieldstyle.'">
        <legend>'.$legend.'</legend>

        <label for="veepdotai-ai-'.$class_name.'"></label>
        '.$fieldform.'
    </fieldset>
    ';
    return $section;
}

function generate_formsection(string $class_name, int $num_section){
    $section = '<div style="box-shadow: lightgrey -5px 5px 7px; padding: 10px; margin: 15px 0px">
            <label><b>Section '.$num_section.' :</b></label>'.
        display("Title", $class_name."-ai-section".$num_section."-title", "text", true).''.
        display("Article 1", $class_name."-ai-section".$num_section."-text", "textarea", true).''.
        display("Image", $class_name."-ai-section".$num_section."-img", "img", true).
        '</div>';
    return $section;
}