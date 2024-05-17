<?php
require 'connection.php';

// Debugging: Check if form data is received
// var_dump($_POST); //commented to prevent display

if(isset($_POST["username"], $_POST["email"], $_POST["password"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $query = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)"); //prepare is used together with execute in line 18
    $query->bindParam(':username', $username);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $hashed_password); // Insert hashed password
    
    if ($query->execute()) {
        echo '<script>alert("Signed up successfully")</script>';
        header('Location: login.php');
    } else {
        echo '<script>alert("Failed to sign up")</script>';
        // Debugging: Check for SQL errors
        var_dump($query->errorInfo());
    }
}
?>