<?php 
session_start();

require('config.php');

if(empty($_SESSION['username'])){
    header("Location: login.php");
}

$sql ="SELECT * FROM users";
$selectUser = $conn->prepare($sql);
$selectUser->execute();

$users_data = $selectUser->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include('common/header.php'); ?>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu">
                <div class="postion-sticky-pt-3">
                    <ul class="nav flex-column">
                        <?php if($_SESSION['is_admin']==1) { ?>
                            <li class="nav-item">
                                <a  class="nav-link" href="home.php">
                                    <span data-feather="file"></span>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link active" href="dashboard.php" aria-current="page">
                                    <span data-feather="home">
                                    </span>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link" href="list_movies.php">
                                    <span data-feather="file"></span>
                                    
                                </a>
                            </li>
                            <li class="nav-item">
                                <a  class="nav-link" href="bookings.php">
                                    <span data-feather="file"></span>
                                    Contacts
                                </a>
                            </li>
                    <?php } else { ?>
                        <li class="nav-item">
                            <a href="nav-link" href="home.php">
                                <span data-feather="home"></span>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="nav-link" href="bookings.php">
                                <span data-feather="file"></span>
                                Purchases
                            </a>
                        </li>
                    </ul>
                    <?php } ?>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1>Dashboard</h1>
                </div>
                <?php if($_SESSION['is_admin']==1) {?>
                    <h2>Users</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Surname</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Update</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($users_data as $user_data)  {?>
                                    <tr>
                                        <td><?php echo $user_data['id']; ?></td>
                                        <td><?php echo $user_data['name']; ?></td>
                                        <td><?php echo $user_data['surname']; ?></td>
                                        <td><?php echo $user_data['email']; ?></td>
                                        <td><a href="editUser.php?id=<?= $user_data['id']; ?>"></a></td>
                                        <td><a href="deleteUser.php?id=<?= $user_data['id']; ?>"></a></td>
                                    </tr>
                                <?php } ?>    
                            </tbody>
                        </table>
                    </div>
                    <?php } ?>
            </main>
        </div>
    </div>
</body>
</html>


