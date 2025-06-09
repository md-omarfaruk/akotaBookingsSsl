<?php 
 if (!defined('ABSPATH')) {
    exit;
}
function wp_bookings_admin_menu() {
    add_menu_page(
        'Akota Bookings', 
        'Akota Bookings', 
        'manage_options', 
        'wp-bookings',
        'wp_bookings_admin_page', 
        'dashicons-clipboard', 
        20
    );

    add_submenu_page(
        'wp-bookings',
        'Add New Booking',
        'Add New Booking',
        'manage_options',
        'wp-bookings-add',
        'add_new_booking',
    );

    add_submenu_page(
        'wp-bookings',
        'Edit Booking',
        'Edit Booking',
        'manage_options',
        'wp-bookings-edit',
        'edit_booking'
    );
}

function wp_bookings_admin_page()
{
    global $wpdb;
    $table_name = $wpdb->prefix . "bookings";

    if (isset($_GET['delete'])) {
        $id = intval($_GET['delete']);
        if ($wpdb->delete($table_name, ['id' => $id])) {
            echo "<div class='notice notice-success'><p>Booking ID $id deleted successfully.</p></div>";
        } else {
            echo "<div class='notice notice-error'><p>Error: Unable to delete Booking ID $id.</p></div>";
        }
    }

    $results = $wpdb->get_results("SELECT * FROM $table_name");

    echo '<div class="wrap">';
    echo '<h1 class="all-bookings">All Bookings</h1>';

    if (empty($results)) {
        echo '<p>No bookings found.</p>';
        return;
    }

    echo '<table class="widefat fixed" cellspacing="0">';
    echo '<thead>
            <tr class="single-item">
                <th>Booking ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Country</th>
                <th>Company Name</th>
                <th>Address</th>
                <th>Apartment</th>
                <th>City/Town</th>
                <th>Postcode</th>
                <th>Booked Plan</th>
                <th>Booked for People</th>
                <th>Booking Date</th>
                <th>Payment Option</th>
                <th>Subtotal</th>
                <th>Tax/VAT</th>
                <th>Total</th>
                <th>Terms Agreed</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
          </thead>';
    echo '<tbody>';

    foreach ($results as $row) {
        echo "<tr>
            <td>{$row->id}</td>
            <td>{$row->first_name}</td>
            <td>{$row->last_name}</td>
            <td>{$row->email}</td>
            <td>{$row->phone}</td>
            <td>{$row->country}</td>
            <td>{$row->company_name}</td>
            <td>{$row->address}</td>
            <td>{$row->apartment}</td>
            <td>{$row->city_town}</td>
            <td>{$row->postcode}</td>
            <td>{$row->booked_plan}</td>
            <td>{$row->booked_for_people}</td>
            <td>{$row->booking_date}</td>
            <td>{$row->payment_option}</td>
            <td>{$row->sub_total}</td>
            <td>{$row->tax_vat}</td>
            <td>{$row->total}</td>
            <td>" . ($row->terms_conditions ? 'Yes' : 'No') . "</td>
            <td>{$row->created_at}</td>
            <td class='actions'>
                <a href='?page=wp-bookings&delete={$row->id}' class='button-link-delete' onclick='return confirm(\"Are you sure you want to delete this booking?\")'>Delete</a>
                <a href='?page=wp-bookings-edit&id={$row->id}' class='button-link'>Edit</a>
            </td>
        </tr>";
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}

add_action('admin_menu', 'wp_bookings_admin_menu');


?>