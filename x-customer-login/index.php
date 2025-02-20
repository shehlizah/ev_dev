<?php
require_once('../wp-load.php');
//get_header();
wp_head(); // Load styles & scripts
// define('WP_USE_THEMES', true);
// require_once('../wp-blog-header.php');

get_template_part('header'); // Loads the correct header
// Redirect logged-in users to the dashboard
if (is_user_logged_in()) {
    wp_redirect(home_url('customer-login/customer-dashboard'));
    exit;
}

// Handle login errors
$login_errors = isset($_GET['login']) ? $_GET['login'] : '';
?>

<div class="customer-login-container">
    <h2>Customer Login</h2>

    <?php if ($login_errors === 'failed') : ?>
        <p style="color: red;">Invalid username or password. Please try again.</p>
    <?php endif; ?>

    <form method="post" action="<?php echo wp_login_url(home_url('/customer-dashboard')); ?>">
        <label for="username">Username:</label>
        <input type="text" name="log" id="username" required>

        <label for="password">Password:</label>
        <input type="password" name="pwd" id="password" required>

        <input type="hidden" name="redirect_to" value="<?php echo home_url('/customer-dashboard'); ?>">

        <button type="submit">Login</button>
    </form>

    <p><a href="<?php echo wp_lostpassword_url(); ?>">Forgot Password?</a></p>
</div>
<?php get_footer();
?>