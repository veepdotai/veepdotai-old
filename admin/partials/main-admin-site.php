<div class="wrap <?php esc_attr( $this->plugin_name.'-main-admin-site' ) ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Site')?></h2>
    <hr>
    <form method="post" action="">
        <?php
            echo wp_kses_post( init_nonce() );

            echo generate_tabs_escaped();

            echo generate_hero_section_escaped(false, 'benefices', 'Bénéfice', 0, '');
            echo generate_form_section_escaped(false, 'besoins', 'Besoins',1);
            echo generate_form_section_escaped(false, 'solutions', 'Solutions', 2);
            echo generate_form_section_escaped(false, 'differenciation', 'Différenciation', 3);
            echo generate_form_section_escaped(false, 'faq', 'FAQ', 4);
            echo generate_contact_section_escaped(false, 'contact', 'Prise de contact', 5);

            echo generate_template_selector(get_pages());
        ?>

        <div class="veep_actions">
            <?php
                echo generate_button_escaped($pn, 'ai-save', __('Save'));
                if (! in_array('veepdotai_role_user', wp_get_current_user()->roles)) {
                    echo generate_button_escaped($pn, 'ai-generate-images', __( 'Generate images' ));
                    echo generate_button_escaped($pn, 'ai-generate-site', __( 'Generate site' ));
                    echo generate_button_escaped($pn, 'ai-generate-pages', __( 'Generate pages' ));
                    echo generate_button_escaped($pn, 'ai-generate-articles', __( 'Generate articles' ));
                }
                echo generate_button_escaped($pn, 'ai-generate-all', __('Generate All' ));
            ?>

        </div>
    </form>
</div>
