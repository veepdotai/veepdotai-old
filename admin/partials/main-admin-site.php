<div class="wrap <?php esc_attr( $this->plugin_name.'-main-admin-site' ) ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Site')?></h2>
    <hr>
    <form method="post" action="">
        <?php
            echo wp_kses_post( init_nonce() );

            echo generate_tabs_escaped();

            echo generate_hero_section_escaped(false, 'benefits', __( 'Benefits', 'veepdotai' ), 0, '');
            echo generate_form_section_escaped(false, 'pains', __( 'Pains', 'veepdotai' ), 1);
            echo generate_form_section_escaped(false, 'solutions', __( 'Solutions', 'veepdotai' ), 2);
            echo generate_form_section_escaped(false, 'strengths', __( 'Strengths', 'veepdotai' ), 3);
            echo generate_form_section_escaped(false, 'faq', __('FAQ', 'veepdotai' ), 4);
            echo generate_contact_section_escaped(false, 'contact', __('Contact', 'veepdotai' ), 5);

            echo generate_template_selector(get_pages());
        ?>

        <div class="veep_actions">
            <?php
                echo generate_button_escaped($pn, 'ai-save', __('Save'));
                //if (! in_array('veepdotai_role_user', wp_get_current_user()->roles)) {
                    echo generate_button_escaped($pn, 'ai-transform', __( 'Transform original text', 'veepdotai' ));
                    echo generate_button_escaped($pn, 'ai-generate-images', __( 'Generate images', 'veepdotai' ));
                    echo generate_button_escaped($pn, 'ai-generate-site', __( 'Generate site', 'veepdotai' ));
                    echo generate_button_escaped($pn, 'ai-generate-pages', __( 'Generate pages', 'veepdotai' ));
                //}
                echo generate_button_escaped($pn, 'ai-generate-all', __('Generate all', 'veepdotai' ));
            ?>

        </div>
    </form>
</div>
