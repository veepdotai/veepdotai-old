<div class="wrap <?php echo $this->plugin_name.'-main-admin-site' ?>">
    <h2><?php esc_html_e(get_admin_page_title())?></h2>
    <hr>
    <form method="post" action="">
        <?php wp_nonce_field( $this->plugin_name.'-main_admin_site', $this->plugin_name.'-main_admin_site_nonce' ) ?>

        <div>
            <?php echo display("Image", $this->plugin_name."-ai-hero-img", "img")?>

            <?php echo display("Hero Title", $this->plugin_name."-ai-hero-title", "text")?>

            <?php echo display("Tagline", $this->plugin_name."-ai-hero-tagline", "textarea")?>
        </div>
        <hr>
        <div style="box-shadow: lightgrey -5px 5px 7px; padding: 10px; margin: 15px 0px">
            <label><b>Section 1 :</b></label>
            <?php echo display("Title", $this->plugin_name."-ai-section1-title", "text", true)?>

            <?php echo display("Article 1", $this->plugin_name."-ai-section1-text", "textarea", true)?>

            <?php echo display("Image", $this->plugin_name."-ai-section1-img", "img", true)?>
        </div>
        <div style="box-shadow: lightgrey -5px 5px 7px; padding: 10px; margin: 15px 0px">
            <label><b>Section 2 :</b></label>
            <?php echo display("Title", $this->plugin_name."-ai-section2-title", "text", true)?>

            <?php echo display("Article 1", $this->plugin_name."-ai-section2-text", "textarea", true)?>

            <?php echo display("Image", $this->plugin_name."-ai-section2-img", "img", true)?>
        </div>

        <div style="margin:20px 0px">
            <fieldset style="margin-bottom: 15px">
                <legend>Template de landing page</legend>

                <label for="<?php echo $this->plugin_name ?>-templates"></label>
                <select name="<?php echo $this->plugin_name ?>-templates">
                    <option value="<?php echo $this->plugin_name ?>-template1" <?php selected($selected_template, $this->plugin_name.'-template1') ?>>Template 1</option>
                    <option value="<?php echo $this->plugin_name ?>-template2" <?php selected($selected_template, $this->plugin_name.'-template2') ?>>Template 2</option>
                </select>
            </fieldset>
            <fieldset>
                <legend>Génération de contenu</legend>

                <label for="<?php echo $this->plugin_name ?>-generation"></label>
                <select name="<?php echo $this->plugin_name ?>-generation">
                    <option value="<?php echo $this->plugin_name ?>-genshortcodes" <?php selected($selected_generation, $this->plugin_name.'-genshortcodes') ?>>Shortcodes</option>
                    <option value="<?php echo $this->plugin_name ?>-gencontenu" <?php selected($selected_generation, $this->plugin_name.'-gencontenu') ?>>Contenu HTML</option>
                </select>
            </fieldset>
        </div>

        <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-save" value="<?php _e( 'Save', $this->plugin_name ) ?>" />


        <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-site" value="<?php _e( 'Generate site', $this->plugin_name ) ?>" /><br>


    </form>
</div>
