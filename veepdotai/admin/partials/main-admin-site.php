<div class="wrap <?php echo $this->plugin_name.'-main-admin-site' ?>">
    <h2><?php esc_html_e(get_admin_page_title())?></h2>
    <hr>
    <form method="post" action="">
        <?php wp_nonce_field( $this->plugin_name.'-main_admin_site', $this->plugin_name.'-main_admin_site_nonce' ) ?>

        <div>
            <fieldset>
                <legend>Hero title</legend>

                <label for="<?php echo $this->plugin_name ?>-ai-hero_title"></label>
                <input type="text" name="<?php echo $this->plugin_name ?>-ai-hero_title" value="<?php echo get_option($this->plugin_name.'_ai_hero_title') ?>"/>
            </fieldset>

            <fieldset>
                <legend>Tagline</legend>

                <label for="<?php echo $this->plugin_name ?>-ai-tagline"></label>
                <textarea style="width: 90%" rows="5" type="text" name="<?php echo $this->plugin_name ?>-ai-tagline"><?php echo get_option($this->plugin_name.'_ai_tagline') ?></textarea>
            </fieldset>
        </div>
        <hr>
        <div style="box-shadow: lightgrey -5px 5px 7px; padding: 10px; padding: 10px; margin: 15px 0px">
            <label><b>Section 1 :</b></label>
            <fieldset style="margin-left: 20px">
                <legend>Title</legend>

                <label for="<?php echo $this->plugin_name ?>-ai-title-section1"></label>
                <input type="text" name="<?php echo $this->plugin_name ?>-ai-title-section1" value="<?php echo get_option($this->plugin_name.'_ai_title_section1') ?>"/>
            </fieldset>

            <fieldset style="margin-left: 20px">
                <legend>Article 1</legend>

                <label for="<?php echo $this->plugin_name ?>-ai-section1-article1"></label>
                <textarea style="width: 90%" rows="5" type="text" name="<?php echo $this->plugin_name ?>-ai-section1-article1"><?php echo get_option($this->plugin_name.'_ai_section1_article1') ?></textarea>
            </fieldset>

            <fieldset style="margin-left: 20px">
                <legend>Image</legend>

                <label for="<?php echo $this->plugin_name ?>-ai-section1-img"></label>
                <input style="width: 50%" rows="5" type="url" name="<?php echo $this->plugin_name ?>-ai-section1-img" value="<?php echo get_option($this->plugin_name.'_ai_section1_img') ?>" />
            </fieldset>
        </div>
        <div style="box-shadow: lightgrey -5px 5px 7px; padding: 10px; margin: 20px 0px">
            <label><b>Section 2 :</b></label>
            <fieldset style="margin-left: 20px">
                <legend>Title </legend>

                <label for="<?php echo $this->plugin_name ?>-ai-title-section2"></label>
                <input type="text" name="<?php echo $this->plugin_name ?>-ai-title-section2" value="<?php echo get_option($this->plugin_name.'_ai_title_section2') ?>"/>
            </fieldset>

            <fieldset style="margin-left: 20px">
                <legend>Article 1</legend>

                <label for="<?php echo $this->plugin_name ?>-ai-section2-article1"></label>
                <textarea style="width: 90%" rows="5" type="text" name="<?php echo $this->plugin_name ?>-ai-section2-article1"><?php echo get_option($this->plugin_name.'_ai_section2_article1') ?></textarea>
            </fieldset>

            <fieldset style="margin-left: 20px">
                <legend>Image</legend>

                <label for="<?php echo $this->plugin_name ?>-ai-section2-img"></label>
                <input style="width: 50%" rows="5" type="url" name="<?php echo $this->plugin_name ?>-ai-section2-img" value="<?php echo get_option($this->plugin_name.'_ai_section2_img') ?>" />
            </fieldset>
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
