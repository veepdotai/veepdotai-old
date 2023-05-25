<div class="wrap <?php echo $this->plugin_name.'-main-admin-site' ?>">
    <h2><?php esc_html_e(get_admin_page_title())?></h2>
    <hr>
    <form method="post" action="">
        <?php
            echo init_nonce();

            echo generate_checkbox();

            echo generate_prompt_form_section(false, 'benefices', 'Bénéfice', 0, '');
            echo generate_prompt_form_section(false, 'besoins', 'Besoins',1);
            echo generate_prompt_form_section(false, 'solutions', 'Solutions', 2);
            echo generate_prompt_form_section(false, 'differenciation', 'Différenciation', 3);
            echo generate_prompt_form_section(false, 'faq', 'FAQ', 4);
            echo generate_prompt_form_section(false, 'contact', 'contact', 5);
        ?>
        <div class="veep_actions">
            <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-save" value="<?php _e( 'Save', $this->plugin_name ) ?>" />
            <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-next" value="<?php _e( 'Next', $this->plugin_name ) ?>" />
            
            <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-transform" value="<?php _e( 'Transform', $this->plugin_name ) ?>" />
            <input class="veepdotai_ai_site_ts" name="veepdotai_ai_site_ts" />
        </div>
    </form>
</div>
