<?php
 if (!defined('ABSPATH')) {
    exit;
}
            function send_booking_confirmation_email($data, $booking_id, $result) {
                $to = sanitize_email($data['email']); // Customer's email
                $subject = 'Booking Confirmation - Your Booking is Successful';
                $message = '
                <html>
                <head>
                    <title>Booking Confirmation</title>
                </head>
                <body>


<div style="width: 40%;
    background-color: white;
    border-radius: 7px;
    position: absolute;
    top: 0%;
    left: 50%;
    transform: translate(-50%, -0%);
    display: block;
    margin: 40px auto;
    padding: 20px 30px;
    z-index: 9999;
    border: 1px solid;">
        <div style="font-family: Helvetica Light, sans-serif;">
            <h1 style="font-size: 22px;
    text-align: left;
    color: #09AD66;
    margin-top: 10px;
    margin-left: 10px;
    margin-bottom: 10px;
    font-weight: 500;">Congratulations, <span>' . esc_html($data['first_name']) . ' ' . esc_html($data['last_name']) .
                    ',</span><br> Your booking is now complete.</h1>
            <div style="display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 0 10px;">
                <div style="max-width: 45%;">
                    <h3 style="color:rgb(0, 27, 16);">Booking confirmation</h3>
                    <hr>
                    <div>
                        <p>In the next 10 minutes you will receive an email containing your booking confirmation
                            and details at: <span style="color: #09AD66;font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">' . esc_html($data['email']) . '</span></p>
                    </div>
                    <div>
                        <p>Your Member ID is:
                            <br>
                            Your Booking ID is: <span style="color: #1873D6;">' . esc_html($booking_id) . '</span>
                        </p>
                    </div>
                    <div>
                        <p style="color: #09AD66;font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">Please present this confirmation upon arrival.</p>
                    </div>
                    <div>
                        <p>Contact Details: <span style="font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">' . esc_html($data['email']) . '</span> <br> <span style="font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">' . esc_html($data['phone']) . '</span></p>
                    </div>
                </div>
                <div style="width: 48%;
    margin-left: 50px;">
                    <h3 style="color:rgb(68, 1, 1);">Plan Details</h3>
                    <hr>
                    <div>
                        <p>Plan Type: <span style="font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">' . esc_html($data['booked_plan']) . '</span></p>
                    </div>
                    <div>
                        <p>Number of People: <span style="font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">' . esc_html($data['booked_for_people']) . '</span></p>
                    </div>
                    <div>
                        <p>Date: <span style="font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">' .esc_html($data['booking_date']) . '</span></p>
                    </div>
                    <div>
                        <p>Time and Duration <span style="font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">13:00 - 16:00</span> [3 Hours]</p>
                    </div>
                    <div>
                        <p>Location: Akota Coworking, 73A Gulshan Avenue, Dhaka- 1212</p>
                    </div>
                    <div>
                        <p>Neighborhood: Gulshan Avenue</p>
                    </div>
                </div>
            </div>
            <br>
            <div style="width: 48%;">
                <h3 style="color:rgb(1, 19, 58);">Payment Details</h3>
                <hr>
                <div>
                    <p>Booking Status: <span style="font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">Your booking is <span>' .esc_html($data['payment_option']) . '</span> and confirmed</span></p>
                </div>
                <div>
                    <p>Payment Method: Card holder name <span style="font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">' . esc_html($data['first_name']) . ' ' . esc_html($data['last_name']) .
                            ',</span><br>Card/Payment type <span style="font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">' . esc_html($result['card_type']) . '</span><br>Card number <span style="font-family: Helvetica Bold, sans-serif;
    font-weight: 600;">' . esc_html($result['card_no']) . '</span></p>
                </div>
                <div>
                    <p>Booking Conditions <span class="success-booking-condition bold-text">Non-refundable</span></p>
                </div>
            </div>
        </div>
        <h2 style="font-family: Helvetica Light, sans-serif;
    font-weight: 500;
    color: #000000;
    font-size: 25px;
    margin-top: 27px;
    margin-bottom: 10px;
    color: #FC0606;">You are now a part of our Akota Online Community</h2>
        <h4 style="font-family: Helvetica Light, sans-serif;
    font-weight: 500;
    color: #000000;
    font-size: 25px;
    font-size: 15px;
    margin-top: 15px;
    font-weight: 500;">To activate your account, check your email and build your professional space </h4>
    </div>
                </body>
                </html>';
                
                $headers = [
                    'Content-Type: text/html; charset=UTF-8',
                    'From: Hotel Booking <your-email@gmail.com>'
                ];
                
                // Send email
                wp_mail($to, $subject, $message, $headers);
            }

?>