<?php
require('config2.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "SELECT * FROM userinfodata WHERE id=:id";
    $selectUser = $conn_projekt->prepare($sql); // Use $conn_projekt instead of $conn
    $selectUser->bindParam(':id', $id);
    $selectUser->execute();

    $user_data = $selectUser->fetch();

    if(!$user_data) {
        // Handle case where user with given ID is not found
        echo "User not found";
        exit();
    }

    if(isset($_POST['submit'])){
        $name = $_POST['emri'];
        $phone = $_POST['phone_number'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "UPDATE userinfodata SET name=:name, phone=:phone, email=:email, message=:message WHERE id=:id";
        $updateUser = $conn_projekt->prepare($sql); // Use $conn_projekt instead of $conn
        $updateUser->bindParam(':id', $id);
        $updateUser->bindParam(':name', $name);
        $updateUser->bindParam(':phone', $phone);
        $updateUser->bindParam(':email', $email);
        $updateUser->bindParam(':message', $message);
        $updateUser->execute();

        // Redirect to the dashboard after updating
        header("Location: dashboardcontactus.php");
        exit();
    }
} else {
    // Handle case where ID is not provided in the URL
    echo "Invalid request";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data for Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
   
    <?php include('common/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="dashboard.php" class="nav-link active" aria-current="page">
                                <span data-feather="home"></span>
                                Dashboard 
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Dashboard Contact us</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                    </div>
                </div>
                <h2>Edit user's details</h2>
                <div class="table-responsive">
                    <form action="editUsercontactus.php?id=<?php echo $id; ?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $user_data['id']; ?>">
                        <div class="form-floating">
                            <input type="text" name="name" id="userName" class="form-control" placeholder="name" value="<?php echo $user_data['name']; ?>">
                            <label for="userName">Name</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="phone" id="userPhoneNumber" class="form-control" placeholder="phone" value="<?php echo $user_data['phone']; ?>">
                            <label for="userPhoneNumber">Phone number</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" id="userEmail" class="form-control" placeholder="email" value="<?php echo $user_data['email']; ?>">
                            <label for="userEmail">Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="message" id="userMessage" class="form-control" placeholder="message" value="<?php echo $user_data['message']; ?>">
                            <label for="userMessage">Message</label>
                        </div>
                        <br>
                        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Edit</button>
                        
                    </form>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRg
