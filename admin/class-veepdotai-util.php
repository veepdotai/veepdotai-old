<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Veepdotai
 * @subpackage Veepdotai/Util
 * @author     Jean-Christophe Kermagoret <jc@kermagoret.net>
 */

class Veepdotai_Util {

    public static function convert_to_valid_json($text) {
/*
        $result = preg_replace('/\\\\n/', '##n', $text);
        $infos = json_decode($result);
        $text = $infos->choices[0]->text;
        $text = preg_replace('/^##n##n/', '', $text);
        $output = preg_replace('/##n/', '&#13;', $text);
        return $output;
*/
        $string = preg_replace('/\\n/', '', $text);
        $r = json_decode($string);

        if ($r) {
            $text = $r->choices[0]->text;
            $string = preg_replace('/Résultat :/', '', $text);
            $string = preg_replace('/Résumé :/', '', $text);
            $string = preg_replace('/^[^{]*/', '', $text);
            $results = json_decode($string);

            if ($results) {
                Veepdotai_Util::error_log("OK");
                return $results;
            } else {
                Veepdotai_Util::error_log("Error2");
                return Veepdotai_Util::get_last_error();
            }
        } else {
            error_log("Error1");
            return Veepdotai_Util::get_last_error();
        }
    }

    public static function get_last_error() {
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                $r = ' - No errors';
            break;
            case JSON_ERROR_DEPTH:
                $r = ' - Maximum stack depth exceeded';
            break;
            case JSON_ERROR_STATE_MISMATCH:
                $r = ' - Underflow or the modes mismatch';
            break;
            case JSON_ERROR_CTRL_CHAR:
                $r = ' - Unexpected control character found';
            break;
            case JSON_ERROR_SYNTAX:
                $r = ' - Syntax error, malformed JSON';
            break;
            case JSON_ERROR_UTF8:
                $r = ' - Malformed UTF-8 characters, possibly incorrectly encoded';
            break;
            default:
                $r = ' - Unknown error';
            break;
        }

        return $r;
    }

    /**
     * 
     */
    public static function replace_special_chars($string) {

        /* Another way to replace chars. Seems to be buggy.
                $normalized_raw = "";
                if (mb_detect_encoding($raw, 'utf-8', true) === false) {
                    $normalized_raw = mb_convert_encoding($raw, 'utf-8', 'iso-8859-1');
                }
                $r = $this->convert_to_valid_json($normalized_raw);
        */
        
        $unwanted_array = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
        'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
        'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
        'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
        'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );

        $str = strtr( $string, $unwanted_array );

        return $str;
    }

    /**
	 * Moves the user to the provided admin page for the Veepdotai plugin.
	 */
	public static function go_to_url($page, $move = true) {
        if (! str_contains($page, 'http')) {
            $admin_url = get_admin_url();
            $prefix_menu = "admin.php?page=veepdotai-veepdotai-menu-";
            $page_url = $admin_url . $prefix_menu . $page;    
        } else {
            $page_url = $page;
        }

        Veepdotai_Util::log('Page_url: ' . $page_url);

        if ($move) {
            echo '<script>window.location.replace("' . $page_url . '")</script>';
            //echo wp_kses_post( '<script>window.location.replace("' . $page_url . '")</script>' );
        } else {
            return $page_url;
        }
    }

    /**
     * Logs information without buffering so you can see process progression
     */
    public static function log_direct( $o ){
        ob_end_flush();
        ob_start();
        echo $o;
        ob_flush();
        flush();
        ob_end_flush();
    }

	public static function log( $object=null ){
        return Veepdotai_Util::var_error_log($object);
    }

    public static function error_log( $object=null ){
        return Veepdotai_Util::var_error_log($object);
	}

    public static function var_error_log( $object=null ){
        ob_start();                    // start buffer capture
		var_dump( $object );           // dump the values
		$contents = ob_get_contents(); // put the buffer into a variable
		ob_end_clean();                // end capture
		error_log( $contents );        // log contents of the result of var_dump( $object )
	}
	 
}
