<!-- advertisement.php -->
<h1>Advertisements List</h1>

<?php
//Imports
require_once 'db.php'; //Database
require_once 'model/advertisementsModel.php'; //Model
require_once 'controller/advertisementsController.php'; //Controller
require_once 'services/advertisementsService.php'; //Service
?>

<!-- If the database is empty -->
<?php if (empty($advertisements)): ?>
    <p class="item">The advertisements database is empty. 😢</p>
    <!-- If not, show the advertisements, with the users who announced it -->
<?php else: ?>
    <ul>
        <?php foreach ($advertisements as $advertisement): ?>
            <li class="item">
                <a class="adv">
                    <?= $advertisement->getTitle() ?>
                </a>
                -
                (
                <?= $advertisement->getUserName($conn) ?> )
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<a href="index" class="list-group">Back to Index</a>