<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.css" integrity="sha512-T3VL1q6jMUIzGLRB9z86oJg9PgF7A55eC2XkB93zyWSqQw3Ju+6IEJZYBfT7E9wOHM7HCMCOZSpcssxnUn6AeQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js" integrity="sha512-ztxZscxb55lKL+xmWGZEbBHekIzy+1qYKHGZTWZYH1GUwxy0hiA18lW6ORIMj4DHRgvmP/qGcvqwEyFFV7OYVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="wrap <?php esc_attr( $this->plugin_name.'-main-admin-site' ) ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Calendrier éditorial')?></h2>
    <hr>
    <form method="post" action="">
        <?php
            echo wp_kses_post( init_nonce() );

            echo generate_editorial_calendar_selector('editorial-calendar-question');

            echo generate_editorial_calendar_tabs_escaped(get_pages());

            echo wp_kses_post( generate_editorial_calendar_vocal_form_section(true, 'vocal', 'Post vocal', 0) );
            echo ( generate_editorial_calendar_form_section_escaped(false, 'question', 'Question', 5) );
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
                if (in_array('veepdotai_role_admin', wp_get_current_user()->roles)) {
                    echo('<p><input id="veepdotai-content-id" type="text" placeholder="Type your content id" value=""/></p>');
                }
            ?>
            <p id="loadingDiv">Loading...</p>

            <?php
                echo generate_button_escaped($pn, 'ai-save', __('Save'));
                if (! in_array('veepdotai_role_user', wp_get_current_user()->roles)) {
                    echo generate_button_escaped($pn, 'ai-transcribe', __( 'Retranscrire le vocal'));
                    echo generate_button_escaped($pn, 'ai-generate-images', __( 'Generate images'));
                    echo generate_button_escaped($pn, 'ai-generate-article', __( 'Generate article' ));
                    echo generate_button_escaped($pn, 'ai-publish-article', __( 'Publish article' ));
                    echo generate_button_escaped($pn, 'ai-generate-post-linkedin', __( 'Generate linkedin post' ));
                    echo generate_button_escaped($pn, 'ai-generate-post-facebook', __( 'Generate facebook post' ));
                    echo generate_button_escaped($pn, 'ai-generate-post-instagram', __( 'Generate instagram post' ));
                }
                echo generate_button_escaped($pn, 'ai-generate-all', __('Generate all' ));
            ?>

        </div>
    </form>
    <script>
        jQuery("input[name='veepdotai-ai-transcribe']")[0].addEventListener('click', function() {ajax_edcal_transcribe(event)});
        jQuery("input[name='veepdotai-ai-generate-article']")[0].addEventListener('click', function() {ajax_edcal_generate_article(event)});
        jQuery("input[name='veepdotai-ai-publish-article']")[0].addEventListener('click', function() {ajax_edcal_publish_article(event)});

    </script>

</div>
