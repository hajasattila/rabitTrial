<?php
// Users.php
// Calling the API endpoint
$apiUrl = 'http://localhost/rabitTrial/api/usersApi.php'; // Modify to the correct URL

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

echo '<a href="index" class="list-group">Back to Index</a>';
?>