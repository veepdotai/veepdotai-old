<div class="wrap <?php esc_attr_e( $this->plugin_name.'-main-admin-interview' ) ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Interview')?></h2>
    <hr>
        <input type="button" value="Je suis prêt" onclick="start(document.getElementById('context').innerHTML)"/>
        <form method="post" action="">

        <?php
            echo wp_kses_post( init_nonce() );

            $context = esc_html( 'Hello, I am VEEP. I am an AI and I am going to interview you. Thanks to make detailed answers to my questions. Do not worry neither about missing ponctuation nor orthograph, I will take care of them during content processing.' );

            echo wp_kses_post( generate_context($context) );

            echo generate_tabs_escaped();

            echo generate_interview_hero_section( true, 'benefices', 'Bénéfice', 0, '' );
            echo wp_kses_post( generate_interview_form_section(true, 'besoins', 'Besoins',1) );
            echo wp_kses_post( generate_interview_form_section(true, 'solutions', 'Solutions', 2) );
            echo wp_kses_post( generate_interview_form_section(true, 'differenciation', 'Différenciation', 3) );
            echo wp_kses_post( generate_interview_form_section(true, 'faq', 'FAQ', 4) );
            echo wp_kses_post( generate_interview_contact_section(true, 'contact', 'Prise de contact', 5) );
        ?>
      
        <div class="timer">
            <p>
                Durée du vocal : <label id="minutes">00</label>:<label id="seconds">00</label>
            </p>
        </div>

        <div class="veep-content-id" style="visibility: hidden;">
            <?php
                if (in_array('veepdotai_role_admin', wp_get_current_user()->roles)) {
                    echo('<p><input id="veepdotai-content-id" type="text" placeholder="Type your content id" value=""/></p>');
                }
            ?>
        </div>

        <div class="veep_actions">
            <?php
                echo generate_button_escaped($pn, 'ai-save', __('Save'));
                echo generate_button_escaped($pn, 'ai-next', __('Next'));
            ?>
        </div>
    </form>
</div>
