<!DOCTYPE html>
<?php
$pages = [
    'main' => 'index',
    'users' => 'users',
    'advertisements' => 'advertisements',
];

// Get the requested page from parameters
$page = $_GET["page"] ?? "main";
// Set the page title
$title = $pages[$page] ?? "index";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $title ?> | RabIT
    </title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <?php if ($page === 'main'): ?>
            <h1>RabIT</h1>
            <?php foreach ($pages as $key => $value): ?>
                <?php if ($key !== 'main'): ?>
                    <a href="?page=<?= $key ?>" class="list-group"><?= $value ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <!-- If the user try to reach a not existed page -->
        <?php if (!array_key_exists($page, $pages)): ?>
            <h2>Page not found</h2>
            <p><a href="index.php?page=main" class="list-group">Back to the main page</a></p>
        <?php else: ?>
            <!-- Include the selected pages content -->
            <?php if (isset($_GET['page'])): ?>
                <?php $page = $_GET['page']; ?>
                <?php if ($page === 'users'): ?>
                    <?php include 'view/users.php'; ?>
                <?php elseif ($page === 'advertisements'): ?>
                    <?php include 'view/advertisements.php'; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>

</html>