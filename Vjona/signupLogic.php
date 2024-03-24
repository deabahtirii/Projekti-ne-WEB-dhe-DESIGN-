<?php

session_start();

require('config.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $confirm_password = $_POST['confirm_password'];

    
    if(empty($username) || empty($password) || empty($email) || empty($confirm_password)){
        echo "You need to fill all fields";
    }
    else {
       
        $checkUsernameQuery = "SELECT id FROM users WHERE username = :username";
        $checkUsernameStmt = $conn->prepare($checkUsernameQuery);
        $checkUsernameStmt->bindParam(':username', $username);
        $checkUsernameStmt->execute();

        if($checkUsernameStmt->rowCount() > 0) {
            echo "Username already taken. Please choose another one.";
        } else {
           
            if($password !== $confirm_password) {
                echo "Passwords do not match";
            } else {
                
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            
                $insertUserQuery = "INSERT INTO users (username, password, email) VALUES (:username, :password, :email)";
                $insertUserStmt = $conn->prepare($insertUserQuery);
                $insertUserStmt->bindParam(':username', $username);
                $insertUserStmt->bindParam(':password', $hashedPassword);
                $insertUserStmt->bindParam(':email', $email);

                if($insertUserStmt->execute()) {
                    echo "User registered successfully!";
                    header('Location: login.php');
                    exit();
                } else {
                    echo "Error registering user. Please try again.";
                }
            }
        }
    }
}

?>
