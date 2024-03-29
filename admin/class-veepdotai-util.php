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
use \Delight\Str\Str;

class Veepdotai_Util {

    public static function generate_audio($url) {
        $url_escaped = $url;
        Veepdotai_Util::log('debug', "Generates an audio component for $url_escaped");

        $audio = '<!-- wp:audio -->'
                    . '<figure class="wp-block-audio">'
                        . '<audio controls src="' . $url_escaped .'"></audio>'
                    . '</figure>'
                . '<!-- /wp:audio -->';

        return $audio;
    }

    public static function generate_paragraph($text, $css_class_name = "") {
        $para_escaped = esc_html($text);
        Veepdotai_Util::log('debug', "Generates an audio component for $para_escaped");
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

    /**
     * Extracted data are saved into the options table before being returned to the user.
     */
    public static function article_generation_save_extracted_data($i, $data) {
        Veepdotai_Util::set_option('ai-section-edcal' . $i . '-title', $data->title);
        Veepdotai_Util::set_option('ai-section-edcal' . $i . '-description', $data->description);
        Veepdotai_Util::set_option('ai-section-edcal' . $i . '-content', $data->content);
        Veepdotai_Util::set_option('ai-section-edcal' . $i . '-linkedin', $data->linkedin);
        Veepdotai_Util::set_option('ai-section-edcal' . $i . '-themes', $data->themes);
        Veepdotai_Util::set_option('ai-section-edcal' . $i . '-hashtags', $data->hashtags);
        Veepdotai_Util::set_option('ai-section-edcal' . $i . '-keywords', $data->keywords);
        Veepdotai_Util::set_option('ai-section-edcal' . $i . '-img-prompt', $data->image);

        return $data;
    }

    public static function update_option($param, $value) {
        return Veepdotai_Util::set_option($param, $value);
    }

    public static function set_option($param, $value) {
        $pn = VEEPDOTAI_PLUGIN_NAME;
        $user = wp_get_current_user()->user_login;

//        if (preg_match("/^" . $user . '-' . $pn . "/", $param)) {
        if (preg_match("/^" . $pn . "/", $param)) {
                // The param starts with the $pn, so we don't add the $pn again
            $param_name = $param;
        } else {
            // We add it
            $param_name = $pn . '-' . $param;
        }

        $user_param_name = $user . '-' . $param_name;
        Veepdotai_Util::log('debug', "Setting option: " . $user_param_name . " = " . $value);

        return update_option($user_param_name, $value);
    }

    public static function get_option($param) {
        $pn = VEEPDOTAI_PLUGIN_NAME;
        $default_user = 'admin';

        Veepdotai_Util::log('debug', "Get option/plugin name: " . $pn);
        Veepdotai_Util::log('debug', "Get option/param name: " . $param);

        if (preg_match("/^openai-api-key/", $param)) {
            Veepdotai_Util::log('debug', "Option: admin-veepdotai-" . $param);
            return get_option($default_user . "-veepdotai-" . $param);
        } else if (preg_match("/^pexels-api-key/", $param)) {
            Veepdotai_Util::log('debug', "Option: admin-veepdotai-" . $param);
            return get_option($default_user . "-veepdotai-" . $param);
        } else if (preg_match("/(img-)?!prompt/", $param)) {
            Veepdotai_Util::log('debug', "Option: admin-veepdotai-" . $param);
            return get_option($default_user . "-veepdotai-" . $param);
        } else {
            $user = wp_get_current_user()->user_login;
            Veepdotai_Util::log('debug', "User name: " . $user);

    //        if (preg_match("/^" . $user . '-' . $pn . "/", $param)) {
            if (preg_match("/^" . $pn . "/", $param)) {
                    // The param starts with the $pn, so we don't add it
                $param_name = $param;
            } else {
                // We add it
                $param_name = $pn . '-' . $param;
            }

            $user_param_name = $user . '-' . $param_name;
            Veepdotai_Util::log('debug', "Getting option: " . $user_param_name);
            $option = get_option($user_param_name);

            // A prompt is required to work correctly.
            if (! $option && preg_match("/-prompt/", $param)) {
                Veepdotai_Util::log('debug', "Option: admin-veepdotai-" . $param);
                return get_option($default_user . "-veepdotai-" . $param);
            }
            return $option;
        }
    }

    public static function get_content_from_wav($file, $content_id) {

        if (! $content_id) {
            $input = $file['tmp_name'];
            Veepdotai_Util::log('debug', 'File from the request: input [tmp_name]: ' . $input);
            $filename = $file['name'];
            Veepdotai_Util::log('debug', 'File from the request: filename [name]: ' . $filename);

            $output = Veepdotai_Util::get_storage_filename('interview.wav');
            Veepdotai_Util::log('debug', 'File from the request is going to be moved to: ' . $output);

    //        $output = Veepdotai_Util::get_storage_directory()
    //                    . '/' . $filename . '.wav';
    //                    . '-' . $_FILES['veepdotai-ai-record-audio_data']['name'].".wav";
            //move the file from temp name to local folder using $output name 
            move_uploaded_file($input, $output);
            $audio = $_POST['audio'];
            // We are on the vocal section. Where could we be anyway? On the article part.
            if ('veep_id_vocal' === $audio) {
                $path = preg_replace("#.*/wp-content/data/veepdotai/(.*)#", "/$1", $output);
                Veepdotai_Util::log('debug', 'Storing path to retrieve it later: ' . $path);
                Veepdotai_Util::set_option('ai-vocal-path', $path);                
            }

            $size = intval($file['size']);
            Veepdotai_Util::log('debug', 'File size from the request: size [size]: ' . $size);
        } else {
            $output = Veepdotai_Util::get_storage_directory()
                        . '/' . $content_id;

            Veepdotai_Util::log('debug', 'Getting file from the repository: ' . $output);
            $size = 0;
        }

        if ($size > 25000000) {
            $duration = 240; // 240 seconds so the size should be < 25 Mo for middle rate
            $cmd_split_wav = 'ffmpeg -i ' . $output
                                .' -f segment -segment_time ' . $duration
                                . ' -c copy ' . $output . '%2d.wav';
            $results = [];
            $result = exec('pwd', $results, $code);
            print_r($results);
            print_r($result);
            print_r($code);
        }

        // Process the wav through the whisper API from ChatGPT
        $open_ai_key = Veepdotai_Util::get_option('openai-api-key');
        $open_ai = new OpenAi($open_ai_key);

        $c_file = curl_file_create($output);

        $params = [
            "model" => "whisper-1",
            "file" => $c_file,
        ];

        $raw = $open_ai->transcribe($params);
        Veepdotai_Util::store_data($raw, 'question-transcription.json');

        echo json_decode($raw)->text;
        die(); // this is required to return a proper result
    }

    public static function get_content_from_ai($_params, $max_tokens = 2500) {
        if (is_string($_params)) {
            $params = [
                'model' => 'text-davinci-003',
//                'model' => 'gpt-4',
                'prompt' => $_params,
                'temperature' => 0.7,
                'max_tokens' => $max_tokens,
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

    /**
     * Based on ginsen/img-finder which works with pexels and unsplash repositories
     */
    public static function get_images($prompt) {
        $pexel_auth = Veepdotai_Util::get_option("pexels-api-key");
        $unsplash_auth = Veepdotai_Util::get_option("unsplash-api-key");
        $settings = [
            'img-finder' => [
                'repositories' => [
                    ImgFinder\Repository\PexelsRepository::class => [
                        'params' => [
                            'authorization' => $pexel_auth
                        ]
                    ],
                    ImgFinder\Repository\UnsplashRepository::class => [
                        'params' => [
                            'authorization' => $unsplash_auth
                        ]
                    ],
                ],
                // ...
            ]
            //...
        ];

        $config = ImgFinder\Config::fromArray($settings);
        $finder = new ImgFinder\ImgFinder($config);

        //$request  = Request::set('nature', ['pexels', 'unsplash']);
        
        $request  = ImgFinder\Request::set($prompt, ['pexels']);
        $response = $finder->search($request);

        $imagesUrls = $response->toArray();
        //var_dump($imagesUrls);
        Veepdotai_Util::log('debug',  'Prompt image: ' . $prompt );
        Veepdotai_Util::log('debug',  'ImagesUrl: ' . count($imagesUrls) );

        return $imagesUrls;
    }

    public static function get_image($prompt) {
        $images = Veepdotai_Util::get_images($prompt);
        if (! empty($images)) {
            $image = $images[0];
        } else {
            $image = "";
        }

        return $image;
    }

    public static function get_storage_filename($suffix) {
        $date = date_create();
        return Veepdotai_Util::get_storage_directory($date)
                . '/' . date_format($date, 'Ymd\THms') . '-' . $suffix;
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
        $directory = VEEPDOTAI_DATA_DIR . "/users/$user_login/$year/$month/$day";

        return $directory;
    }

    public static function get_data($filename) {

        $date_extracted = preg_match("/(\d{4}\d{2}\d{2T\d{2}\d{2}\d{2})/", $filename);
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

        $abs_filename = $directory . "/" . date_format($date, 'Ymd\THis') . "-" . $filename;

        $r = file_put_contents($abs_filename, $content);

        return $abs_filename;
    }

     public static function convert_to_valid_json($text) {
        // Decodes the data provided by GPT. It globally respects JSON format
        // but data generation is sometimes capricious
        $r = json_decode($text);

        if ($r) {
            $text = $r->choices[0]->text;
            $string_json = Veepdotai_Util::fix_json($text);
            $results = json_decode($string_json);

            if ($results) {
                Veepdotai_Util::error_log("OK");
                return $results;
            } else {
                Veepdotai_Util::error_log("Error2");
                return Veepdotai_Util::get_last_error();
            }
        } else {
           Veepdotai_Util::log('debug', "Error 1: format error.");
            return Veepdotai_Util::get_last_error();
        }
    }

    /**
     * 
     */
    public static function fix_results($r) {
        $section = null;
        if (property_exists($r, 'section')) {
            Veepdotai_Util::log('debug', "A section property exists.");
            $section = $r->section;
            if (is_string($section)) {
                Veepdotai_Util::log('debug', 'Section is string : $section = $r.');
                $section = $r;
            } elseif (is_null($section)) {
                Veepdotai_Util::log('debug', 'Section is null : $section = $r->sections[0].');
                $section = $r->sections[0];
            } elseif (is_array($section)) {
                Veepdotai_Util::log('debug', 'Section is an array : $section = $r->section[0].');
                $section = $r->section[0];
            } else {
               Veepdotai_Util::log('debug', "The format of the r->section is not known.");
            }    
        } elseif (property_exists($r, 'sections')) {
            if (is_array($r->sections)) {
                $section = $r->sections[0];
            } else {
               Veepdotai_Util::log('debug', "The format of the r->sections is not known.");
            }
        } else {
            $section = $r;
        }
        
        return $section;
    }

    public static function get_language() {
        return 'fr_FR';
    }

    public static function fix_json($raw) {
        $i = 1;
        $text = (new \Delight\Str\Str($raw))->normalizeLineEndings("EOL");

        $blank_chars = '\s|EOL|\t';

        // Some chars before { or |: [a-zA-Z...]* {|[ => {|[
        // ^[^{\[]*({|[) => '{|[' because it breaks json format
        $string = preg_replace( '/^' . '[^\{\[]*(\{|\[)/', "$1", $text );
        Veepdotai_Util::log('debug', "$i. ############\n" . $string);
        $i++;
        
        // ,, => , because it breaks json format
        $string = preg_replace( '/,+/', ',', $string );
        Veepdotai_Util::log('debug', "$i. ############\n" . $string);
        $i++;

        // ^EOL{|[
        $string = preg_replace('/(' . $blank_chars . ')*{(' . $blank_chars . ')*/', "{", $text);
        Veepdotai_Util::log('debug', "$i. ############\n" . $string);
        $i++;

        // 1234,EOL  "
        //$string = preg_replace('/,(' . $blank_chars . ')*\"/', ',"', $string);
        $string = preg_replace('/,(\s|\t)*EOL(\s|\t)*\"/', ',"', $string);
        Veepdotai_Util::log('debug', "$i. ############\n" . $string);
        $i++;

        // ",EOL"
        //$string = preg_replace('/\\",EOL\\"/', '\",\"', $string);
        $string = preg_replace('/,EOL/', ',', $string);
        Veepdotai_Util::log('debug', "$i. ############\n" . $string);
        $i++;

        // :EOL"
        //$string = preg_replace('/:EOL\"/', ':"', $string);
        $string = preg_replace('/"(' . $blank_chars . ')*:(' . $blank_chars . ')*"/', '":"', $string);
        Veepdotai_Util::log('debug', "$i. ############\n" . $string);
        $i++;

        // "EOL    }EOL  ],"
        $string = preg_replace('/"(' . $blank_chars . ')*}(' . $blank_chars . ')*],"/', '"}],"', $string);
        Veepdotai_Util::log('debug', "$i. ############\n" . $string);
        $i++;

        // ",}" => }
        $string = preg_replace('/"(' . $blank_chars . ')*,(' . $blank_chars . ')*}/', '"}', $string);

        // EOL  }EOL}
        //$string = preg_replace('/(' . $blank_chars . ')*}(' . $blank_chars . ')*}/', '}}', $string);
        $string = preg_replace('/(' . $blank_chars . ')*}/', '}', $string);
        Veepdotai_Util::log('debug', "$i. ############\n" . $string);

        // Some chars before/after the {} or [] and not enclosed in ""
        $string = preg_replace('/(}|])[^",}\]]*/', '$1', $string);
        $string = preg_replace('/[^",}\]]*(}|])/', '$1', $string);
        // EOL => ''
        $string = preg_replace('/EOL/', '\n', $string);
        Veepdotai_Util::log('debug', "$i. ############\n" . $string);

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

        Veepdotai_Util::log('debug', 'Page_url: ' . $page_url);

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
    public static function log_direct( $o ) {
        ob_end_flush();
        ob_start();
        echo $o;
        ob_flush();
        flush();
        ob_end_flush();
    }

	public static function log( $level, $message, $object=null ) {
        if ( is_string( $object ) ) {
            do_action( 'wonolog.log.' . $level, ['message' => $message ]);
        } else {
            do_action( 'wonolog.log.' . $level, ['message' => $message ], $object);
        }

        //Veepdotai_Util::var_error_log($object);
    }

    public static function error_log( $object=null ) {
        Veepdotai_Util::var_error_log($object);
	}

    public static function var_error_log( $object=null ) {
        ob_start();                    // start buffer capture
		var_dump( $object );           // dump the values
		$contents = ob_get_contents(); // put the buffer into a variable
		ob_end_clean();                // end capture
		error_log( $contents, 3, "/tmp/wordpress.log" );        // log contents of the result of var_dump( $object )
	}

    public static function s($str, $charset = null) {
        return new \Delight\Str\Str($str, $charset);
    }

}
