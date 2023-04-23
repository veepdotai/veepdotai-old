<styles>
    .section {
        box-shadow: lightgrey -5px 5px 7px;
        padding: 10px;
        margin: 15px 0px;        
    }

    .section label {
        font-weight: bold;
    }
</styles>
<div class="wrap <?php echo $this->plugin_name.'-main-admin-site' ?>">
    <h2><?php esc_html_e(get_admin_page_title())?></h2>
    <hr>
    <form method="post" action="">
        <?php
            echo init_nonce();

            echo generate_form_section(0);

            echo generate_form_section(1);
            echo generate_form_section(2);
            echo generate_form_section(3);
            echo generate_form_section(4);
            echo generate_form_section(5);

            echo generate_template_selector(get_pages());
        ?>

        <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-save" value="<?php _e( 'Save', $this->plugin_name ) ?>" />
        <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-generate-site" value="<?php _e( 'Generate site', $this->plugin_name ) ?>" /><br>
    </form>
</div>
