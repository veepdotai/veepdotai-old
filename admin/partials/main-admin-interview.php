<div class="wrap <?php esc_attr_e( $this->plugin_name.'-main-admin-interview' ) ?>">
    <h2><?php esc_html_e(get_admin_page_title() . ' / Interview')?></h2>
    <hr>
    <form method="post" action="">

        <?php
                echo wp_kses_post( init_nonce() );
        ?>

        <div id="controls">
            <button id="recordButton">Record</button>
            <button id="pauseButton" disabled>Pause</button>
            <button id="stopButton" disabled>Stop</button>
        </div>
        <div id="formats">Format: start recording to see sample rate</div>
        <p><strong>Recordings:</strong></p>
        <ol id="recordingsList"></ol>
        
        <div class="veep_actions">
            <?php
                echo generate_button_escaped($pn, 'ai-save', __('Save'));
                echo generate_button_escaped($pn, 'ai-next', __('Next'));
            ?>
        </div>
    </form>
</div>
