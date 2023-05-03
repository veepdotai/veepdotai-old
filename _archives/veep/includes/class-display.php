<?php

class Veep_Display
{

    /* (array) Extra features used on the page */
    public $active_extras = [];

    /* (array) Saved shortcode attributes */
    public $shortcode_atts = [];

    /* (boolean) Whether to enable FacetWP for the current page */
    public $load_assets = false;

    /* (array) Scripts and stylesheets to enqueue */
    public $assets = [];

    /* (array) Data to pass to front-end JS */
    public $json = [];


    function __construct() {
        add_action( 'wp_footer', [ $this, 'front_scripts' ], 25 );
    }


    /**
     * Output facet scripts
     */
    function front_scripts() {

        // Not enqueued - front.js needs to load before front_scripts()
        if ( apply_filters( 'veep_load_assets', $this->load_assets ) ) {

            // Load CSS?
            if ( apply_filters( 'veep_load_css', true ) ) {
                $this->assets['front.css'] = VEEP_URL . '/assets/css/front.css';
            }

            // Load required JS
            $this->assets['front.js'] = VEEP_URL . '/assets/js/dist/front.min.js';

            // Load a11y?
            if ( apply_filters( 'veep_load_a11y', false ) ) {
                $this->assets['accessibility.js'] = VEEP_URL . '/assets/js/src/accessibility.js';
            }

            // Pass GET and URI params
            $http_params = [
                'get' => $_GET,
                'uri' => VEEP()->helper->get_uri(),
                'url_vars' => VEEP()->request->url_vars,
            ];

            // See VEEP()->facet->get_query_args()
            if ( ! empty( VEEP()->facet->archive_args ) ) {
                $http_params['archive_args'] = VEEP()->facet->archive_args;
            }

            // Populate the VEEP_JSON object
            $this->json['prefix'] = VEEP()->helper->get_setting( 'prefix' );
            $this->json['no_results_text'] = __( 'No results found', 'fwp' );
            $this->json['ajaxurl'] = get_rest_url() . 'veep/v1/refresh';
            $this->json['nonce'] = wp_create_nonce( 'wp_rest' );

            if ( apply_filters( 'veep_use_preloader', true ) ) {
                $overrides = VEEP()->request->process_preload_overrides([
                ]);
                $args = VEEP()->request->process_preload_data( false, $overrides );
                $this->json['preload_data'] = VEEP()->facet->render( $args );
            }

            ob_start();

            foreach ( $this->active_types as $type ) {
                $facet_class = VEEP()->helper->facet_types[ $type ];
                if ( method_exists( $facet_class, 'front_scripts' ) ) {
                    $facet_class->front_scripts();
                }
            }

            $inline_scripts = ob_get_clean();
            $assets = apply_filters( 'veep_assets', $this->assets );

            foreach ( $assets as $slug => $url ) {
                $html = '<script src="{url}"></script>';

                if ( 'css' == substr( $slug, -3 ) ) {
                    $html = '<link href="{url}" rel="stylesheet">';
                }

                if ( false !== strpos( $url, 'veep' ) ) {
                    $url .= '?ver=' . VEEP_VERSION;
                }

                $html = apply_filters( 'veep_asset_html', $html, $url );

                echo str_replace( '{url}', $url, $html ) . "\n";
            }

            echo $inline_scripts;
?>
<script>
window.VEEP_JSON = <?php echo json_encode( $this->json ); ?>;
window.VEEP_HTTP = <?php echo json_encode( $http_params ); ?>;
</script>
<?php
        }
    }
}
