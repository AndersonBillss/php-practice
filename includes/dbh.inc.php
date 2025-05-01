<?php

$dsn = "mysql:host=localhost;dbname=my_first_php_database";
$dbUsername = "root";
$dbPassword = "";

try {
    $pdo = new PDO($dsn, $dbUsername, $dbPassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo "Connection failed: " . $err->getMessage();
}


// Port 3306
// my_first_php_database
// http://localhost/phpmyadmin