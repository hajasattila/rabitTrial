<?php
/*
<!-- 
    Database was created based on these configurations:

    CREATE DATABASE rabittrial;

    CREATE TABLE users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL
    );

    CREATE TABLE advertisements (
        id INT AUTO_INCREMENT PRIMARY KEY,
        userid INT NOT NULL,
        title VARCHAR(255) NOT NULL,
        FOREIGN KEY (userid) REFERENCES users(id)
    );

    -------------------------------- TEST --------------------------------
    'users' table:
    INSERT INTO users (name) VALUES ('Test Elek');

    'advertisement' table:
    INSERT INTO advertisements (userid, title) VALUES (1, 'smthng');
    ----------------------------------------------------------------------
 -->*/
//import
require_once 'error/errorHandler.php';

try {
    // Set path to .env file
    $envFilePath = __DIR__ . '/.env';

    // Check if the .env file exists
    if (file_exists($envFilePath)) {
        // read .env file line by line
        $lines = file($envFilePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        $envVars = [];

        // Read variables stored in .env file
        foreach ($lines as $line) {
            list($key, $value) = explode('=', $line, 2);
            $envVars[$key] = $value;
        }

        // Check that the required keys are really defined
        if (isset($envVars['DB_HOST'], $envVars['DB_USERNAME'], $envVars['DB_PASSWORD'], $envVars['DB_NAME'])) {
            $dbHost = $envVars['DB_HOST'];
            $dbUsername = $envVars['DB_USERNAME'];
            $dbPassword = $envVars['DB_PASSWORD'];
            $dbName = $envVars['DB_NAME'];

            // Creating connection, with host, username, password and dbname
            $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

        }
    }
} catch (Exception $e) {
    //Log the exception is there any
    ErrorHandler::logError("Database Error", "A database error occurred", $e);
}

// Optionally set charset
$conn->set_charset("utf8");
?>