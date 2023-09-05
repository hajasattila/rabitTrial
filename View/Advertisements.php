<?php
// Advertisements.php

require_once 'Error/ErrorHandler.php'; // Include the ErrorHandler class

// API endpoint URL for advertisements
$apiUrl = 'http://localhost/rabitTrial/Api/AdvertisementsApi.php';

try {
    // API request to fetch advertisements
    $apiResponse = file_get_contents($apiUrl);

    // Decode the JSON response
    $advertisementData = json_decode($apiResponse);

    // Check if the API response is empty or null
    if ($advertisementData === null) {
        throw new Exception("Failed to fetch data from the 'advertisements' database."); // Throw an exception if the response is null
    }

    // Check if the response is empty
    if (empty($advertisementData)) {
        echo "<p class='item'>The advertisements database is empty. 😢</p>";
    } else {
        echo "<h1>Advertisement list</h1>";
        echo "<ul>";
        foreach ($advertisementData as $advertisement) {
            echo "<li class='item'>";
            echo "<a class='adv'>" . htmlspecialchars($advertisement->title) . "</a> - ";
            echo "(" . htmlspecialchars($advertisement->userName) . ")";
            echo "</li>";
        }
        echo "</ul>";
    }
    echo '<a href="index" class="list-group">Back to Index</a>';
} catch (Exception $e) {

    // Handle the exception
    echo "<a class='adv'>An error occurred: <a>" . "<br>" . $e->getMessage(); // Display an error message to the user
    echo '<a href="index" class="list-group">Back to Index</a>';
    ErrorHandler::logError('Error', $e->getMessage(), $e); // Log the error details
}

?>