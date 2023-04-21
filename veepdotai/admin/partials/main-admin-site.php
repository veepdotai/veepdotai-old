<div class="wrap <?php echo $this->plugin_name.'-main-admin-site' ?>">
    <h2><?php esc_html_e(get_admin_page_title())?></h2>
    <hr>
    <form method="post" action="">
        <?php wp_nonce_field( $this->plugin_name.'-main_admin_site', $this->plugin_name.'-main_admin_site_nonce' ) ?>
        <div>
            <?php echo display("Image", $this->plugin_name."-ai-hero-img", "img")?>

            <?php echo display("Hero title", $this->plugin_name."-ai-hero-title", "text")?>

            <?php echo display("Tagline", $this->plugin_name."-ai-hero-tagline", "textarea")?>
        </div>
        <hr>

        <?php echo generate_formsection($this->plugin_name, 1)?>

        <?php echo generate_formsection($this->plugin_name, 2)?>

        <div style="margin:20px 0px">
            <fieldset style="margin-bottom: 15px">
                <legend><?php _e('Landing page template', $this->plugin_name) ?> :</legend>

                <label for="<?php echo $this->plugin_name ?>-lp-templates"></label>
                <select name="<?php echo $this->plugin_name ?>-lp-templates">
                    <option value="<?php echo $this->plugin_name ?>-lp-template1" <?php selected($selected_lp_template, $this->plugin_name.'-lp-template1') ?>><?php _e('First template', $this->plugin_name) ?></option>
                    <option value="<?php echo $this->plugin_name ?>-lp-template2" <?php selected($selected_lp_template, $this->plugin_name.'-lp-template2') ?>><?php _e('Second template', $this->plugin_name) ?></option>
                </select>
            </fieldset>
            <fieldset  style="margin-bottom: 15px">
                <legend><?php _e('Content generation', $this->plugin_name) ?> :</legend>

                <label for="<?php echo $this->plugin_name ?>-generation"></label>
                <select name="<?php echo $this->plugin_name ?>-generation">
                    <option value="<?php echo $this->plugin_name ?>-genshortcodes" <?php selected($selected_generation, $this->plugin_name.'-genshortcodes') ?>><?php _e('Shortcodes', $this->plugin_name) ?></option>
                    <option value="<?php echo $this->plugin_name ?>-gencontenu" <?php selected($selected_generation, $this->plugin_name.'-gencontenu') ?>><?php _e('HTML content', $this->plugin_name) ?></option>
                </select>
            </fieldset>
            <fieldset>
                <legend><?php _e('WordPress template', $this->plugin_name) ?> :</legend>

                <label for="<?php echo $this->plugin_name ?>-wp-templates"></label>
                <?php
                if ( ! empty( $page_templates ) ) {
                    echo '<select name="'.$this->plugin_name.'-wp-templates">';
                    foreach ( $page_templates as $template_name => $template_file ) {
                        echo '<option value="' . esc_attr( $template_file ) . '"'. selected($selected_wp_template,  esc_attr( $template_file )) .'>' . esc_html( $template_name ) . '</option>';
                    }
                    echo '</select>';
                } else {
                    echo 'Aucun modèle de page disponible.';
                }?>
            </fieldset>


        </div>

        <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-save" value="<?php _e( 'Save', $this->plugin_name ) ?>" />


        <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-site" value="<?php _e( 'Generate site', $this->plugin_name ) ?>" /><br>


    </form>
</div>
