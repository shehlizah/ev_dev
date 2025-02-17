<div id="registration-section" style="display: none;">
    <h2>Register</h2>
    <form id="registration-form" method="post">
        <div style="display: flex; gap: 10px;">
            <div style="flex: 1;">
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>
            <div style="flex: 1;">
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
        </div>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="phone">Phone</label>
        <input type="tel" name="phone" required>

        <label for="address">Address</label>
        <input type="text" name="address" required>

        <label for="gender">Gender</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <!-- Relationship Field -->
        <div class="relation">
            <label for="relationship">Relationship</label>
            <button type="button" id="add-relationship-btn">Add Relationship</button>
        </div>

        <!-- Container for Additional Relationships -->
        <div id="relationship-container"></div>

        <input type="submit" name="register_user" value="Register">
    </form>

    <p>Already have an account? <a href="#" onclick="showLogin()">Login Here</a></p>
</div>

<?php
// Handle Registration Logic
if (isset($_POST['register_user'])) {
    // Collect and process registration data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    // You can add the logic to insert data into WordPress database or perform validations here.
    // Example: wp_create_user($username, $password, $email);
}
?>
