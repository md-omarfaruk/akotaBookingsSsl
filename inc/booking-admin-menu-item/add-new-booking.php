<?php 
 if (!defined('ABSPATH')) {
    exit;
}
function add_new_booking() {
    global $wpdb;
    $table_name = $wpdb->prefix . "bookings";

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_booking'])) {
        $data = [
            'first_name' => sanitize_text_field($_POST['first_name']),
            'last_name' => sanitize_text_field($_POST['last_name']),
            'email' => sanitize_email($_POST['email']),
            'phone' => sanitize_text_field($_POST['phone']),
            'country' => sanitize_text_field($_POST['country']),
            'company_name' => sanitize_text_field($_POST['company_name']),
            'address' => sanitize_text_field($_POST['address']),
            'apartment' => sanitize_text_field($_POST['apartment']),
            'city_town' => sanitize_text_field($_POST['city_town']),
            'postcode' => sanitize_text_field($_POST['postcode']),
            'booked_plan' => sanitize_text_field($_POST['booked_plan']),
            'booked_for_people' => sanitize_text_field($_POST['booked_for_people']),
            'booking_date' => sanitize_text_field($_POST['booking_date']),
            'payment_option' => sanitize_text_field($_POST['payment_option']),
            'sub_total' => sanitize_text_field($_POST['sub_total']),
            'tax_vat' => sanitize_text_field($_POST['tax_vat']),
            'total' => sanitize_text_field($_POST['total']),
            'terms_conditions' => sanitize_text_field($_POST['terms_conditions']),
            'created_at' => current_time('mysql')
        ];

        $wpdb->insert($table_name, $data);

        echo '<div class="notice notice-success"><p>Booking added successfully!</p></div>';
    }

    echo '<div class="wrap">';
    echo '<h1>Add Booking</h1>';
    echo '<form method="POST" action="">';
    echo '<table class="form-table">
        <tr><th>First Name</th><td><input type="text" name="first_name" required></td></tr>
        <tr><th>Last Name</th><td><input type="text" name="last_name" required></td></tr>
        <tr><th>Email</th><td><input type="email" name="email" required></td></tr>
        <tr><th>Phone</th><td><input type="text" name="phone" required></td></tr>
        <tr><th>Country</th><td><input type="text" name="country" required></td></tr>
        <tr><th>Company Name</th><td><input type="text" name="company_name" required></td></tr>
        <tr><th>Address</th><td><input type="text" name="address" required></td></tr>
        <tr><th>Apartment</th><td><input type="text" name="apartment" required></td></tr>
        <tr><th>City/Town</th><td><input type="text" name="city_town" required></td></tr>
        <tr><th>Postcode</th><td><input type="text" name="postcode" required></td></tr>
        <tr><th>Booked Plan</th><td><input type="text" name="booked_plan"></td></tr>
        <tr><th>Booked for People</th><td><input type="text" name="booked_for_people"></td></tr>
        <tr><th>Booking Date</th><td><input type="text" name="booking_date"></td></tr>
        <tr><th>Payment Option</th><td><input type="text" name="payment_option" required></td></tr>
        <tr><th>Subtotal</th><td><input type="text" name="sub_total" required></td></tr>
        <tr><th>Tax/VAT</th><td><input type="text" name="tax_vat" required></td></tr>
        <tr><th>Total</th><td><input type="text" name="total" required></td></tr>
        <tr><th>Terms & Conditions</th><td><input type="checkbox" name="terms_conditions" value="Agreed"></td></tr>
    </table>';
    echo '<p class="submit"><input type="submit" name="add_booking" class="button-primary" value="Add Booking"></p>';
    echo '</form>';
    echo '</div>';
}

?>