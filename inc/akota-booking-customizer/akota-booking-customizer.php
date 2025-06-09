<?php
 if (!defined('ABSPATH')) {
    exit;
}

add_action( 'customize_register', 'akota_bookings_customize' );

function akota_bookings_customize($wp_customize) {
    $wp_customize->add_panel('akota_bookings', [
        'title'       => __('Akota Bookings', 'akotaBookings'),
        'description' => __('Customize the Akota Bookings popup content', 'akotaBookings'),
        'priority'    => 160,
    ]);


    if (file_exists(plugin_dir_path(__FILE__) . './all-rooms.php')) {
        require_once(plugin_dir_path(__FILE__) . './all-rooms.php');
    }
    
}


?>