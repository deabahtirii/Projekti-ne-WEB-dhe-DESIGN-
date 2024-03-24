<?php
require('config.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=:id";
    $selectUser = $conn->prepare($sql);
    $selectUser->bindParam(':id', $id);
    $selectUser->execute();

    $user_data = $selectUser->fetch();
} else {
    echo "User ID not provided.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include('common/header.php') ?>
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-wrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>User Details</h1>
                </div>
                <?php if($user_data) { ?>
                    <div>
                        <p><strong>ID:</strong> <?php echo $user_data['id']; ?></p>
                        <p><strong>Name:</strong> <?php echo $user_data['emri']; ?></p>
                        <p><strong>Username:</strong> <?php echo $user_data['username']; ?></p>
                        <p><strong>Email:</strong> <?php echo $user_data['email']; ?></p>
                    </div>
                <?php } else { ?>
                    <p>User not found.</p>
                <?php } ?>
                <a href="dashboard.php" class="btn btn-primary">Go back to Dashboard</a>
            </main>
        </div>
    </div>
</body>
</html>
