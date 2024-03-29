<div class="wrap <?php esc_attr(  $this->plugin_name.'-main-admin-prompts' ) ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Prompts')?></h2>
    <hr>
    <form id="veep_form_prompts" method="post" action="">
        <?php
            echo wp_kses_post( init_nonce() );

            echo generate_checkbox();

            echo generate_tabs_escaped();

            echo wp_kses_post( generate_prompt_form_section(false, 'benefits', __( 'Benefits' ), 0, '') );
            echo wp_kses_post( generate_prompt_form_section(false, 'pains', __( 'Pains' ),1) );
            echo wp_kses_post( generate_prompt_form_section(false, 'solutions', __( 'Solutions' ), 2) );
            echo wp_kses_post( generate_prompt_form_section(false, 'strengths', __( 'Strengths' ), 3) );
            echo wp_kses_post( generate_prompt_form_section(false, 'faq', 'FAQ', 4) );
            echo wp_kses_post( generate_prompt_form_section(false, 'contact', 'contact', 5) );
        ?>
        <div class="veep_actions">
            <?php
                echo generate_button_escaped($pn, 'ai-save', __('Save'));
                echo generate_button_escaped($pn, 'ai-next', __('Next'));
            ?>

            <input class="veepdotai-ai-site-ts" name="veepdotai-ai-site-ts" />
        </div>
    </form>
</div>
