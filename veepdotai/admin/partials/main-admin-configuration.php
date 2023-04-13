<div class="wrap <?php echo $this->plugin_name.'-main-admin-configuration' ?>">
    <h2><?php esc_html_e(get_admin_page_title())?></h2>
    <ul>
        <li><?php _e( 'If you enjoy the plugin, we would really appreciate if you could <a href="https://wordpress.org/support/plugin/veep/reviews/" target="_blank">drop us a review</a> or support us with <a href="https://www.paypal.me/veep" target="_blank">a donation</a>', $this->plugin_name ) ?></li>
        <li><?php _e( 'If you find a bug or have any suggestion, create a <a href="https://wordpress.org/support/plugin/veep" target="_blank">new topic in the plugin support</a>', $this->plugin_name ) ?></li>
        <li><?php _e( 'If you need detailed information about the plugin, have a look at <a href="https://www.veep.ai/veep-user-guide/" target="_blank">the user guide</a>', $this->plugin_name ) ?></li>
    </ul>
    <hr>
    <form method="post" action="">
        <?php wp_nonce_field( $this->plugin_name.'-main_admin_configuration', $this->plugin_name.'-main_admin_configuration_nonce' ) ?>

        <fieldset>
            <legend>Clé de licence</legend>

            <label for="<?php echo $this->plugin_name ?>-ai-api_key"></label>
            <input type="text" name="<?php echo $this->plugin_name ?>-ai-api_key" value="<?php echo get_option($this->plugin_name.'_ai_api_key') ?>" required/>
            <p><?php _e( 'Open API Key. If you dont have one, <a href="https://platform.openai.com/account/api-keys" target="_blank">get an API Key</a>', $this->plugin_name ) ?></p>
            <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-save-api-key" value="<?php _e( 'Save API key', $this->plugin_name ) ?>" /><br>
        </fieldset>

    </form>
</div>
