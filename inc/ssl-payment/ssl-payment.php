<?php

if (!defined('ABSPATH')) {
    exit;
}
if (file_exists(plugin_dir_path(__FILE__) . './ssl-payment-customizer.php')) {
    require_once(plugin_dir_path(__FILE__) . './ssl-payment-customizer.php');
}
function sslcommerz_payment_handler()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $store_id = sanitize_text_field(get_theme_mod('store_id'));
    $store_passw = sanitize_text_field(get_theme_mod('store_passw'));
    $session_api_url = 'https://sandbox.sslcommerz.com/gwprocess/v4/api.php';

    $_SESSION['booking_data'] = array_map('sanitize_text_field', $_POST);

    $post_data = [
        'store_id'      => $store_id,
        'store_passwd'  => $store_passw,
        'total_amount'  => sanitize_text_field($_POST['total_amount']),
        'currency'      => 'BDT',
        'tran_id'       => uniqid(),
        'success_url'   => site_url('/success'),
        'fail_url'      => sanitize_text_field($_POST['fail_url']),
        'cancel_url'    => sanitize_text_field($_POST['cancel_url']),
        'emi_option'    => '0',
        'cus_name'      => sanitize_text_field($_POST['cus_name']),
        'cus_email'     => sanitize_email($_POST['email']),
        'cus_phone'     => sanitize_text_field($_POST['phone']),
        'cus_add1'      => sanitize_text_field($_POST['address']),
        'cus_add2'      => sanitize_text_field($_POST['apartment']),
        'cus_city'      => sanitize_text_field($_POST['city']),
        'cus_postcode'  => sanitize_text_field($_POST['postcode']),
        'cus_country'   => sanitize_text_field($_POST['country']),
        'shipping_method' => 'NO',
        'product_name'  => 'Room Booking',
        'product_category' => 'Hotel',
        'product_profile' => 'general'
    ];

    $response = wp_remote_post($session_api_url, [
        'body'    => $post_data,
        'timeout' => 45,
        'sslverify' => false
    ]);

    if (is_wp_error($response)) {
        wp_send_json(['status' => 'failed', 'message' => 'Request Error: ' . $response->get_error_message()]);
    } else {
        $response_data = json_decode(wp_remote_retrieve_body($response), true);
        if (isset($response_data['GatewayPageURL']) && !empty($response_data['GatewayPageURL'])) {
            wp_send_json(['status' => 'success', 'GatewayPageURL' => $response_data['GatewayPageURL']]);
        } else {
            wp_send_json(['status' => 'failed', 'message' => 'SSLCOMMERZ API Error: ' . json_encode($response_data)]);
        }
    }
    wp_die();
}

add_action('wp_ajax_sslcommerz_payment', 'sslcommerz_payment_handler');
add_action('wp_ajax_nopriv_sslcommerz_payment', 'sslcommerz_payment_handler');

// Success Page with Validation
function sslcommerz_success_page()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    global $wpdb;
    $table_name = $wpdb->prefix . "bookings";
    $booking_id = '';

    if (!isset($_POST['val_id']) || !isset($_SESSION['booking_data'])) {
        return '<h1 style="text-align:center; margin-top:200px; color:red;">Invalid Request</h1>';
    }

    $val_id = sanitize_text_field(urlencode($_POST['val_id']));
    $store_id = sanitize_text_field(get_theme_mod('store_id'));
    $store_passw = sanitize_text_field(get_theme_mod('store_passw'));
    $validation_url = "https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id={$val_id}&store_id={$store_id}&store_passwd={$store_passw}&v=1&format=json";

    $response = wp_remote_get($validation_url, ['sslverify' => false]);

    if (is_wp_error($response)) {
        error_log("SSLCOMMERZ API Error: " . $response->get_error_message());
        return '<h1 style="text-align:center; margin-top:200px; color:red;">Payment validation failed.</h1>';
    }

    $result = json_decode(wp_remote_retrieve_body($response), true);

    if (!isset($result['status']) || $result['status'] !== 'VALID') {
        return '<h1 style="text-align:center; margin-top:200px; color:red;">Payment validation failed.</h1>
        <h3 style="text-align:center; margin-top:20px; color:red;">If money has been deducted from your account. So do not worry about it sometimes it could be happened just contact with customer care of Akota.co</h3>';
    }

    $booking_data = $_SESSION['booking_data'];
    $data = [
        'first_name' => sanitize_text_field($booking_data['first_name']),
        'last_name' => sanitize_text_field($booking_data['last_name']),
        'email' => sanitize_email($booking_data['email']),
        'phone' => sanitize_text_field($booking_data['phone']),
        'country' => sanitize_text_field($booking_data['country']),
        'company_name' => sanitize_text_field($booking_data['company_name']),
        'address' => sanitize_text_field($booking_data['address']),
        'apartment' => sanitize_text_field($booking_data['apartment']),
        'city_town' => sanitize_text_field($booking_data['city']),
        'postcode' => sanitize_text_field($booking_data['postcode']),
        'booked_plan' => sanitize_text_field($booking_data['booked_plan']),
        'booked_for_people' => sanitize_text_field($booking_data['booked_for_people']),
        'booking_date' => sanitize_text_field($booking_data['booking_date']),
        'payment_option' => sanitize_text_field($booking_data['payment_option']),
        'terms_conditions' => sanitize_text_field($booking_data['terms_conditions']),
        'sub_total' => floatval($booking_data['sub_total']),
        'tax_vat' => floatval($booking_data['tax_vat']),
        'total' => floatval($result['amount']),
    ];

    $insert = $wpdb->insert($table_name, $data);

    if ($insert === false) {
        error_log("Database Insert Error: " . $wpdb->last_error);
        return '<h1 style="text-align:center; margin-top:200px; color:red;">Database error occurred.</h1>
        <h3 style="text-align:center; margin-top:20px; color:red;">If money has been deducted from your account. So do not worry about it sometimes it could be happened just contact with customer care of Akota.co</h3>';
    } else {
        $booking_id = $wpdb->insert_id;

        if ($booking_id) {
            send_booking_confirmation_email($data, $booking_id, $result);

            unset($_SESSION['booking_data']);

            ob_start();
?>
            <div class='success-booking-pop-up' id='succssBookingPopup'>
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/close.png'; ?>"
                        class="success-close-pop-up"
                        id="successClosePopup"
                        alt="">
                </a>
                <div class='success-booking-details-overview' id='successBookingSummary'>
                    <h1>Congratulations, <span id='successBookerMemberName'><?php echo esc_html($data['first_name'] . ' ' . $data['last_name']); ?></span><br> Your booking is now complete.</h1>
                    <div class='success-booking-details'>
                        <div class='success-booking-confirmation'>
                            <h3>Booking confirmation</h3>
                            <hr>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/mail.png;' ?>" alt=''>
                                <p>In the next 10 minutes you'll receive an email containing your booking confirmation
                                    and details at: <span class='success-booking-email bold-text' id='successBookingEmail'><?php echo esc_html($data['email']); ?></span></p>
                            </div>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/member-card.png'; ?>" alt=''>
                                <p>Your Member ID is:
                                    <br>
                                    Your Booking ID is: <span class='success-booking-id bold-text' id='successBookingId'><?php echo esc_html($booking_id); ?></span>
                                </p>
                            </div>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/notepad.png'; ?>" alt=''>
                                <p>Please present this confirmation upon arrival.</p>
                            </div>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/telephone.png;'; ?>" alt=''>
                                <p>Contact Details: <span class='success-bold-text' id='successContactEmail'><?php echo esc_html($data['email']); ?></span> <br> <span class='success-bold-text' id='successContactNumber'><?php echo esc_html($data['phone']); ?></span></p>
                            </div>
                        </div>
                        <div class='success-booking-plan-details'>
                            <h3>Plan Details</h3>
                            <hr>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/planning.png'; ?>" alt=''>
                                <p>Plan Type: <span class="success-bold-text" id="successBookedPlan"><?php echo esc_html($data['booked_plan']); ?></span></p>
                            </div>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/group.png'; ?>" alt=''>
                                <p>Number of People: <span class="success-bold-text" id="successBookedForPeople"><?php echo esc_html($data['booked_for_people']); ?></span></p>
                            </div>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/date.png'; ?>" alt=''>
                                <p>Date: <span class="success-bold-text" id="successBookingDate"><?php echo esc_html($data['booking_date']); ?></span></p>
                            </div>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/clock.png'; ?>" alt=''>
                                <p>Time and Duration <span class="success-bold-text" id="successBookedForTime">13:00 - 16:00</span> [3 Hours]</p>
                            </div>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/maps-and-flags.png'; ?>" alt=''>
                                <p>Location: Akota Coworking, 73A Gulshan Avenue, Dhaka- 1212</p>
                            </div>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/skyscrapers.png'; ?>" alt=''>
                                <p>Neighborhood: Gulshan Avenue</p>
                            </div>
                        </div>
                        <div class='success-booking-payment-details'>
                            <h3>Payment Details</h3>
                            <hr>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/check-mark.png'; ?>" alt=''>
                                <p>Booking Status: <span class='success-bold-text'>Your booking is <span id='successBookingStatus'><?php echo esc_html($data['payment_option']); ?></span> and confirmed</span></p>
                            </div>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/credit-card.png'; ?>" alt=''>
                                <p>Payment Method: Card holder name <span class='success-bold-text' id='bookerName'><?php echo esc_html($data['first_name'] . ' ' . $data['last_name']); ?></span><br>Card/Payment type <span class='success-bold-text' id='paymentType'><?php echo esc_html($result['card_type']); ?></span><br>Card number <span class='success-bold-text' id='cardNumber'><?php echo esc_html($result['card_no']); ?></span></p>
                            </div>
                            <div class=''>
                                <img src="<?php echo plugin_dir_url(__DIR__) . '../assets/img/access-denied.png'; ?>" alt=''>
                                <p>Booking Conditions <span class="success-booking-condition bold-text">Non-refundable</span></p>
                            </div>
                        </div>
                    </div>
                    <h2>You are now a part of our Akota Online Community</h2>
                    <h4>To activate your account, check your email and build your professional space </h4>
                    <a href="https://mail.google.com" target="_blank" rel="noopener noreferrer">
                        <button class="check-email">Check Email</button>
                    </a>
                </div>
            </div>
<?php
            return ob_get_clean();
        }
    }
}
add_shortcode('sslcommerz_success_page', 'sslcommerz_success_page');

?>