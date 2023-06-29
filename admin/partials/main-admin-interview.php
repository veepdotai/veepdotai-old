<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.css" integrity="sha512-T3VL1q6jMUIzGLRB9z86oJg9PgF7A55eC2XkB93zyWSqQw3Ju+6IEJZYBfT7E9wOHM7HCMCOZSpcssxnUn6AeQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js" integrity="sha512-ztxZscxb55lKL+xmWGZEbBHekIzy+1qYKHGZTWZYH1GUwxy0hiA18lW6ORIMj4DHRgvmP/qGcvqwEyFFV7OYVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="wrap <?php esc_attr_e( $this->plugin_name.'-main-admin-interview' ) ?>">

    <?php echo generate_help_image('interview');?>
    <h2><?php esc_html_e(get_admin_page_title() . ' / Interview')?></h2>
    <?php /*echo generate_switch_mode();*/?>

    <form id="veep_form_interview" method="post" action="">

        <?php
            echo wp_kses_post( init_nonce() );

            $general_context = esc_html( 'Tell your organization\'s pitch.' );
            $benefits_context = esc_html( 'Tell the value for your users. What is the interest of your organization, your products, your solutions? Don\'t be afraid to repeat yourself.' );
            $pains_context = esc_html( 'Tell the pains you address. Talk about you users\' needs. Talk about your persona.' );
            $solutions_context = esc_html( 'Talk about your products and services or solutions that resolve thier pains. Name and describe them briefly.' );
            $strengths_context = esc_html( 'Talk about your difference. What makes you unique? Give examples.' );

            echo wp_kses_post( generate_context($general_context) );

            echo generate_tabs_escaped();

            echo generate_interview_hero_section( true, 'benefits', __( 'Benefits' ), 0, $benefits_context );
            echo wp_kses_post( generate_interview_form_section(true, 'pains', __( 'Pains' ),1, $pains_context ) );
            echo wp_kses_post( generate_interview_form_section(true, 'solutions', __( 'Solutions' ), 2, $solutions_context) );
            echo wp_kses_post( generate_interview_form_section(true, 'strengths', __( 'Strengths' ), 3, $strengths_context) );
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
            <p id="loadingDiv" class="modal">Loading...</p>

            <?php
                echo generate_button_escaped($pn, 'ai-save', __('Save'));
                //echo generate_button_escaped($pn, 'ai-next', __('Next'));
            ?>
        </div>
    </form>
</div>
