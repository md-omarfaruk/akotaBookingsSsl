<?php
 if (!defined('ABSPATH')) {
    exit;
}
function wp_bookings_submit()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "bookings";

    $first_name = isset($_POST['first_name']) ? sanitize_text_field($_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? sanitize_text_field($_POST['last_name']) : '';
    $email = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $country = isset($_POST['country']) ? sanitize_text_field($_POST['country']) : '';
    $company_name = isset($_POST['company_name']) ? sanitize_text_field($_POST['company_name']) : '';
    $address = isset($_POST['address']) ? sanitize_text_field($_POST['address']) : '';
    $apartment = isset($_POST['apartment']) ? sanitize_text_field($_POST['apartment']) : '';
    $city_town = isset($_POST['city_town']) ? sanitize_text_field($_POST['city_town']) : '';
    $postcode = isset($_POST['postcode']) ? sanitize_text_field($_POST['postcode']) : '';
    $booked_plan = isset($_POST['booked_plan']) ? sanitize_text_field($_POST['booked_plan']) : '';
    $booked_for_people = isset($_POST['booked_for_people']) ? sanitize_text_field($_POST['booked_for_people']) : '';
    $booking_date = isset($_POST['booking_date']) ? sanitize_text_field($_POST['booking_date']) : '';
    $terms_conditions = isset($_POST['terms_conditions']) && $_POST['terms_conditions'] === 'Agreed' ? 1 : 0;
    $sub_total = isset($_POST['sub_total']) ? floatval($_POST['sub_total']) : 0;
    $tax_vat = isset($_POST['tax_vat']) ? floatval($_POST['tax_vat']) : 0;
    $total = isset($_POST['total']) ? floatval($_POST['total']) : 0;

    $data = [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'phone' => $phone,
        'country' => $country,
        'company_name' => $company_name,
        'address' => $address,
        'apartment' => $apartment,
        'city_town' => $city_town,
        'postcode' => $postcode,
        'booked_plan' => $booked_plan,
        'booked_for_people' => $booked_for_people,
        'booking_date' => $booking_date,
        'payment_option' => 'pay on arrival',
        'sub_total' => $sub_total,
        'tax_vat' => $tax_vat,
        'total' => $total,
        'terms_conditions' => $terms_conditions
    ];

    $result = $wpdb->insert($table_name, $data);


    if ($result === false) {
        wp_send_json_error(['message' => 'Database error: ' . $wpdb->last_error]);
    } else {
        $booking_id = $wpdb->insert_id;
    
        if ($booking_id) {
            send_booking_confirmation_email($data, $booking_id, NULL);
        }
   
        wp_send_json_success(['booking_id' => $booking_id]);
    }

}

add_action('wp_ajax_wp_bookings_submit', 'wp_bookings_submit');
add_action('wp_ajax_nopriv_wp_bookings_submit', 'wp_bookings_submit');
