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

use League\CommonMark\GithubFlavoredMarkdownConverter;
use Orhanerday\OpenAi\OpenAi;

class Veepdotai_Util {

    public static function generate_audio($url) {
        $url_escaped = $url;
        Veepdotai_Util::log("Generates an audio component for $url_escaped");

        $audio = '<!-- wp:audio -->'
                    . '<figure class="wp-block-audio">'
                        . '<audio controls src="' . $url_escaped .'"></audio>'
                    . '</figure>'
                . '<!-- /wp:audio -->';

        return $audio;
    }

    public static function generate_paragraph($text, $css_class_name = "") {
        $para_escaped = esc_html($text);
        Veepdotai_Util::log("Generates an audio component for $para_escaped");
        $css_class_name_escaped = esc_attr($css_class_name);

        $paragraph = '<!-- wp:paragraph {"className":"' . $css_class_name_escaped . '","dynamicAttributes":{"toolsetDSVersion":"230000"}} -->'
                    . '<p class="' . $css_class_name_escaped . '">' . $para_escaped . '</p>'
                    . '<!-- /wp:paragraph -->';

        return $paragraph;
    }

    public static function generate_html_from_markdown($markdown) {
        $output = (new GithubFlavoredMarkdownConverter())->convert($markdown);
        return $output;
    }

    public static function set_option($param, $value) {
        $pn = VEEPDOTAI_PLUGIN_NAME;
        $param_name = $pn . '-' . $param;
        Veepdotai_Util::log("Setting option: " . $param_name . " = " . $value);
        return update_option($param_name, $value);
    }

    public static function get_option($param) {
        $pn = VEEPDOTAI_PLUGIN_NAME;
        $param_name = $pn . '-' . $param;
        Veepdotai_Util::log("Getting option: " . $param_name);
        return get_option($param_name);
    }

    public static function get_content_from_ai($_params) {
        if (is_string($_params)) {
            $params = [
                'model' => 'text-davinci-003',
                'prompt' => $_params,
                'temperature' => 0.7,
                'max_tokens' => 2000,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ];    
        } else {
            $params = $_params;
        }

        $open_ai_key = Veepdotai_Util::get_option('openai-api-key');
        $open_ai = new OpenAi($open_ai_key);

        //Veepdotai_Util::log_direct("<p class='params'>" . $params . ".</p>");

        $raw = $open_ai->completion($params);

        return $raw;
    }

    public static function get_storage_filename($suffix) {
        $date = date_create();
        return Veepdotai_Util::get_storage_directory($date)
                . '/' . date_format($date, 'Y-m-d\TH:m:s') . '-' . $suffix;
    }

    public static function get_storage_directory($_date = null) {
        $pn = VEEPDOTAI_PLUGIN_NAME;

        if ($_date) {
            $date = $_date;
        } else {
            $date = date_create();
        }

        $year = date_format($date, 'Y');
        $month = date_format($date, 'm');
        $day = date_format($date, 'd');
        $user_login = wp_get_current_user()->user_login;
        $directory = WP_PLUGIN_DIR . "/$pn/data/users/$user_login/$year/$month/$day";

        return $directory;
    }

    public static function get_data($filename) {

        $date_extracted = preg_match("/(\d{4}-\d{2}-\d{2T\d{2}:\d{2}:\d{2})/", $filename);
        if (! $date_extracted) {
            $data = file_get_contents(Veepdotai_Util::get_storage_directory() . "/" . $filename);
        } else {
            $date = date_create($date_extracted[1]);
            $data = file_get_contents(Veepdotai_Util::get_storage_directory($date) . "/" . $filename);
        }
        return $data;
    }

    /**
     * The content is stored based on user login
     */
    public static function store_data($content, $filename) {
        // Creates the provided directory
        $date = date_create();
        $directory = Veepdotai_Util::get_storage_directory($date);
        mkdir($directory, 0777, true);

        $abs_filename = $directory . "/" . date_format($date, 'Y-m-d\TH:m:s') . "-" . $filename;

        $r = file_put_contents($abs_filename, $content);

        return $r;
    }

     public static function convert_to_valid_json($text) {
/*
        $result = preg_replace('/\\\\n/', '##n', $text);
        $infos = json_decode($result);
        $text = $infos->choices[0]->text;
        $text = preg_replace('/^##n##n/', '', $text);
        $output = preg_replace('/##n/', '&#13;', $text);
        return $output;
*/
        // Decodes the data provided by GPT. It respects JSON format
        // but the data corresponding to the key text maybe not.
        $r = json_decode($text);

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
            error_log("Error 1: format error.");
            return Veepdotai_Util::get_last_error();
        }
    }

    /**
     * Fix json by removing \n and \s in json source, i. e. beetween data,
     * but double \n in json data
     */
    public static function fix_json($text) {
        // \n breaks json decoding so we must get rid of these
        // We just convert them in \\n.

        $string = preg_replace('/^(\s|\n)*{/', "{", $text);
        $string = preg_replace('/{(\s|\n)*/', "{", $string);
        $string = preg_replace('/(\s|\n)*}/', "}", $string);
        $string = preg_replace('/\[(\s|\n)*/', "[", $string);
        $string = preg_replace('/(\s|\n)]/', "]", $string);
        $string = preg_replace('/\":(\s|\n)*\"]/', "\":\"", $string);
        $string = preg_replace('/(\s|\n)*],(\s|\n)*/', "],", $string);
        $string = preg_replace('/\",\n\s*\"/', "\",\"", $string);
        $string = preg_replace('/\n/', "\\n", $string);

        $string = preg_replace('/\\r/', "", $string);
        $string = preg_replace('/\\n/', "#_#_#n", $string);
        $string = preg_replace('/\n/', "", $string);
        $string = preg_replace('/#_#_#n/', "\\\\n", $string);

        Veepdotai_Util::log('In fix_json: ' . $string);

        return $string;
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
