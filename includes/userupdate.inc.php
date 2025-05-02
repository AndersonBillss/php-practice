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
    if(empty($password)){
        exit();
        header("Location: ../index.php");
    }
    if(empty($email)){
        exit();
        header("Location: ../index.php");
    }
    
    try {
        require_once "dbh.inc.php";

        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 2;";

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