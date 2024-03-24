<?php

require('config.php');

if (isset($_POST['submit'])) {
    $emri = $_POST['emri'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $tempPass = $_POST['password'];
    $password = password_hash($tempPass, PASSWORD_DEFAULT);
    $tempConfirm = $_POST['confirm_password'];
    $confirm_password = password_hash($tempConfirm, PASSWORD_DEFAULT);

    if (empty($emri) || empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        echo "You need to fill all fields";
    } else {
        $sql = "INSERT INTO users (emri, username, email, password, confirm_password) VALUES (:emri, :username, :email, :password, :confirm_password)";
        $insertSql = $conn->prepare($sql);
        $insertSql->bindParam(':emri', $emri);
        $insertSql->bindParam(':username', $username);
        $insertSql->bindParam(':email', $email);
        $insertSql->bindParam(':password', $password);
        $insertSql->bindParam(':confirm_password', $confirm_password);

        $insertSql->execute();
        header("Location: login.php");
    }
}

?>
