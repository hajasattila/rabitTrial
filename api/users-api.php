<?php
// users-api.php

// Imports
require_once '../db.php';
require_once '../controller/userController.php';
require_once '../error/errorHandler.php'; // Import the ErrorHandler

try {
    // Create an instance of UserController
    $userController = new UserController($conn);

    // Get all users
    $users = $userController->getAllUsers();

    // Set the response content type to JSON
    header('Content-Type: application/json');

    $userNames = [];
    // Iterate through the array of users
    foreach ($users as $user) {
        // Add the user's name to the array
        $userNames[] = $user->getUsername();
    }

    // Output user names in JSON format
    echo json_encode($userNames);

} catch (Exception $e) {
    // Handle errors using the ErrorHandler class
    ErrorHandler::logError("API Error", "An error occurred while processing the request", $e);
}
?>