<!-- users.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Advertisements List</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="container">
        <h1>Advertisements List</h1>

        <?php
        //Imports
        require_once '../db.php'; //Database
        require_once '../model/advertisementsModel.php'; //Model
        require_once '../controller/advertisementsController.php'; //Controller
        require_once '../services/advertisementsService.php'; //Service
        ?>

        <?php if (empty($advertisements)): ?>
            <p>The advertisements database is empty. 😢</p>
        <?php else: ?>
            <ul>
                <?php foreach ($advertisements as $advertisement): ?>
                    <li class="item">
                        <?= $advertisement->getTitle() ?>
                        -
                        <?= $advertisement->getUserName($conn) ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <a href="../index.php" class="list-element">Back to Index</a>
    </div>
</body>

</html>