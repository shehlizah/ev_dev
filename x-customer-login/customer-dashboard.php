<?php
// Prevent direct access
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

// Load WordPress functions
require_once(ABSPATH . 'wp-load.php');
wp_head(); // Load styles & scripts

// Redirect if not logged in
if (!is_user_logged_in()) {
    wp_redirect(home_url());
    exit;
}

// Get current user
$current_user = wp_get_current_user();
get_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin: 50px; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 2px 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo esc_html($current_user->display_name); ?>!</h1>
        <p>This is your simple customer dashboard.</p>
        <a href="<?php echo wp_logout_url(home_url('/login')); ?>">Logout</a>
    </div>
</body>
</html>

<?php get_footer();
?>