<?php

// Support tab HTML
/*
include( VEEP_DIR . '/templates/page-support.php' );
$support_html = new Veep_Support();
$support_html = $support_html->get_html();
*/

// Settings
$settings_admin = new Veep_Settings_Admin();
$settings_array = $settings_admin->get_settings();
$i18n = $settings_admin->get_i18n_strings();
//$image_sizes = $settings_admin->get_image_size_labels();

// Useful data
$data = VEEP()->helper->settings;

?>

<script>

window.VEEP = {
    __: function(str) {
        return ('undefined' !== typeof VEEP.i18n[str]) ? VEEP.i18n[str] : str;
    },
    data: <?php echo json_encode( $data ); ?>,
    i18n: <?php echo json_encode( $i18n ); ?>,
//    image_sizes: <?php echo json_encode( $image_sizes ); ?>,
    support_html: <?php echo json_encode( $support_html ); ?>,
    nonce: '<?php echo wp_create_nonce( 'veep_admin_nonce' ); ?>',
    hooks: VEEP.hooks // WP-JS-Hooks
};

// Settings load hook
VEEP.data.settings = VEEP.hooks.applyFilters('veep/load_settings', VEEP.data.settings);

</script>
<link href="<?php echo VEEP_URL; ?>/assets/css/admin.css?ver=<?php echo VEEP_VERSION; ?>" rel="stylesheet">
<link href="<?php echo VEEP_URL; ?>/assets/vendor/fSelect/fSelect.css?ver=<?php echo VEEP_VERSION; ?>" rel="stylesheet">
<link href="<?php echo VEEP_URL; ?>/assets/vendor/vue/vue-select/vue-select.css" rel="stylesheet">

<div id="app">
    <div class="veep-header">
        <span class="veep-logo" title="Veep">&nbsp;</span>
        <span class="veep-version">v<?php echo VEEP_VERSION; ?></span>

        <span class="veep-header-nav">
            <a class="veep-tab" :class="{ active: active_tab == 'ai' }" @click="tabClick('ai')"><?php _e( 'AI', 'veep' ); ?></a>
            <a class="veep-tab" :class="{ active: active_tab == 'settings' }" @click="tabClick('settings')"><?php _e( 'Settings', 'veep' ); ?></a>
            <a class="veep-tab" :class="{ active: active_tab == 'support' }" @click="tabClick('support')"><?php _e( 'Support', 'veep' ); ?></a>
        </span>

    </div>

    <div class="wrap">

        <!-- Settings tab -->

        <div class="facetwp-region facetwp-region-settings" :class="{ active: active_tab == 'support' }">
            <div class="facetwp-subnav">
                <?php foreach ( $settings_array as $key => $tab ) : ?>
                <a :class="{ active: active_subnav == '<?php echo $key; ?>' }" @click="active_subnav = '<?php echo $key; ?>'"><?php echo $tab['label']; ?></a>
                <?php endforeach; ?>
            </div>

            <form>
                <?php foreach ( $settings_array as $key => $tab ) : ?>
                <div class="facetwp-settings-section" :class="{ active: active_subnav == '<?php echo $key; ?>' }">
                    <?php foreach ( $tab['fields'] as $field_data ) : ?>
                    <div class="facetwp-row">
                        <div>
                            <?php echo $field_data['label']; ?>
                            <?php if ( isset( $field_data['notes'] ) ) : ?>
                            <div class="facetwp-tooltip">
                                <span class="icon-question">?</span>
                                <div class="facetwp-tooltip-content"><?php echo $field_data['notes']; ?></div>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div><?php echo $field_data['html']; ?></div>
                        <div><?php echo $field_data['html']; ?></div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endforeach; ?>
            </form>
        </div>

    </div>
</div>
