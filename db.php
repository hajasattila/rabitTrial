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
 -->
<?php

// @todo .env will be used here, to make private variables for the database
$host = "";
$username = "";
$password = "";
$dbname = "";

// @todo errorHandler will be used here if the database or internet connection is not available
// Creating connection, with host, username, password and dbname
$conn = new mysqli($host, $username, $password, $dbname);

// If the connection failed
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optionally set charset
$conn->set_charset("utf8");
?>