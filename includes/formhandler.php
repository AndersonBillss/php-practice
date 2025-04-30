<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Grab the post data
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favoritepet = htmlspecialchars($_POST["favoritepet"]);
 
    // Check for empty attributes
    if(empty($firstname)){
        exit();
        header("Location: ../index.php");
    }
    if(empty($firstname)){
        exit();
        header("Location: ../index.php");
    }
    if(empty($firstname)){
        exit();
        header("Location: ../index.php");
    }
    
    // Handle data here

    // Redirect to index.php
    header("Location: ../index.php");
} else {
    // Redirect to index.php
    header("Location: ../index.php");
}