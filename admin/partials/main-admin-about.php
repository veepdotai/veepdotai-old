<div class="wrap <?php esc_attr_e( $this->plugin_name.'-main-admin-about' ) ?>">
    <?php
        use League\CommonMark\GithubFlavoredMarkdownConverter;

        $text = file_get_contents(VEEPDOTAI_PLUGIN_DIR . '/README.md');
        $output = (new GithubFlavoredMarkdownConverter())->convert($text);

        echo wp_kses_post( $output );
    ?>
</div>
