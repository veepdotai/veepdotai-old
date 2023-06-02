<div class="wrap <?php esc_attr( $this->plugin_name.'-main-admin-site' ) ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Calendrier éditorial')?></h2>
    <hr>
    <form method="post" action="">
        <?php
            echo wp_kses_post( init_nonce() );

            echo generate_editorial_calendar_selector(get_pages());

            echo generate_editorial_calendar_tabs_escaped(get_pages());

            echo wp_kses_post( generate_editorial_calendar_vocal_form_section(true, 'vocal', 'Post vocal', 0) );
            echo ( generate_editorial_calendar_form_section_escaped(false, 'article', 'Article', 1) );
            echo ( generate_editorial_calendar_form_section_escaped(false, 'post_li', 'Post LinkedIn', 2) );
            echo ( generate_editorial_calendar_form_section_escaped(false, 'post_fb', 'Post Facebook', 3) );
            echo ( generate_editorial_calendar_form_section_escaped(false, 'post_insta', 'Post Instagram', 4) );
        ?>

        <div class="timer">
            <p>
                Durée du vocal : <label id="minutes">00</label>:<label id="seconds">00</label>
            </p>
        </div>

        <div class="veep_actions">
            <?php
                echo generate_button_escaped($pn, 'ai-save', __('Save'));
                if (! in_array('veepdotai_role_user', wp_get_current_user()->roles)) {
                    echo generate_button_escaped($pn, 'ai-generate-images', __( 'Generate images' ));
                    echo generate_button_escaped($pn, 'ai-generate-article', __( 'Generate article' ));
                    echo generate_button_escaped($pn, 'ai-generate-post-linkedin', __( 'Generate linkedin post' ));
                    echo generate_button_escaped($pn, 'ai-generate-post-facebook', __( 'Generate facebook post' ));
                    echo generate_button_escaped($pn, 'ai-generate-post-instagram', __( 'Generate instagram post' ));
                }
                echo generate_button_escaped($pn, 'ai-generate-all', __('Generate all' ));
            ?>

        </div>
    </form>
</div>
