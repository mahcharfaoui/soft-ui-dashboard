<?php
// Include necessary files
include_once '../controller/ProfileC.php';
include_once '../config.php'; 

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id']; // Profile ID to update
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $photo = $_POST['photo'];
    $iduser = $_POST['iduser'];

    // Create a new Profile object with updated data
    $updatedProfile = new Profile($id, $nom, $prenom, $photo, $iduser);

    // Instantiate ProfileController
    $profileController = new ProfileController();

    // Update the profile using the controller method
    $profileController->updateProfile($updatedProfile, $id);

    // Redirect to showProfile.php to display updated profile
    header("Location: showProfile.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>KHAMSA.travel - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">

        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <!-- Form to update a profile -->
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    ID Profil à Mettre à Jour: <input type="text" name="id"><br>
                    Nouveau Nom: <input type="text" name="nom"><br>
                    Nouveau Prénom: <input type="text" name="prenom"><br>
                    Nouvelle Photo: <input type="text" name="photo"><br>
                    Nouvel ID Utilisateur: <input type="text" name="iduser"><br>
                    <input type="submit" value="Mettre à Jour Profil">
                </form>
            </div>
            <div class="col-md-6" id="map"></div>
        </div>
    </div>
</section>

</body>
</html>
