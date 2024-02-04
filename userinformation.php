<?php

$connection = mysqli_connect('localhost', 'root');

mysqli_select_db($connection, "youtubedata");

$user = $_POST['user'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO 'userinfodata'('user', 'phonenumber','email' , 'message') VALUES ('$user' , '$phonenumber' , '$email' , '$message')";

mysqli_query($connection , $query);

echo "MESSAGE IS SENT";
?>