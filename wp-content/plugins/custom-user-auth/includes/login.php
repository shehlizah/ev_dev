<div id="login-section">
    <h2>Customer Login</h2>
    <form id="login-form" method="post">
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

<?php
// 2FA Handling
if (isset($_POST['verify_otp'])) {
    // OTP verification logic
    $otp = $_POST['otp'];
    if (verify_otp($otp)) {
        // Successful OTP verification
        wp_redirect(home_url());
        exit;
    } else {
        echo '<p>Invalid OTP!</p>';
    }
}

function verify_otp($otp) {
    // Your OTP verification logic here (e.g., check database or external service)
    return true; // Placeholder for OTP check
}
?>
