<div class="wrap <?php echo $this->plugin_name.'-main-admin-site' ?>">
    <h2><?php esc_html_e(get_admin_page_title())?></h2>
    <hr>
    <form method="post" action="">
        <?php
            echo init_nonce();

            echo generate_hero_section(false, 'benefices', 'Bénéfice', 0, '');
            echo generate_form_section(false, 'besoins', 'Besoins',1);
            echo generate_form_section(false, 'solutions', 'Solutions', 2);
            echo generate_form_section(false, 'differenciation', 'Différenciation', 3);
            echo generate_form_section(false, 'faq', 'FAQ', 4);
            echo generate_contact_section(false, 'contact', 'Prise de contact', 5);

            echo generate_template_selector(get_pages());
        ?>

        <div class="veep_actions">
            <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-save" value="<?php _e( 'Save', $this->plugin_name ) ?>" />
            <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-generate-images" value="<?php _e( 'Generate images', $this->plugin_name ) ?>" />
            <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-generate-site" value="<?php _e( 'Generate site', $this->plugin_name ) ?>" />
            <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-generate-pages" value="<?php _e( 'Generate pages', $this->plugin_name ) ?>" />
        </div>
    </form>
</div>
