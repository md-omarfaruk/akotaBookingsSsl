<?php 
 if (!defined('ABSPATH')) {
    exit;
}
function edit_booking() {
    global $wpdb;
    $table_name = $wpdb->prefix . "bookings";

    // Get the ID of the booking to edit
    if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
        echo '<div class="notice notice-error"><p>Invalid Booking ID.</p></div>';
        return;
    }

    $id = intval($_GET['id']);
    $booking = $wpdb->get_row("SELECT * FROM $table_name WHERE id = $id");

    if (!$booking) {
        echo '<div class="notice notice-error"><p>Booking not found.</p></div>';
        return;
    }

    // Handle form submission for updates
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_booking'])) {
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
            'terms_conditions' => sanitize_text_field($_POST['terms_conditions'])
        ];

        $wpdb->update($table_name, $data, ['id' => $id]);
        echo '<div class="notice notice-success"><p>Booking updated successfully!</p></div>';
    }

    // Populate form with current data
    echo '<div class="wrap">';
    echo '<h1>Edit Booking</h1>';
    echo '<form method="POST" action="">';
    echo '<table class="form-table">';

    foreach ($booking as $key => $value) {
        echo "<tr><th>" . ucfirst(str_replace('_', ' ', $key)) . "</th>
              <td><input type='text' class='edit-item' name='{$key}' value='" . esc_attr($value) . "' required></td></tr>";
    }

    echo '</table>';
    echo '<p class="submit"><input type="submit" name="update_booking" class="button-primary" value="Update Booking"></p>';
    echo '</form>';
    echo '</div>';
}

?>