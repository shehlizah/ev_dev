
<?php
/**
 * Plugin Name: Custom Authentication Plugin
 * Description: A plugin for user login, registration with multi-relationship, and 2FA.
 * Version: 1.0
 * Author: Advance I-Tech
 * 
 */
if (!defined('ABSPATH')) {
    exit; // Prevent direct access
}
function custom_auth_shortcode() {
    ob_start();
    ?>
    <!-- Login Button -->
    <button id="open-auth-modal">Customer Login</button>

    <!-- Modal -->
    <div id="custom-auth-modal" class="auth-modal">
        <div class="auth-modal-content">
            <span class="auth-close" onclick="closeAuthModal()">&times;</span>
            
            <!-- Login Form -->
            <div id="login-section">
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

           <!-- Registration Form -->
<div id="registration-section" style="display: none;">
    <h2>Register</h2>
    <form method="post">
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
            <!-- Add Relationship Button -->
            <button type="button" id="add-relationship-btn">Add Relationship</button>
        </div>

        <!-- Container for Additional Relationships -->
        <div id="relationship-container"></div>

        <input type="submit" name="register_user" value="Register">
    </form>

    <p>Already have an account? <a href="#" onclick="showLogin()">Login Here</a></p>
</div>
        </div>
    </div>

    <script>
document.getElementById("add-relationship-btn").addEventListener("click", function() {
    // Create a new div for the relationship fields
    let relationshipDiv = document.createElement("div");
    relationshipDiv.classList.add("relationship-entry");

    // Add Name Field
    let nameField = document.createElement("input");
    nameField.type = "text";
    nameField.name = "relationship_name[]";
    nameField.placeholder = "Name";
    nameField.required = true;

    // Add Email Field
    let emailField = document.createElement("input");
    emailField.type = "email";
    emailField.name = "relationship_email[]";
    emailField.placeholder = "Email";
    emailField.required = true;

    // Add Phone Field
    let phoneField = document.createElement("input");
    phoneField.type = "tel";
    phoneField.name = "relationship_phone[]";
    phoneField.placeholder = "Phone";
    phoneField.required = true;

    // Add Address Field
    let addressField = document.createElement("input");
    addressField.type = "text";
    addressField.name = "relationship_address[]";
    addressField.placeholder = "Address";
    addressField.required = true;

    // Add Relationship Dropdown
    let relationshipDropdown = document.createElement("select");
    relationshipDropdown.name = "relationship_type[]";
    let options = ["Parent", "Child", "Brother", "Sister"];
    options.forEach(optionText => {
        let option = document.createElement("option");
        option.value = optionText.toLowerCase();
        option.textContent = optionText;
        relationshipDropdown.appendChild(option);
    });

    // Add Remove Button
    let removeBtn = document.createElement("button");
    removeBtn.type = "button";
    removeBtn.textContent = "Remove";
    removeBtn.onclick = function() {
        relationshipDiv.remove();
    };

    // Append all fields to the new div
    relationshipDiv.appendChild(nameField);
    relationshipDiv.appendChild(emailField);
    relationshipDiv.appendChild(phoneField);
    relationshipDiv.appendChild(addressField);
    relationshipDiv.appendChild(relationshipDropdown);
    relationshipDiv.appendChild(removeBtn);

    // Append to container
    document.getElementById("relationship-container").appendChild(relationshipDiv);
});


        document.getElementById("open-auth-modal").addEventListener("click", function() {
            document.getElementById("custom-auth-modal").style.display = "block";
            document.getElementById("login-section").style.display = "block";
            document.getElementById("registration-section").style.display = "none";
        });

        function closeAuthModal() {
            document.getElementById("custom-auth-modal").style.display = "none";
        }

        function showRegistration() {
            document.getElementById("login-section").style.display = "none";
            document.getElementById("registration-section").style.display = "block";
        }

        function showLogin() {
            document.getElementById("registration-section").style.display = "none";
            document.getElementById("login-section").style.display = "block";
        }
    </script>
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
