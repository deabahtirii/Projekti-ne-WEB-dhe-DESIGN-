<?php

$host = "localhost";
$dbname = "projekt2";
$username = "root";
$password = "";



try {
    $conn_projekt = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn_projekt->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

?>