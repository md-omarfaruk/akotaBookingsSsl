<?php
 if (!defined('ABSPATH')) {
    exit;
}
// -------------Plans under "All Plans"---------------
$plans = [
    'private_office'           => __('Private Office', 'akotaBookings'),
    'team_office_suite'      => __('Team Office Suite', 'akotaBookings'),
    'hybrid_office' => __('Hybrid Office', 'akotaBookings'),
    'day_office'       => __('Day Office', 'akotaBookings'),
    'dedicated_desk'       => __('Dedicated Desk', 'akotaBookings'),
    'day_pass' => __('Day Pass', 'akotaBookings'),
    'flexible_desk'      => __('Flexible Desk', 'akotaBookings'),
    'virtual_office'           => __('Virtual Office', 'akotaBookings'),
    'conference_room'      => __('Conference Room', 'akotaBookings'),
    'event_space' => __('Event Space', 'akotaBookings'),
    'podcast_studio'       => __('Podcast Studio', 'akotaBookings'),
    'zoom_call_room'       => __('Zoom Call Room', 'akotaBookings'),
    'color_burst_room' => __('Color Burst Room', 'akotaBookings'),
    'alap_room'      => __('Alap Room', 'akotaBookings'),
    'alochona_room'           => __('Alochona Room', 'akotaBookings'),
];

foreach ($plans as $plan_id => $plan_title) {
    $wp_customize->add_section($plan_id, [
        'title' => $plan_title,
        'panel' => 'akota_bookings',
    ]);

    if ($plan_id == 'private_office' || $plan_id == 'flexible_desk') {
        // ---------------Duration Setting-One--------------
        $wp_customize->add_setting("{$plan_id}_duration_one", [
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_duration_one_control", [
            'label'    => __('Duration One', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_duration_one",
            'type'     => 'text',
        ]);

        // ---------------Price Setting-One--------------
        $wp_customize->add_setting("{$plan_id}_price_one", [
            'default' => '13500',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_price_one_control", [
            'label'    => __('Price One', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_price_one",
            'type'     => 'number',
        ]);

        // ---------------Duration Setting- Two--------------
        $wp_customize->add_setting("{$plan_id}_duration_two", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_duration_two_control", [
            'label'    => __('Duration Two', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_duration_two",
            'type'     => 'text',
        ]);

        // ---------------Price Setting- Two--------------
        $wp_customize->add_setting("{$plan_id}_price_two", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_price_two_control", [
            'label'    => __('Price Two', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_price_two",
            'type'     => 'number',
        ]);
        // ---------------Duration Setting- Three--------------
        $wp_customize->add_setting("{$plan_id}_duration_three", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_duration_three_control", [
            'label'    => __('Duration Three', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_duration_three",
            'type'     => 'text',
        ]);

        // ---------------Price Setting- Three--------------
        $wp_customize->add_setting("{$plan_id}_price_three", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_price_three_control", [
            'label'    => __('Price Three', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_price_three",
            'type'     => 'number',
        ]);
    }
    elseif ($plan_id == 'hybrid_office' || $plan_id == 'day_office' || $plan_id == 'day_pass') {
        // ---------------Duration Setting-One--------------
        $wp_customize->add_setting("{$plan_id}_duration_one", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_duration_one_control", [
            'label'    => __('Duration One', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_duration_one",
            'type'     => 'text',
        ]);

        // ---------------Price Setting-One--------------
        $wp_customize->add_setting("{$plan_id}_price_one", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_price_one_control", [
            'label'    => __('Price One', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_price_one",
            'type'     => 'number',
        ]);

        // ---------------Duration Setting-Two--------------
        $wp_customize->add_setting("{$plan_id}_duration_two", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_duration_two_control", [
            'label'    => __('Duration Two', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_duration_two",
            'type'     => 'text',
        ]);

        // ---------------Price Setting-Two--------------
        $wp_customize->add_setting("{$plan_id}_price_two", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_price_two_control", [
            'label'    => __('Price Two', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_price_two",
            'type'     => 'number',
        ]);
    }
    elseif ($plan_id == 'team_office_suite' || $plan_id == 'dedicated_desk' || $plan_id == 'virtual_office' || $plan_id == 'conference_room' || $plan_id == 'event_space' || $plan_id == 'podcast_studio' || $plan_id == 'zoom_call_room' || $plan_id == 'color_burst_room' || $plan_id == 'alap_room' || $plan_id == 'alochona_room') {
        
        // ---------------Duration Setting---------------
        $wp_customize->add_setting("{$plan_id}_duration", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_duration_control", [
            'label'    => __('Duration', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_duration",
            'type'     => 'text',
        ]);
        if ($plan_id == 'team_office_suite'){
            // ---------------Duration for How Many People Setting---------------
            $wp_customize->add_setting("{$plan_id}_duration_for_people", [
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field',
            ]);
            $wp_customize->add_control("{$plan_id}_duration_for_people_control", [
                'label'    => __('Duration for How Many People', 'akotaBookings'),
                'section'  => $plan_id,
                'settings' => "{$plan_id}_duration_for_people",
                'type'     => 'text',
            ]);
            }
        // ---------------Price Setting---------------
        $wp_customize->add_setting("{$plan_id}_price", [
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ]);
        $wp_customize->add_control("{$plan_id}_price_control", [
            'label'    => __('Price', 'akotaBookings'),
            'section'  => $plan_id,
            'settings' => "{$plan_id}_price",
            'type'     => 'number',
        ]);
    }
    else {
        "";
    }
};
