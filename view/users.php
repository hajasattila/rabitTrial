<!-- users.php -->
<h1>User List</h1>

<?php
// Imports
require_once 'db.php'; //db
require_once 'model/userModel.php'; //model
require_once 'controller/userController.php'; //Controller
require_once 'services/userService.php'; //Service 
?>

<!-- If the database is empty -->
<?php if (empty($users)): ?>
    <p class="item">The 'User' database is empty. 😢</p>
    <!-- If not, show the users -->
<?php else: ?>
    <ul>
        <?php foreach ($users as $user): ?>
            <li class="item">
                <?= $user->getUsername() ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<!-- Back to the main menu -->
<a href="index" class="list-group">Back to Index</a>