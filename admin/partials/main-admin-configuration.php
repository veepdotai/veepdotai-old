<div class="wrap <?php esc_attr_e( $this->plugin_name . '-main-admin-configuration') ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Configure')?></h2>
    <ul>
        <li><?php _e( 'If you enjoy the plugin, we would really appreciate if you could <a href="https://wordpress.org/support/plugin/veep/reviews/" target="_blank">drop us a review</a> or support us with <a href="https://www.paypal.me/veep" target="_blank">a donation</a>', $this->plugin_name ) ?></li>
        <li><?php _e( 'If you find a bug or have any suggestion, create a <a href="https://wordpress.org/support/plugin/veep" target="_blank">new topic in the plugin support</a>', $this->plugin_name ) ?></li>
        <li><?php _e( 'If you need detailed information about the plugin, have a look at <a href="https://www.veep.ai/veep-user-guide/" target="_blank">the user guide</a>', $this->plugin_name ) ?></li>
    </ul>
    <div class="veep_configuration">
        <form method="post" action="">
            <?php
            
            wp_nonce_field( $this->plugin_name . '-main_admin_configuration', $this->plugin_name . '-main_admin_configuration_nonce' );

            echo ( generate_configuration_form_section(true, 'configuration', 'Configuration',1) );
            ?>

            <div class="veep_actions">
                <?php
                    echo generate_button_escaped($pn, 'ai-save', __('Save', 'veepdotai'));
                    echo generate_button_escaped($pn, 'ai-next', __('Next', 'veepdotai'));
                ?>
            </div>
        </form>
    </div>
</div>
