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
        require_once '../db.php';
        require_once '../model/advertisementsModel.php';
        require_once '../controller/advertisementsController.php';
        require_once '../services/advertisementsService.php';

        $advertisementController = new AdvertisementController($conn);
        $advertisements = $advertisementController->getAdvertisements();

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