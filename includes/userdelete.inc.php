<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Grab the post data
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
 
    // Check for empty attributes
    if(empty($username)){
        exit();
        header("Location: ../index.php");
    }
    if(empty($password)){
        exit();
        header("Location: ../index.php");
    }
    
    try {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";

        $statement = $pdo->prepare($query);

        $statement->bindParam(":username", $username);
        $statement->bindParam(":pwd", $password);

        $statement->execute();

        $pdo = null;
        $statement = null;

        header("Location: ../index.php");

        die();
    } catch (PDOException $err) {
        die("Query failed: " . $err->getMessage());
    }
} else {
    // Redirect to index.php
    header("Location: ../index.php");
}