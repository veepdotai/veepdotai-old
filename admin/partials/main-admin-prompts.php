<div class="wrap <?php esc_attr(  $this->plugin_name.'-main-admin-prompts' ) ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Prompts')?></h2>
    <hr>
    <form method="post" action="">
        <?php
            echo wp_kses_post( init_nonce() );

            echo generate_tabs_escaped();

            echo generate_checkbox();

            echo wp_kses_post( generate_prompt_form_section(false, 'benefices', 'Bénéfice', 0, '') );
            echo wp_kses_post( generate_prompt_form_section(false, 'besoins', 'Besoins',1) );
            echo wp_kses_post( generate_prompt_form_section(false, 'solutions', 'Solutions', 2) );
            echo wp_kses_post( generate_prompt_form_section(false, 'differenciation', 'Différenciation', 3) );
            echo wp_kses_post( generate_prompt_form_section(false, 'faq', 'FAQ', 4) );
            echo wp_kses_post( generate_prompt_form_section(false, 'contact', 'contact', 5) );
        ?>
        <div class="veep_actions">
            <?php
                echo generate_button_escaped($pn, 'ai-save', __('Save'));
                echo generate_button_escaped($pn, 'ai-next', __('Next'));
                echo generate_button_escaped($pn, 'ai-transform', __('Transform original text'));
            ?>

            <input class="veepdotai_ai_site_ts" name="veepdotai_ai_site_ts" />
        </div>
    </form>
</div>
