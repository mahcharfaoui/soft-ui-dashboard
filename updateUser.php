<?php
require_once '../controller/Userc.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userId = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
    $role = $_POST['role'];

    // Create a User object with updated data
    $updatedUser = new User($nom, $prenom, $telephone, $adresse, $email, $login, $mdp, $role);
    $updatedUser->setId($userId); // Set the user ID

    // Update user using Userc controller
    $userController = new Userc();
    $userController->modifieruser($updatedUser, $userId);

    // Redirect to showUser.php to display updated user list
    header("Location: showUser.php");
    exit();
}

// Retrieve user ID from URL parameter
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $userId = $_GET['id'];

    // Retrieve user details by ID
    $userController = new Userc();
    $user = $userController->getuserbyid($userId);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>KHAMSA.travel - Update User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Include necessary CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Include other CSS files as needed -->
</head>
<body>
<!-- Update User Section -->
<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <!-- Display Update User Form -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="hidden" name="id" value="<?php echo isset($user['id']) ? $user['id'] : ''; ?>">
                    Nom: <input type="text" name="nom" value="<?php echo isset($user['nom']) ? $user['nom'] : ''; ?>"><br>
                    Prénom: <input type="text" name="prenom" value="<?php echo isset($user['prenom']) ? $user['prenom'] : ''; ?>"><br>
                    Téléphone: <input type="text" name="telephone" value="<?php echo isset($user['telephone']) ? $user['telephone'] : ''; ?>"><br>
                    Adresse: <input type="text" name="adresse" value="<?php echo isset($user['adresse']) ? $user['adresse'] : ''; ?>"><br>
                    Email: <input type="email" name="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>"><br>
                    Login: <input type="text" name="login" value="<?php echo isset($user['login']) ? $user['login'] : ''; ?>"><br>
                    Mot de passe: <input type="password" name="mdp" value=""><br>
                    Role: <input type="text" name="role" value="<?php echo isset($user['role']) ? $user['role'] : ''; ?>"><br>
                    <input type="submit" value="Update User">
                </form>
            </div>
            <div class="col-md-6" id="map"></div>
        </div>
    </div>
</section>

</body>
</html>
