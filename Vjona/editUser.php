<?php 
require('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id=:id";
$selectUser = $conn->prepare($sql);
$selectUser->bindParam(':id', $id);
$selectUser->execute();

$user_data = $selectUser->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data</title>
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
                    <h1>Dashboard</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>
                    </div>
                </div>
                <h2>Edit user's details</h2>
                <div class="table-responsive">
                    <form action="updateUser.php" method="post">
                        <div class="form-floating">
                            <input type="number" name="id" id="userId" class="form-control" placeholder="Id" value="<?php echo $user_data['id']; ?>" readonly>
                            <label for="userId">Id</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="emri" id="userName" class="form-control" placeholder="Name" value="<?php echo $user_data['emri']; ?>">
                            <label for="userName">Name</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" name="username" id="userSurname" class="form-control" placeholder="Username" value="<?php echo $user_data['username']; ?>">
                            <label for="userSurname">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" name="email" id="userEmail" class="form-control" placeholder="Email" value="<?php echo $user_data['email']; ?>">
                            <label for="userEmail">Email</label>
                        </div>
                        <br>
                        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Edit</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
</body>
</html>
