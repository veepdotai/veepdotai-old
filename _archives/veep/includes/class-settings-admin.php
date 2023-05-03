<?php

class Veep_Settings_Admin
{

    /**
     * Get the field settings array
     * @since 3.0.0
     */
    function get_settings() {

        $defaults = [
            'general' => [
                'label' => __( 'General', 'veep' ),
                'fields' => [
                    'license_key' => [
                        'label' => __( 'License key', 'veep' ),
                        'html' => $this->get_field_html( 'license_key' )
                    ],
                    'ai_secret_api_key' => [
                        'label' => __( 'AI Secret API key', 'veep' ),
                        'html' => $this->get_field_html( 'ai_secret_api_key' )
                    ],
                    'context' => [
                        'label' => __( 'Context for the generation', 'veep' ),
                        'html' => $this->get_field_html( 'context' )
                    ],
                    'menu' => [
                        'label' => __( 'Menu', 'veep' ),
                        'html' => $this->get_field_html( 'menu' )
                    ],
                    'style' => [
                        'label' => __( 'Style', 'veep' ),
                        'html' => $this->get_field_html( 'style' )
                    ],
                    'tone' => [
                        'label' => __( 'Tone', 'veep' ),
                        'html' => $this->get_field_html( 'tone' )
                    ],
                ]
            ]
        ];

        return apply_filters( 'veep_settings_admin', $defaults, $this );
    }


    /**
     * Return HTML for a setting field
     * @since 3.0.0
     */
    function get_field_html( $setting_name, $field_type = 'text', $atts = [] ) {
        ob_start();

        if ( 'license_key' == $setting_name ) : ?>

        <input type="text" class="veep-license" value="<?php echo VEEP()->helper->get_license_key(); ?>"<?php echo defined( 'VEEP_LICENSE_KEY' ) ? ' disabled' : ''; ?> />
        <div @click="activate" class="btn-normal"><?php _e( 'Activate', 'veep' ); ?></div>
        <div class="veep-activation-status field-notes"><?php echo $this->get_activation_status(); ?></div>

<?php elseif ( 'ai_secret_api_key' == $setting_name ) : ?>

        <input type="text" v-model="app.settings.ai_secret_api_key" />
        <a href="https://platform.openai.com/account/api-keys" target="_blank"><?php _e( 'Get an AI secret API key (only open.ai for the moment)', 'veep' ); ?></a>

<?php elseif ( 'context' == $setting_name ) : ?>

        <input type="text" v-model="app.settings.context" />

<?php elseif ( 'menu' == $setting_name ) : ?>

    <input type="text" v-model="app.settings.menu" />

<?php elseif ( 'style' == $setting_name ) : ?>

    <input type="text" v-model="app.settings.style" />
    
<?php elseif ( 'tone' == $setting_name ) : ?>

    <input type="text" v-model="app.settings.tone" />

<?php endif;

        return ob_get_clean();
    }

    
    /**
     * Get the activation status
     * @since 3.0.0
     */
    function get_activation_status() {
        $message = __( 'Not yet activated', 'veep' );
        $status = VEEP()->helper->get_license_meta( 'status' );

        if ( false !== $status ) {
            if ( 'success' == $status ) {
                $expiration = VEEP()->helper->get_license_meta( 'expiration' );
                $expiration = date( 'M j, Y', strtotime( $expiration ) );
                $message = __( 'License active until', 'veep' ) . ' ' . $expiration;
            }
            else {
                $message = VEEP()->helper->get_license_meta( 'message' );
            }
        }

        return $message;


        $message = __( 'Not yet activated', 'veep' );
        $activation = get_option( 'veep_activation' );

        if ( ! empty( $activation ) ) {
            $activation = json_decode( $activation );
            if ( 'success' == $activation->status ) {
                $message = __( 'License active', 'veep' );
                $message .= ' (' . __( 'expires', 'veep' ) . ' ' . date( 'M j, Y', strtotime( $activation->expiration ) ) . ')';
            }
            else {
                $message = $activation->message;
            }
        }

        return $message;
    }


    /**
     * Load i18n admin strings
     * @since 3.2.0
     */
    function get_i18n_strings() {
        return [
            'Grid columns' => __( 'Grid columns', 'veep' ),
            'Grid gap' => __( 'Grid gap', 'veep' ),
            'Text style' => __( 'Text style', 'veep' ),
            'Text color' => __( 'Text color', 'veep' ),
            'Font size' => __( 'Font size', 'veep' ),
            'Background color' => __( 'Background color', 'veep' ),
            'Border' => __( 'Border', 'veep' ),
            'Border style' => __( 'Border style', 'veep' ),
            'None' => __( 'None', 'veep' ),
            'Solid' => __( 'Solid', 'veep' ),
            'Dashed' => __( 'Dashed', 'veep' ),
            'Dotted' => __( 'Dotted', 'veep' ),
            'Double' => __( 'Double', 'veep' ),
            'Border color' => __( 'Border color', 'veep' ),
            'Border width' => __( 'Border width', 'veep' ),
            'Button text' => __( 'Button text', 'veep' ),
            'Button text color' => __( 'Button text color', 'veep' ),
            'Button padding' => __( 'Button padding', 'veep' ),
            'Separator' => __( 'Separator', 'veep' ),
            'Custom CSS' => __( 'Custom CSS', 'veep' ),
            'Column widths' => __( 'Column widths', 'veep' ),
            'Content' => __( 'Content', 'veep' ),
            'Image size' => __( 'Image size', 'veep' ),
            'Author field' => __( 'Author field', 'veep' ),
            'Display name' => __( 'Display name', 'veep' ),
            'User login' => __( 'User login', 'veep' ),
            'User ID' => __( 'User ID', 'veep' ),
            'Field type' => __( 'Field type', 'veep' ),
            'Text' => __( 'Text', 'veep' ),
            'Date' => __( 'Date', 'veep' ),
            'Number' => __( 'Number', 'veep' ),
            'Date format' => __( 'Date format', 'veep' ),
            'Input format' => __( 'Input format', 'veep' ),
            'Number format' => __( 'Number format', 'veep' ),
            'Link' => __( 'Link', 'veep' ),
            'Link type' => __( 'Link type', 'veep' ),
            'Post URL' => __( 'Post URL', 'veep' ),
            'Custom URL' => __( 'Custom URL', 'veep' ),
            'Open in new tab?' => __( 'Open in new tab?', 'veep' ),
            'Prefix' => __( 'Prefix', 'veep' ),
            'Suffix' => __( 'Suffix', 'veep' ),
            'Hide item?' => __( 'Hide item?', 'veep' ),
            'Padding' => __( 'Padding', 'veep' ),
            'CSS class' => __( 'CSS class', 'veep' ),
            'Button Border' => __( 'Button border', 'veep' ),
            'Term URL' => __( 'Term URL', 'veep' ),
            'Fetch' => __( 'Fetch', 'veep' ),
            'All post types' => __( 'All post types', 'veep' ),
            'and show' => __( 'and show', 'veep' ),
            'per page' => __( 'per page', 'veep' ),
            'Sort by' => __( 'Sort by', 'veep' ),
            'Posts' => __( 'Posts', 'veep' ),
            'Post Title' => __( 'Post Title', 'veep' ),
            'Post Name' => __( 'Post Name', 'veep' ),
            'Post Type' => __( 'Post Type', 'veep' ),
            'Post Date' => __( 'Post Date', 'veep' ),
            'Post Modified' => __( 'Post Modified', 'veep' ),
            'Menu Order' => __( 'Menu Order', 'veep' ),
            'Custom Fields' => __( 'Custom Fields', 'veep' ),
            'Narrow results by' => __( 'Narrow results by', 'veep' ),
            'Hit Enter' => __( 'Hit Enter', 'veep' ),
            'Add sort' => __( 'Add sort', 'veep' ),
            'Add filter' => __( 'Add filter', 'veep' ),
            'Clear' => __( 'Clear', 'veep' ),
            'Enter term slugs' => __( 'Enter term slugs', 'veep' ),
            'Enter values' => __( 'Enter values', 'veep' ),
            'Layout' => __( 'Layout', 'veep' ),
            'Content' => __( 'Content', 'veep' ),
            'Style' => __( 'Style', 'veep' ),
            'Row' => __( 'Row', 'veep' ),
            'Column' => __( 'Column', 'veep' ),
            'Start typing' => __( 'Start typing', 'veep' ),
            'Label' => __( 'Label', 'veep' ),
            'Name' => __( 'Name', 'veep' ),
            'Facet type' => __( 'Facet type', 'veep' ),
            'Copy shortcode' => __( 'Copy shortcode', 'veep' ),
            'Data source' => __( 'Data source', 'veep' ),
            'Switch to advanced mode' => __( 'Switch to advanced mode', 'veep' ),
            'Switch to visual mode' => __( 'Switch to visual mode', 'veep' ),
            'Display' => __( 'Display', 'veep' ),
            'Query' => __( 'Query', 'veep' ),
            'Help' => __( 'Help', 'veep' ),
            'Display Code' => __( 'Display Code', 'veep' ),
            'Query Arguments' => __( 'Query Arguments', 'veep' ),
            'Saving' => __( 'Saving', 'veep' ),
            'Indexing' => __( 'Indexing', 'veep' ),
            'Indexing complete' => __( 'Indexing complete', 'veep' ),
            'Looking' => __( 'Looking', 'veep' ),
            'Purging' => __( 'Purging', 'veep' ),
            'Copied!' => __( 'Copied!', 'veep' ),
            'Press CTRL+C to copy' => __( 'Press CTRL+C to copy', 'veep' ),
            'Activating' => __( 'Activating', 'veep' ),
            'Re-index' => __( 'Re-index', 'veep' ),
            'Stop indexer' => __( 'Stop indexer', 'veep' ),
            'Loading' => __( 'Loading', 'veep' ),
            'Importing' => __( 'Importing', 'veep' ),
            'Convert to query args' => __( 'Convert to query args', 'veep' ),
            'Delete item?' => __( 'Delete item?', 'veep' )
        ];
    }


    /**
     * Get available image sizes
     * @since 3.2.7
     */
    function get_image_sizes() {
        global $_wp_additional_image_sizes;

        $sizes = [];

        $default_sizes = [ 'thumbnail', 'medium', 'medium_large', 'large', 'full' ];

        foreach ( get_intermediate_image_sizes() as $size ) {
            if ( in_array( $size, $default_sizes ) ) {
                $sizes[ $size ]['width'] = (int) get_option( "{$size}_size_w" );
                $sizes[ $size ]['height'] = (int) get_option( "{$size}_size_h" );
            }
            elseif ( isset( $_wp_additional_image_sizes[ $size ] ) ) {
                $sizes[ $size ] = $_wp_additional_image_sizes[ $size ];
            }
        }

        return $sizes;
    }


    /**
     * Return an array of formatted image sizes
     * @since 3.2.7
     */
    function get_image_size_labels() {
        $labels = [];
        $sizes = $this->get_image_sizes();

        foreach ( $sizes as $size => $data ) {
            $height = ( 0 === $data['height'] ) ? 'w' : 'x' . $data['height'];
            $label = $size . ' (' . $data['width'] . $height . ')';
            $labels[ $size ] = $label;
        }

        $labels['full'] = __( 'full', 'veep' );

        return $labels;
    }
}
