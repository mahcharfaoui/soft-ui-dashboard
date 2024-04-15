<?php
require_once '../controller/Userc.php';

// Check if user ID is provided via GET parameter
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $userId = $_GET['id'];

    // Delete user by ID using Userc controller
    $userController = new Userc();
    $userController->supprimeruser($userId);

    // Redirect to showUser.php after deletion
    header("Location: showUser.php");
    exit();
} else {
    echo "User ID not specified.";
}
?>
