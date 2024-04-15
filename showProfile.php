<!DOCTYPE html>
<html lang="en">
<head>
    <title>KHAMSA.travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Include CSS -->
    <link rel="stylesheet" href="stylet.css">

</head>
<body>
 
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar ftco-animate">
                <!-- Sidebar content here -->
            </div>
            <div class="col-lg-9">
                <!-- Display profiles in a table -->
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Photo</th>
                        <th>ID Utilisateur</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    // Include necessary files
                    include_once '../controller/ProfileC.php';
                    include_once '../config.php'; 
                    
                    // Instantiate ProfileController
                    $profileController = new ProfileController();

                    // Retrieve list of profiles using the controller method
                    $profiles = $profileController->listProfiles();

                    // Loop through profiles and display in the table
                    foreach ($profiles as $profile) :
                    ?>
                    <tr>
                        <td><?php echo $profile['idpro']; ?></td>
                        <td><?php echo $profile['nom']; ?></td>
                        <td><?php echo $profile['prenom']; ?></td>
                        <td><?php echo $profile['photo']; ?></td>
                        <td><?php echo $profile['iduser']; ?></td>
                        <td>
                            <a href="updateProfile.php?id=<?php echo $profile['idpro']; ?>">Modifier</a>
                            <a href="deleteProfile.php?id=<?php echo $profile['idpro']; ?>">Supprimer</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</section>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <!-- Footer content here -->
</footer>

</body>
</html>
