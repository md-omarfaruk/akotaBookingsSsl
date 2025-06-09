<?php
 if (!defined('ABSPATH')) {
    exit;
}
    // ---------------------Form General Sections----------------------
$general_sections = [
    'popup_header'           => __('Popup Header', 'akotaBookings'),
    'personal_details'      => __('Personal Details', 'akotaBookings'),
    'review_payment_details' => __('Review Payment Details', 'akotaBookings'),
    'booking_summary'       => __('Booking Summary', 'akotaBookings'),
];
foreach ($general_sections as $section_id => $section_title) {
    $wp_customize->add_section($section_id, [
        'title' => $section_title,
        'panel' => 'akota_bookings',
    ]);

    // ---------------------Add Settings and Controls for h1 and h2----------------------
    $wp_customize->add_setting("{$section_id}_h1", [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control("{$section_id}_h1_control", [
        'label'    => __('H1 Text', 'akotaBookings'),
        'section'  => $section_id,
        'settings' => "{$section_id}_h1",
        'type'     => 'text',
    ]);

    $wp_customize->add_setting("{$section_id}_h2", [
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control("{$section_id}_h2_control", [
        'label'    => __('H2 Text', 'akotaBookings'),
        'section'  => $section_id,
        'settings' => "{$section_id}_h2",
        'type'     => 'text',
    ]);
}

?>