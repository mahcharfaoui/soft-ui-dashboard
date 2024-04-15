<?php
// Include the UserC controller
require_once '../controller/UserC.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $role = $_POST['role'];

    // Create a new User object
    $newUser = new User($nom, $prenom, $telephone, $adresse, $email, $login, $mdp, $role);

    // Add the user using the UserC controller
    $userController = new UserC();
    $userController->addUser($newUser);

    // Redirect to showUser.php to display all users
    header("Location: showUser.php");
    exit(); // Stop further execution
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link rel="stylesheet" href="style.css">
    <script src="script2.js"></script>

<!-- Include your navigation/header here -->

        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <div class="card">
                    <div class="card-header">Add New User</div>
                    <div class="card-body">
                        <!-- Form to add a new user -->
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-group">
                                Nom: <input type="text" name="nom" class="form-control"><br>
                                Prénom: <input type="text" name="prenom" class="form-control"><br>
                                Téléphone: <input type="text" name="telephone" class="form-control"><br>
                                Adresse: <input type="text" name="adresse" class="form-control"><br>
                                Email: <input type="email" name="email" class="form-control"><br>
                                Login: <input type="text" name="login" class="form-control"><br>
                                Mot de passe: <input type="password" name="mdp" class="form-control"><br>
                                Role: <input type="text" name="role" class="form-control"><br>
                                <button type="submit" class="btn btn-primary">Add User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6" id="map"></div>
        </div>
    </div>
</section>


</body>
</html>
