<?php

/*
 * Plugin Name:       Akota Bookings
 * Description:       This is custom developed plugin for booking room.
 * Version:           1.0
 * Author:            Md. Omar Faruk
 * Author URI:        https://dev-muhammad-omar.pantheonsite.io/https://author.example.com/
 * License:           GPL v2 or later
 * Text Domain:       akotaBookings
 */


 if (!defined('ABSPATH')) {
    exit;
}

function form_enqueue_assets() {
    wp_enqueue_script('jquery');
    wp_enqueue_style('main-style', plugin_dir_url(__FILE__) . 'assets/css/style.css');
    wp_enqueue_style('media-query-style', plugin_dir_url(__FILE__) . 'assets/css/media-query.css');
    wp_enqueue_script('script', plugin_dir_url(__FILE__) . 'assets/js/script.js', array(), "1.0", true);
    
    // SslCommerz Scripts
    wp_enqueue_script('sslcommerz-script', plugin_dir_url(__FILE__) . 'inc/ssl-payment/sslcommerz.js', array('jquery'), null, true);
    wp_localize_script('sslcommerz-script', 'sslcommerz_ajax', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'form_enqueue_assets');


function wp_bookings_enqueue_admin_styles($hook_suffix) {
    if ($hook_suffix === 'toplevel_page_wp-bookings') {
        wp_enqueue_style('wp-bookings-admin-style', plugin_dir_url(__FILE__) . 'inc/booking-admin-menu-item/css/backend-style.css', [], '1.0.0'
        );
    }
}
add_action('admin_enqueue_scripts', 'wp_bookings_enqueue_admin_styles');

register_activation_hook(__FILE__, 'wp_bookings_activate');

function wp_bookings_activate()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "bookings";

    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE $table_name (
            id INT NOT NULL AUTO_INCREMENT,
            first_name VARCHAR(100) NOT NULL,
            last_name VARCHAR(100) NOT NULL,
            email VARCHAR(100) NOT NULL,
            phone VARCHAR(20) NOT NULL,
            country VARCHAR(100) NOT NULL,
            company_name VARCHAR(100) NOT NULL,
            address TEXT NOT NULL,
            apartment VARCHAR(100) NOT NULL,
            city_town VARCHAR(100) NOT NULL,
            postcode VARCHAR(20) NOT NULL,
            booked_plan VARCHAR(100) NOT NULL,
            booked_for_people VARCHAR(100) NOT NULL,
            booking_date VARCHAR(100) NOT NULL,
            payment_option VARCHAR(50) NOT NULL,
            sub_total FLOAT DEFAULT 0,
            tax_vat FLOAT DEFAULT 0,
            total FLOAT DEFAULT 0,
            terms_conditions TINYINT(1) DEFAULT 0 NOT NULL,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}

        // --------------------SUCCESS PAGE TEMPLATE----------------------
function success_page_template($templates) {
    $templates['success.php'] = 'Success Page Template';
    return $templates;
}
add_filter('theme_page_templates', 'success_page_template');

function success_page_load_template($template) {
    if (get_page_template_slug() === 'success.php') {
        $template = plugin_dir_path(__FILE__) . 'templates/success.php';
    }
    return $template;
}
add_filter('template_include', 'success_page_load_template');

function success_page_styles() {
    if (is_page_template('success.php')) {
        wp_enqueue_style(
            'success-page-template-style',
            plugin_dir_url(__FILE__) . 'assets/css/success.css',
            array(),
            '1.0',
            'all'
        );
    }
}
add_action('wp_enqueue_scripts', 'success_page_styles');


        // ---------------------------Popup Form Template-------------------------
    if (file_exists(plugin_dir_path(__FILE__) . 'popup-form-template/popup-form-template.php')) {
            require_once(plugin_dir_path(__FILE__) . 'popup-form-template/popup-form-template.php');
    }

// ---------------------------Popup Form Submission-------------------------
if (file_exists(plugin_dir_path(__FILE__) . 'popup-form-template/form-submit.php')) {
    require_once(plugin_dir_path(__FILE__) . 'popup-form-template/form-submit.php');
}

// ---------------------------Admin Booking Menu Item and All Bookings page-------------------------
if (file_exists(plugin_dir_path(__FILE__) . 'inc/booking-admin-menu-item/booking-admin-menu-item.php')) {
    require_once(plugin_dir_path(__FILE__) . 'inc/booking-admin-menu-item/booking-admin-menu-item.php');
}

// ---------------------------Add New Booking page-------------------------
if (file_exists(plugin_dir_path(__FILE__) . 'inc/booking-admin-menu-item/add-new-booking.php')) {
    require_once(plugin_dir_path(__FILE__) . 'inc/booking-admin-menu-item/add-new-booking.php');
}

// ---------------------------Booking Edit page-------------------------
if (file_exists(plugin_dir_path(__FILE__) . 'inc/booking-admin-menu-item/edit-booking.php')) {
    require_once(plugin_dir_path(__FILE__) . 'inc/booking-admin-menu-item/edit-booking.php');
}


// ---------------------------Booking Edit page-------------------------
if (file_exists(plugin_dir_path(__FILE__) . 'inc/akota-booking-customizer/akota-booking-customizer.php')) {
    require_once(plugin_dir_path(__FILE__) . 'inc/akota-booking-customizer/akota-booking-customizer.php');
}

// ---------------------------Ssl Payment-------------------------
if (file_exists(plugin_dir_path(__FILE__) . 'inc/ssl-payment/ssl-payment.php')) {
    require_once(plugin_dir_path(__FILE__) . 'inc/ssl-payment/ssl-payment.php');
}

// ---------------------------Email Sending-------------------------
if (file_exists(plugin_dir_path(__FILE__) . 'inc/email-sending.php')) {
    require_once(plugin_dir_path(__FILE__) . 'inc/email-sending.php');
}

// ---------------------------Required Plugins-------------------------
if (file_exists(plugin_dir_path(__FILE__) . 'inc/class-tgm-plugin-activation.php')) {
    require_once(plugin_dir_path(__FILE__) . 'inc/class-tgm-plugin-activation.php');
}
// ---------------------------Required Plugins-------------------------
if (file_exists(plugin_dir_path(__FILE__) . 'inc/required-plugins.php')) {
    require_once(plugin_dir_path(__FILE__) . 'inc/required-plugins.php');
}


?>