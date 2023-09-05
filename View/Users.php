<?php
// Users.php

require_once 'Error/ErrorHandler.php'; // Include the ErrorHandler class

// Calling the API endpoint
$apiUrl = 'http://localhost/rabitTrial/Api/UsersApi.php'; // Modify to the correct URL

try {
    // Make the API request
    $apiResponse = file_get_contents($apiUrl);

    if ($apiResponse === false) {
        throw new Exception("Failed to retrieve data from API."); // Throw an exception if the API request fails
    }

    // Decoding the JSON
    $userNames = json_decode($apiResponse);

    // Check if the API response is empty or null
    if ($userNames === null) {
        throw new Exception("Failed to fetch data from the 'users' database."); // Throw an exception if the response is null
    }

    // Displaying the users
    if (empty($userNames)) {
        echo "The 'User' database is empty. 😢";
    } else {
        echo "<h1>User list</h1>";
        echo "<ul>";
        foreach ($userNames as $userName) {
            echo "<li class='item'>{$userName}</li>";
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