<?php
// advertisement-api.php

// Import
require_once '../db.php';
require_once '../controller/advertisementsController.php';
require_once '../controller/userController.php';
require_once '../error/errorHandler.php'; // Import the ErrorHandler

try {
    // Create an instance of AdvertisementsController
    $advertisementsController = new AdvertisementController($conn);

    // Get all advertisements
    $advertisements = $advertisementsController->getAdvertisements();

    // Set the response content type to JSON
    header('Content-Type: application/json');

    $advertisementData = [];

    // Iterate through the array of advertisements
    foreach ($advertisements as $advertisement) {
        $advertisementData[] = [
            'title' => $advertisement->getTitle(),
            'userName' => $advertisement->getUserName($conn), // Pass the database connection
        ];
    }
    // Output advertisement data in JSON format
    echo json_encode($advertisementData);
} catch (Exception $e) {
    ErrorHandler::logError("Advertisements-API Error", "An error occurred while processing the 'Advertisements' request", $e);
}
?>