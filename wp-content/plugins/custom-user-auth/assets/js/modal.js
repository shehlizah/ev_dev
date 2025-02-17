function openAuthModal() {
    document.getElementById("custom-auth-modal").style.display = "block";
    document.getElementById("login-section").style.display = "block";
    document.getElementById("registration-section").style.display = "none";
}

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
