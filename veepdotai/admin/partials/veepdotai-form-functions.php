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

