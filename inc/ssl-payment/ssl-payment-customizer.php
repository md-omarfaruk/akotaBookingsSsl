<?php
 if (!defined('ABSPATH')) {
    exit;
}

add_action( 'customize_register', 'akota_payment_customize' );

function akota_payment_customize($wp_customize) {
    $wp_customize->add_panel('akota_payment', [
        'title'       => __('Akota Payment', 'akotaPayment'),
        'description' => __('Customize the Akota Bookings Ssl Payment credential ', 'akotaPayment'),
        'priority'    => 150,
    ]);

        // SslCommerz Store Id customize----------- 
    $wp_customize->add_section('ssl_store_id', [
        'title' => 'SslCommerz Store Id',
        'panel' => 'akota_payment',
    ]);

    $wp_customize->add_setting("store_id", [
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control("store_id_control", [
        'label'    => __('Store ID', 'Store Id'),
        'section'  => 'ssl_store_id',
        'settings' => "store_id",
        'type'     => 'text',
    ]);

       // SslCommerz Store Password customize----------- 
       $wp_customize->add_section('ssl_store_passw', [
        'title' => 'SslCommerz Store Password',
        'panel' => 'akota_payment',
    ]);

    $wp_customize->add_setting("store_passw", [
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control("store_passw_control", [
        'label'    => __('Store Password', 'Store Password'),
        'section'  => 'ssl_store_passw',
        'settings' => "store_passw",
        'type'     => 'text',
    ]);


}


?>