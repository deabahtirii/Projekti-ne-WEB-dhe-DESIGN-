<?php

session_start();

require('config.php');


try {
    // Define the PDO connection string
    $pdo = new PDO('mysql:host=localhost;dbname=projekt', 'root', '');

    // Set the PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare the SQL statement
    $stmt = $pdo->prepare('INSERT INTO userinfodata(user, phonenumber, email, message) VALUES (:user, :phonenumber, :email, :message)');

    // Bind the parameters
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':phonenumber', $phonenumber);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);

// Set the values
$user = $_POST['your_name'];
$phonenumber = $_POST['your_phone'];
$email = $_POST['your_email'];
$message = $_POST['comments'];

    // Execute the SQL statement
    $stmt->execute();

    // Output a success message
    echo "MESSAGE IS SENT";
} catch (PDOException $e) {
    // Handle any PDOExceptions that occur during database operations
    echo "Error: " . $e->getMessage();
}

?>
