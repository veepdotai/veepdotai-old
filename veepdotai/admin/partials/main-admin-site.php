<div class="wrap <?php echo $this->plugin_name.'-main-admin-site' ?>">
    <h2><?php esc_html_e(get_admin_page_title())?></h2>
    <hr>
    <form method="post" action="">
        <input type="button" value="Je suis prêt" onclick="start(document.getElementById('context').innerHTML)"/>
        <?php
            echo init_nonce();
$context = <<<_EOC_
Bonjour, je me présente, je suis Vipe.

Je suis une IA, une intelligence artificielle, et je vais construire votre
landing page à l'issue de cette interview.

Je vais donc vous poser quelques questions.

Prêt ? Allons-y !
_EOC_;
            echo generate_context($context);

            echo generate_hero_section('benefices', 'Bénéfice', 0, '');
            echo generate_form_section('besoins', 'Besoins',1);
            echo generate_form_section('solutions', 'Solutions', 2);
            echo generate_form_section('differenciation', 'Différenciation', 3);
            echo generate_form_section('faq', 'FAQ', 4);
            echo generate_contact_section('contact', 'Prise de contact', 5);

            echo generate_template_selector(get_pages());
        ?>

        <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-save" value="<?php _e( 'Save', $this->plugin_name ) ?>" />
        <input class="button-primary" type="submit" name="<?php echo $this->plugin_name ?>-ai-generate-site" value="<?php _e( 'Generate site', $this->plugin_name ) ?>" /><br>
    </form>
</div>
