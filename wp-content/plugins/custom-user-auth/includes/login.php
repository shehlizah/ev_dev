<?php
if (!defined('ABSPATH')) {
    exit;
}

function custom_login_form() {
    ob_start();
    ?>
    <div id="custom-auth-modal" class="auth-modal">
        <div class="auth-modal-content">
            <span class="auth-close" onclick="closeAuthModal()">&times;</span>
            <h2>Customer Login</h2>
            <form method="post">
                <label for="username">Username</label>
                <input type="text" name="username" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <input type="submit" name="login_user" value="Login">
            </form>

            <div id="otp-section" style="display: none;">
                <h3>Enter OTP</h3>
                <form method="post">
                    <input type="text" name="otp" required>
                    <input type="submit" name="verify_otp" value="Verify OTP">
                </form>
            </div>

            <p>Don't have an account? <a href="#" onclick="showRegistration()">Register Here</a></p>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_login', 'custom_login_form');
?>
