<?php 

session_start();

require('config.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        echo "You need to fill all fields";
    }
    else{
        $sql = "SELECT id, emri, username, email, password, is_admin FROM users WHERE username=:username";
        $selectUser = $conn->prepare($sql);
        $selectUser->bindParam(':username', $username);
        $selectUser->execute();
        $data = $selectUser->fetch();

        if ($data == false){
            echo "This user doesn't exist!";
        }
        else{
            if(password_verify($password, $data['password'])){
                $_SESSION['id'] = $data['id'];
                $_SESSION['username'] = $data['username'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['name'] = $data['emri'];
                $_SESSION['is_admin'] = $data['is_admin'];

                header('Location: dashboard.php');
                exit(); // Ensure script termination after redirect
            }
            else{
                echo "The password is incorrect";
            }
        }
    }
}

?>
