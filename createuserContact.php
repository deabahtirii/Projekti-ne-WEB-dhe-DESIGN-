<?php
require('config2.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contacts (name, phone, email, message) VALUES (:name, :phone, :email, :message)";
    $createContact = $conn->prepare($sql);
    $createContact->bindParam(':name', $name);
    $createContact->bindParam(':phone', $phone);
    $createContact->bindParam(':email', $email);
    $createContact->bindParam(':message', $message);
    $createContact->execute();

    // Redirect to a thank you page or back to the contact form
    header("Location: thank-you.php");
    exit();
}
?>