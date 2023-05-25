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
	public static function go_to_url($page) {
		$admin_url = get_admin_url();
		$prefix_menu = "/admin.php?page=veepdotai-veepdotai-menu-";
		$page_url = $admin_url . $prefix_menu . $page;

		echo '<script>window.location.replace("' . $page_url . '")</script>';
	}

    public static function log_direct( $o ){
        ob_end_flush();
        ob_start();
        echo $o;
        ob_flush();
        flush();
        ob_end_flush();
    }

	public static function var_error_log( $object=null ){
		ob_start();                    // start buffer capture
		var_dump( $object );           // dump the values
		$contents = ob_get_contents(); // put the buffer into a variable
		ob_end_clean();                // end capture
		error_log( $contents );        // log contents of the result of var_dump( $object )
	}
	 
}
