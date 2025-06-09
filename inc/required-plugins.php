<?php
 if (!defined('ABSPATH')) {
    exit;
}

add_action('tgmpa_register', 'your_plugin_register_required_plugins');

function your_plugin_register_required_plugins() {
    $plugins = array(
        array(
            'name'      => 'WP Mail SMTP',
            'slug'      => 'wp-mail-smtp',
            'required'  => true,
        ),
    );

    $config = array(
        'id'           => 'akotaBookings',
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => false,
        'is_automatic' => false,
    );

    tgmpa($plugins, $config);
}



?>