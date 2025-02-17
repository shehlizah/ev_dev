<?php
/**
 * Plugin Name: Custom Authentication Plugin
 * Description: A plugin for user login, registration with multi-relationship, and 2FA.
 * Version: 1.0
 * Author: Advance I-Tech
 */

if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}

// Enqueue Scripts and Styles
function custom_auth_enqueue_scripts() {
    wp_enqueue_style('custom-auth-login', plugin_dir_url(__FILE__) . 'css/login.css');
    wp_enqueue_style('custom-auth-registration', plugin_dir_url(__FILE__) . 'css/registration.css');
    wp_enqueue_script('custom-auth-js', plugin_dir_url(__FILE__) . 'js/auth.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'custom_auth_enqueue_scripts');

// Shortcode for Displaying Authentication Modal
function custom_auth_shortcode() {
    ob_start();
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        ?>
        <!-- Display Profile Icon or Link -->
        <div class="profile-section">
            <img src="<?php echo get_avatar_url($current_user->ID); ?>" alt="Profile Icon" class="profile-icon">
            <span class="profile-name"><?php echo esc_html($current_user->display_name); ?></span>
            <a href="<?php echo esc_url(get_permalink(get_option('woocommerce_myaccount_page_id'))); ?>" class="profile-link">My Profile</a>
            <a href="<?php echo wp_logout_url(home_url()); ?>" class="logout-link">Logout</a>
        </div>
        <?php
    } else {
        ?>
        <!-- Login Button -->
        <button id="open-auth-modal">Customer Login</button>
        <?php
    }

    ?>

    <!-- Modal -->
    <div id="custom-auth-modal" class="auth-modal">
        <div class="auth-modal-content">
            <span class="auth-close" onclick="closeAuthModal()">&times;</span>
            
            <!-- Login Form -->
            <?php include plugin_dir_path(__FILE__) . 'includes/login.php'; ?>

            <!-- Registration Form -->
            <?php include plugin_dir_path(__FILE__) . 'includes/registration.php'; ?>
        </div>
    </div>
    <style>

/* General Styling */
body {
    font-family: Arial, sans-serif;
}

/* Relationship Section */
.relation {
    display: flex;
    flex-direction: column; /* Changed to vertical alignment */
    align-items: flex-start;
    justify-content: flex-start;
    width: 100%;
    max-width: 500px;
    gap: 15px;
    padding: 10px;
}

.relation label {
    font-weight: bold;
    color: white; /* Changed label color to white */
}

/* Relationship Add Button */
.relation button {
    background-color: #0284c7;
    color: white;
    border: none;
    padding: 10px 14px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    transition: 0.3s;
}

/* Active Add Relationship Button */
.relation button:active {
    background-color: #026ca1; /* Changed color of active button */
}

/* Relationship Container */
#relationship-container {
    margin-top: 15px;
}

.relationship-entry {
    margin-top: 15px;
    padding: 12px;
    border: 1px solid #0284c7;
    border-radius: 6px;
    display: flex;
    flex-direction: column; /* Relationship entries in a vertical layout */
    gap: 12px;
    box-shadow: 0px 2px 5px rgba(2, 132, 199, 0.3);
}

/* Label Styling */
.relationship-entry label {
    font-weight: bold;
    color: #fff; /* Changed label color to white */
    flex: 1 0 100%;
    text-align: left;
}

/* Input & Select Fields */
.relationship-entry input, 
.relationship-entry select {
    flex: 1;
    padding: 8px;
    border: 1px solid #0284c7;
    border-radius: 4px;
    box-shadow: inset 0px 1px 3px rgba(2, 132, 199, 0.2);
}

/* Remove Button */
.relationship-entry button {
    background-color: red;
    color: white;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 4px;
    transition: 0.3s;
}

.relationship-entry button:hover {
    background-color: darkred;
}

/* Modal Styles */
.auth-modal {
    display: none;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 1000;
}

.auth-modal-content {
    background-color: #6EC1E4;
    padding: 25px;
    margin: 10% auto;
    width: 40%;
    max-width: 450px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    position: relative;
    max-height: 80%; /* Set max-height */
    overflow-y: auto; /* Allow vertical scrolling */
}

/* Close Button */
.auth-close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 22px;
    font-weight: bold;
    cursor: pointer;
    color: white;
    transition: 0.3s;
}

.auth-close:hover {
    color: #333;
}

/* Form Labels */
.auth-modal-content label {
    font-weight: bold;
    display: block;
    text-align: left;
    margin-bottom: 5px;
}

/* Input Fields */
.auth-modal-content input {
    width: 100%;
    padding: 10px;
    border: 1px solid #0284c7;
    border-radius: 4px;
    box-shadow: inset 0px 1px 3px rgba(2, 132, 199, 0.2);
    margin-bottom: 15px;
}

/* Buttons */
.auth-modal-content button,
.auth-modal-content input[type="submit"] {
    background-color: #0284c7;
    color: white;
    border: none;
    padding: 10px 14px;
    border-radius: 6px;
    cursor: pointer;
    font-size: 14px;
    transition: 0.3s;
    width: 100%;
}

.auth-modal-content button:hover,
.auth-modal-content input[type="submit"]:hover {
    background-color: #026ca1;
}

/* Registration & Login Links */
.auth-modal-content a {
    color: #0284c7;
    font-weight: bold;
    text-decoration: none;
}

.auth-modal-content a:hover {
    text-decoration: underline;
}

</style>
    <?php
    return ob_get_clean();
}

add_shortcode('custom_auth', 'custom_auth_shortcode');
