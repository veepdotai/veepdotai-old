<div class="wrap <?php echo $this->plugin_name.'-main-admin-menu' ?>">
    <h2><?php esc_html_e(get_admin_page_title())?></h2>
    <form method="post" action="">
        <?php wp_nonce_field( $this->plugin_name.'-main_admin_menu', $this->plugin_name.'-main_admin_menu_nonce' ) ?>

        <fieldset>
            <legend><?php _e('Context', $this->plugin_name) ?></legend>
            <label for="<?php echo $this->plugin_name ?>-ai-context"></label>
            <textarea style="width: 90%" rows="5" type="text" name="<?php echo $this->plugin_name ?>-ai-context"><?php echo get_option($this->plugin_name.'_ai_context') ?></textarea>
            <p><?php _e( 'Context to make the generation more interesting.', $this->plugin_name ) ?></p>
            <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-generate-menu" value="<?php _e( 'Generate menu', $this->plugin_name ) ?>" /><br>
        </fieldset>

        <fieldset>
            <legend><?php _e('Menu', $this->plugin_name) ?></legend>

            <label for="<?php echo $this->plugin_name ?>-ai-menu"></label>
            <textarea id="context" style="width: 90%" rows="20" type="text" name="<?php echo $this->plugin_name ?>-ai-menu"><?php echo get_option($this->plugin_name.'_ai_menu') ?></textarea>
        </fieldset>


        <?php if (isset($post[$this->plugin_name.'-ai-generate-menu'])){print_r($menu_lines);} ?>
    </form>
</div>
