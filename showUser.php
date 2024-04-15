<?php
require_once '../controller/Userc.php';

// Retrieve all users using Userc controller
$userController = new Userc();
$users = $userController->afficheruser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users - KHAMSA.travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="stylet.css">


<!-- User Listings Section -->
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="mb-4">Users</h2>
                        <?php if (!empty($users) && is_array($users)) : ?>
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Téléphone</th>
                                    <th>Adresse</th>
                                    <th>Email</th>
                                    <th>Login</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?php echo $user['id']; ?></td>
                                        <td><?php echo $user['nom']; ?></td>
                                        <td><?php echo $user['prenom']; ?></td>
                                        <td><?php echo $user['telephone']; ?></td>
                                        <td><?php echo $user['adresse']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><?php echo $user['login']; ?></td>
                                        <td><?php echo $user['role']; ?></td>
                                        <td>
                                            <a href="updateUser.php?id=<?php echo $user['id']; ?>">Edit</a>
                                            <a href="deleteUser.php?id=<?php echo $user['id']; ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php else : ?>
                            <p>No users found.</p>
                        <?php endif; ?>
                        <a href="addUser.php" class="btn btn-primary">Add New User</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>
