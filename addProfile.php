<?php
// Include necessary files
include_once '../controller/ProfileC.php';
include_once '../config.php'; 

// Get PDO instance using the config class
$pdo = config::getConnexion();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $photo = $_POST['photo'];
    $iduser = $_POST['iduser'];

    // Create a new Profile object
    $newProfile = new Profile(null, $nom, $prenom, $photo, $iduser);

    // Instantiate ProfileController
    $profileController = new ProfileController();

    // Add the profile using the controller method
    $profileController->addProfile($newProfile);

    // Redirect to showProfile.php to display all profiles
    header("Location: showProfile.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<script src="script1.js"></script>

        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nom" placeholder="Nom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="prenom" placeholder="Prenom">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="photo" placeholder="Photo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="iduser" placeholder="ID Utilisateur">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Ajouter Profil" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6" id="map"></div>
        </div>
    </div>
</section>

</body>

</html>