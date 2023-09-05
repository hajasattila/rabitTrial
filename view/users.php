<?php
// users.php

// Calling the API endpoint
$apiUrl = 'http://localhost/rabitTrial/api/users-api.php'; // Modify to the correct URL

// Make the API request
$apiResponse = file_get_contents($apiUrl);

// Decoding the JSON
$userNames = json_decode($apiResponse);

// Displaying the users
if (empty($userNames)) {
    echo "The 'User' database is empty. 😢";
} else {
    echo "<h1>User List</h1>";
    echo "<ul>";
    foreach ($userNames as $userName) {
        echo "<li class='item'>{$userName}</li>";
    }
    echo "</ul>";
}

// Back to the main menu
echo '<a href="index" class="list-group">Back to Index</a>';
?>