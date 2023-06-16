<div class="wrap <?php esc_attr( $this->plugin_name.'-main-admin-record' ) ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Interview')?></h2>
    <hr>
    <form method="post" action="">
        <input type="button" value="Je suis prêt" onclick="start(document.getElementById('context').innerHTML)"/>
        <?php
            echo wp_kses_post( init_nonce() );

$context = <<<_EOC_
Bonjour, je me présente, je suis Vipe.

Je suis une IA, une intelligence artificielle, et je vais vous interviewer.

N'hésitez pas à répondre aux questions de manière détaillée. Je me chargerai
de corriger nos échanges par la suite (ponctuation...).

Prêt ? Allons-y !
_EOC_;


            echo wp_kses_post( generate_context($context) );

            echo generate_tabs_escaped();

            echo wp_kses_post( generate_interview_hero_section(true, 'benefits', __( 'Benefits' ), 0, '') );
            echo wp_kses_post( generate_interview_form_section(true, 'pains', __( 'Pains' ),1) );
            echo wp_kses_post( generate_interview_form_section(true, 'solutions', __( 'Solutions' ), 2) );
            echo wp_kses_post( generate_interview_form_section(true, 'strengths', __( 'Strengths' ), 3) );
            echo wp_kses_post( generate_interview_form_section(true, 'faq', 'FAQ', 4) );
            echo wp_kses_post( generate_interview_contact_section(true, 'contact', 'Prise de contact', 5) );
        ?>
        <div class="veep_actions">
            <?php
                echo generate_button_escaped($pn, 'ai-save', __('Save'));
                echo generate_button_escaped($pn, 'ai-next', __('Next'));
            ?>
        </div>
    </form>
</div>
