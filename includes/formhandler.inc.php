<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Grab the post data
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $email = htmlspecialchars($_POST["email"]);
 
    // Check for empty attributes
    if(empty($username)){
        exit();
        header("Location: ../index.php");
    }
    if(empty($username)){
        exit();
        header("Location: ../index.php");
    }
    if(empty($username)){
        exit();
        header("Location: ../index.php");
    }
    
    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email) Values 
        (:username, :pwd, :email);";

        $statement = $pdo->prepare($query);

        $statement->bindParam(":username", $username);
        $statement->bindParam(":pwd", $password);
        $statement->bindParam(":email", $email);

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