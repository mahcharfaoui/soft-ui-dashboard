alert("Script is running!");

function validateForm2() {
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;

    // Validate nom and prenom (allow only letters and spaces)
    var nameRegex = /^[A-Za-z\s]+$/;
    if (!nameRegex.test(nom)) {
        alert('Enter a valid name (only letters and spaces allowed)');
        return false;
    }

    if (!nameRegex.test(prenom)) {
        alert('Enter a valid first name (only letters and spaces allowed)');
        return false;
    }
}