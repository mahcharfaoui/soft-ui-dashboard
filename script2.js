alert("Script is running!");

// Function to validate the nom field (only letters and spaces allowed)
function validateNom(nom) {
    var nameRegex = /^[A-Za-z\s]+$/;
    return nameRegex.test(nom);
}

// Function to validate the prenom field (only letters and spaces allowed)
function validatePrenom(prenom) {
    var nameRegex = /^[A-Za-z\s]+$/;
    return nameRegex.test(prenom);
}

// Function to validate the telephone field (must be a valid phone number)
function validateTelephone(telephone) {
    var phoneRegex = /^\d{10}$/; // Assuming 10-digit phone number format
    return phoneRegex.test(telephone);
}

// Function to validate the adresse field (allow letters, numbers, and spaces)
function validateAdresse(adresse) {
    var addressRegex = /^[A-Za-z0-9\s]+$/;
    return addressRegex.test(adresse);
}

// Function to validate the email field (must be a valid email format)
function validateEmail(email) {
    var emailRegex = /^\S+@\S+\.\S+$/;
    return emailRegex.test(email);
}

// Function to validate the login field (allow letters, numbers, and underscores)
function validateLogin(login) {
    var loginRegex = /^[A-Za-z0-9_]+$/;
    return loginRegex.test(login);
}

// Function to validate the mdp (password) field (must meet password complexity criteria)
function validatePassword(mdp) {
    // Example password complexity criteria (e.g., at least 8 characters)
    return mdp.length >= 8;
}

// Function pour valider role
function validateRole(role) {
    // role est predefenie (e.g., 'admin', 'user', etc.)
    var validRoles = ['admin', 'user', 'guest']; // Update with your valid roles
    return validRoles.includes(role);
}



