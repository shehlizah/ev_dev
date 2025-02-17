document.getElementById("add-relationship-btn").addEventListener("click", function() {
    let relationshipDiv = document.createElement("div");
    relationshipDiv.classList.add("relationship-entry");

    let nameField = document.createElement("input");
    nameField.type = "text";
    nameField.name = "relationship_name[]";
    nameField.placeholder = "Name";
    nameField.required = true;

    let emailField = document.createElement("input");
    emailField.type = "email";
    emailField.name = "relationship_email[]";
    emailField.placeholder = "Email";
    emailField.required = true;

    let phoneField = document.createElement("input");
    phoneField.type = "tel";
    phoneField.name = "relationship_phone[]";
    phoneField.placeholder = "Phone";
    phoneField.required = true;

    let addressField = document.createElement("input");
    addressField.type = "text";
    addressField.name = "relationship_address[]";
    addressField.placeholder = "Address";
    addressField.required = true;

    let relationshipDropdown = document.createElement("select");
    relationshipDropdown.name = "relationship_type[]";
    let options = ["Parent", "Child", "Brother", "Sister"];
    options.forEach(optionText => {
        let option = document.createElement("option");
        option.value = optionText.toLowerCase();
        option.textContent = optionText;
        relationshipDropdown.appendChild(option);
    });

    let removeBtn = document.createElement("button");
    removeBtn.type = "button";
    removeBtn.textContent = "Remove";
    removeBtn.onclick = function() {
        relationshipDiv.remove();
    };

    relationshipDiv.appendChild(nameField);
    relationshipDiv.appendChild(emailField);
    relationshipDiv.appendChild(phoneField);
    relationshipDiv.appendChild(addressField);
    relationshipDiv.appendChild(relationshipDropdown);
    relationshipDiv.appendChild(removeBtn);

    document.getElementById("relationship-container").appendChild(relationshipDiv);
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

document.getElementById("open-auth-modal").addEventListener("click", function() {
    document.getElementById("custom-auth-modal").style.display = "block";
    document.getElementById("login-section").style.display = "block";
    document.getElementById("registration-section").style.display = "none";
});
