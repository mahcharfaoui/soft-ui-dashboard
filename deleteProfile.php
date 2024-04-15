<?php
// Include necessary files
include_once '../controller/ProfileC.php';
include_once '../config.php'; 
// Check if profile ID is provided via GET parameter
if (isset($_GET['id'])) {
    // Get the profile ID from the URL
    $id = $_GET['id'];

    // Instantiate ProfileController
    $profileController = new ProfileController();

    // Delete the profile using the controller method
    $profileController->deleteProfile($id);

    // Redirect to showProfile.php to display updated list of profiles
    header("Location: showProfile.php");
    exit();
}
?>
