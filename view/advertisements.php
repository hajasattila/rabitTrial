<?php
// API endpoint URL for advertisements
$apiUrl = 'http://localhost/rabitTrial/api/advertisements-api.php';

// API request to fetch advertisements
$apiResponse = file_get_contents($apiUrl);

// Decode the JSON response
$advertisementData = json_decode($apiResponse);

// Check if the response is empty
if (empty($advertisementData)) {
    echo "<p class='item'>The advertisements database is empty. 😢</p>";
} else {
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
?>