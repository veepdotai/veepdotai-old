<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.3.3/css/rowReorder.dataTables.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.datatables.net/rowreorder/1.3.3/js/dataTables.rowReorder.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script-->

<div class="wrap <?php esc_attr( $this->plugin_name.'-main-admin-editorial_strategy' ) ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Stratégie éditoriale')?></h2>
    <hr>
    <form method="post" action="">
        <?php
            echo wp_kses_post( init_nonce() );

            $general_context = esc_html( 'A set of questions is going to be generated from the context you provided during your project pitch.' );

            echo ( generate_editorial_strategy_form_section_escaped(false, 'edstrat', 'Editorial Strategy', 0, $general_context) );

        ?>

        <div class="veep_actions">
            <?php
                if (in_array('veepdotai_role_admin', wp_get_current_user()->roles)) {
                    echo('<p><input id="veepdotai-content-id" type="text" placeholder="Type your content id" value=""/></p>');
                }
            ?>

            <p id="loadingDiv">Loading...</p>

            <?php
                echo generate_button_escaped($pn, 'ai-save', __( 'Save', 'veepdotai' ));
                if (! in_array('veepdotai_role_user', wp_get_current_user()->roles)) {
                    echo generate_button_escaped($pn, 'ai-generate-editorial-strategy', __( 'Generate editorial strategy', 'veepdotai' ));
                }
                echo generate_button_escaped($pn, 'ai-generate-all', __('Generate all', 'veepdotai' ));
            ?>

        </div>
    </form>
    <script>
        jQuery("input[name='veepdotai-ai-generate-editorial-strategy']")[0].addEventListener('click', function() { ajax_edstrat_generate_editorial_strategy(event) });
    </script>

</div>
