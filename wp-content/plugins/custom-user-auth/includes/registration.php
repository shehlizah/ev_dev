<?php
if (!defined('ABSPATH')) {
    exit;
}

function custom_registration_form() {
    ob_start();
    ?>
    <div id="custom-registration-modal" class="auth-modal">
        <div class="auth-modal-content">
            <span class="auth-close" onclick="closeAuthModal()">&times;</span>
            <h2>Register</h2>
            <form method="post">
                <label for="username">Username</label>
                <input type="text" name="username" required>

                <label for="email">Email</label>
                <input type="email" name="email" required>

                <label for="password">Password</label>
                <input type="password" name="password" required>

                <label for="relationship">Relationship</label>
                <select name="relationship">
                    <option value="parent">Parent</option>
                    <option value="child">Child</option>
                    <option value="guardian">Guardian</option>
                </select>

                <input type="submit" name="register_user" value="Register">
            </form>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('custom_registration', 'custom_registration_form');
?>
