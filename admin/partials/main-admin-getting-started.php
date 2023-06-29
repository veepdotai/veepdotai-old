<?php
include('veepdotai-form-functions.php');
?>
<div class="wrap help-system <?php esc_attr( $this->plugin_name.'-main-admin-getting-started' ) ?>">

    <h2><?php esc_html_e(get_admin_page_title() . ' / Getting started')?></h2>

    <?php
        $content = generate_help_html_from_markdown('getting-started');

        echo $content;
    ?>

</div>
