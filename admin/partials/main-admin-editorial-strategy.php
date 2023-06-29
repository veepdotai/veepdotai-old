<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.css" integrity="sha512-T3VL1q6jMUIzGLRB9z86oJg9PgF7A55eC2XkB93zyWSqQw3Ju+6IEJZYBfT7E9wOHM7HCMCOZSpcssxnUn6AeQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js" integrity="sha512-ztxZscxb55lKL+xmWGZEbBHekIzy+1qYKHGZTWZYH1GUwxy0hiA18lW6ORIMj4DHRgvmP/qGcvqwEyFFV7OYVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/rowreorder/1.3.3/js/dataTables.rowReorder.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script-->

<div class="wrap <?php esc_attr( $this->plugin_name.'-main-admin-edstrat' ) ?>">

    <?php echo generate_help_image('edstrat');?>
    <h2><?php get_admin_page_title() . '/' . esc_html_e('Stratégie éditoriale', 'veepdotai')?></h2>
    <?php echo generate_switch_mode();?>

    <form id="veep_form_edstrat" method="post" action="">
        <?php
            echo wp_kses_post( init_nonce() );

            $general_context = esc_html( 'A set of questions is going to be generated from the context you provided during your project pitch.' );

            echo ( generate_editorial_strategy_form_section_escaped(false, 'edstrat', 'Editorial Strategy', 0, $general_context) );

        ?>


        <div class="veep_actions">
            <?php echo('<p><input id="veepdotai-content-id" type="text" placeholder="Type your content id" value=""/></p>');?>
            <p id="loadingDiv" class="modal">Loading...</p>
            <?php
                echo generate_button_escaped($pn, 'ai-save', __( 'Save', 'veepdotai' ));
                echo generate_button_escaped($pn, 'ai-generate-editorial-strategy', __( 'Generate editorial strategy', 'veepdotai' ));
            ?>
        </div>
    </form>
    <script>
        jQuery("input[name='veepdotai-ai-generate-editorial-strategy']")[0].addEventListener('click', function() { ajax_edstrat_generate_editorial_strategy(event) });
    </script>

</div>
