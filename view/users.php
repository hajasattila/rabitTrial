<!-- users.php -->
<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h1>User List</h1>

        <?php
        require_once '../db.php';
        require_once '../model/userModel.php';
        require_once '../controller/userController.php';
        require_once '../services/userService.php';
        ?>

        <?php if (empty($users)): ?>
            <p>The "Users" database is empty 😢</p>
        <?php else: ?>
            <ul>
                <?php foreach ($users as $user): ?>
                    <li class="item">
                        <?= $user->getName() ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <a href="../index.php" class="list-element">Back to Index</a>
    </div>
</body>

</html>