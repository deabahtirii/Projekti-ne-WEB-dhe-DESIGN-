<?php
require('config2.php');

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; // Corrected variable name

    $sql = "UPDATE userinfodata SET name=:name, email=:email, phone=:phone WHERE id=:id"; // Corrected table name
    $updateUser = $conn->prepare($sql);
    $updateUser->bindParam(':id', $id);
    $updateUser->bindParam(':name', $name);
    $updateUser->bindParam(':email', $email);
    $updateUser->bindParam(':phone', $phone);
    $updateUser->execute();

    // Redirect to the dashboard after updating
    header("Location: dashboardcontactus.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Updated</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include('common/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>User Data Updated</h1>
                </div>
                <p>User data has been successfully updated.</p>
                <!-- You can add more content or styling as needed -->
                <a href="dashboardContactus.php" class="btn btn-primary">Go back to Dashboard</a>
            </main>
        </div>
    </div>
    <!-- Additional scripts or links if needed -->
</body>
</html>
