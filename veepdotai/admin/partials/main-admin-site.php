<div class="wrap <?php echo $this->plugin_name.'-main-admin-site' ?>">
    <h2><?php esc_html_e(get_admin_page_title())?></h2>
    <ul>
        <li><?php _e( 'If you enjoy the plugin, we would really appreciate if you could <a href="https://wordpress.org/support/plugin/veep/reviews/" target="_blank">drop us a review</a> or support us with <a href="https://www.paypal.me/veep" target="_blank">a donation</a>', $this->plugin_name ) ?></li>
        <li><?php _e( 'If you find a bug or have any suggestion, create a <a href="https://wordpress.org/support/plugin/veep" target="_blank">new topic in the plugin support</a>', $this->plugin_name ) ?></li>
        <li><?php _e( 'If you need detailed information about the plugin, have a look at <a href="https://www.veep.ai/veep-user-guide/" target="_blank">the user guide</a>', $this->plugin_name ) ?></li>
    </ul>
    <hr>
    <form method="post" action="">
        <?php wp_nonce_field( $this->plugin_name.'-main_admin_site', $this->plugin_name.'-main_admin_site_nonce' ) ?>

        <fieldset>
            <legend>Clé de licence</legend>

            <label for="<?php echo $this->plugin_name ?>-ai-api_key"></label>
            <input type="text" name="<?php echo $this->plugin_name ?>-ai-api_key" value="<?php echo get_option($this->plugin_name.'_ai_api_key') ?>" required/>
            <p><?php _e( 'Open API Key. If you dont have one, <a href="https://platform.openai.com/account/api-keys" target="_blank">get an API Key</a>', $this->plugin_name ) ?></p>
            <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-save-api-key" value="<?php _e( 'Save API key', $this->plugin_name ) ?>" /><br>
        </fieldset>
        <hr>
        <fieldset>
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
        </fieldset>
        <hr>
        <fieldset style="box-shadow: lightgrey -5px 5px 7px; padding: 10px; padding: 10px; margin: 15px 0px">
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

        </fieldset>
        <fieldset style="box-shadow: lightgrey -5px 5px 7px; padding: 10px; margin: 15px 0px">
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
        </fieldset>
        <fieldset>
            <legend>Template</legend>

            <label for="<?php echo $this->plugin_name ?>-templates"></label>
            <select name="<?php echo $this->plugin_name ?>-templates">
                <option value="<?php echo $this->plugin_name ?>-templatelp" <?php selected($selected_option, $this->plugin_name.'-templatelp') ?>>Template de landing page</option>
                <option value="<?php echo $this->plugin_name ?>-template2" <?php selected($selected_option, $this->plugin_name.'-template2') ?>>Template 2</option>
                <option value="<?php echo $this->plugin_name ?>-template3" <?php selected($selected_option, $this->plugin_name.'-template3') ?>>Template 3</option>
            </select>
        </fieldset><br>


        <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-save" value="<?php _e( 'Save', $this->plugin_name ) ?>" />


        <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-site" value="<?php _e( 'Generate site', $this->plugin_name ) ?>" /><br>


    </form>
</div>
