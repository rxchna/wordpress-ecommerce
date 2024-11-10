<?php
/*
Plugin Name: Welcome Discount on Shop Page
Description: Displays a welcome message with today's discount information at the top of the shop page.
Version: 1.0
Author: Rachna Poonit
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Hook to display the welcome message and discount info on the shop page
function display_welcome_discount_message() {
    // Set the time zone to EST
    date_default_timezone_set('America/New_York'); // EST timezone
    
    // Only show the message on the shop page
    if (is_shop() && is_user_logged_in()) {
        // Get current user info
        $current_user = wp_get_current_user();
        $username = $current_user->user_login;

        // Get current date
        $current_date = date('F j, Y');

        // Get the current time and the end of today (23:59:59)
        $current_time = time();
        $end_of_day = strtotime('tomorrow') - 1; // returns 23:59:59 of today

        // Calculate remaining time in seconds
        $remaining_seconds = $end_of_day - $current_time;
        $remaining_hours = floor($remaining_seconds / 3600); // Convert seconds to hours

        $time_message = "";

        // Determine message based on remaining hours
        if ($remaining_hours > 12) {
            $time_message = 'Get it before it\'s gone! ' . $remaining_hours . ' hours left! ⭐️';
        } elseif ($remaining_hours > 6) {
            $time_message = 'Hurry up! Only ' . $remaining_hours . ' hours left! ⏳';
        } else {
            $time_message = 'Last chance, only ' . $remaining_hours . ' hours left! 🚨';
        }

        // Display the welcome message with discount info and code
        ?>
        <div class="welcome-discount-message">
            <div class="welcome-discount-inner">
                <p><strong>Good news, <?php echo $username; ?>!</strong></p>
                <p>🎉 Unlock 30% Off today <?php echo $current_date; ?> 🎁</p>
                <p><strong>Use the code <span style="color: green;">PROMO30</span> at checkout to gain access to our exclusive sale.</strong></p>
                <p><?php echo $time_message; ?></p>
            </div>
        </div>

        <style>
            .welcome-discount-message {
                background-color: #f4f4f4;
                padding: 15px;
                text-align: center;
                margin-bottom: 2em;
                border: 1px solid #ddd;
                box-shadow: 10px 10px 20px #bbb7b4;
                border-radius: 0.8em;
            }

            .welcome-discount-inner p {
                font-size: 16px;
                margin: 5px 0;
            }

            .welcome-discount-inner p strong {
                font-weight: bold;
            }

            .welcome-discount-inner span {
                color: green;
                font-weight: bold;
            }
        </style>
        <?php
    }
}

// Hook into WordPress to display the message at the top of the shop page
add_action('woocommerce_before_main_content', 'display_welcome_discount_message', 5);
?>