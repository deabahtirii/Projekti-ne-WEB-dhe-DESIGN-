<?php
session_start();

require('config2.php'); // Use the correct database configuration file

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch all submissions from the database
    $stmt = $conn->prepare('SELECT * FROM userinfodata');
    $stmt->execute();
    $submissions = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "PDO Error: " . $e->getMessage(); // Display the PDO error message
}

// Set $_SESSION['is_admin'] to 0 if not already set
if (!isset($_SESSION['is_admin'])) {
    $_SESSION['is_admin'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate input
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if (empty($name) || empty($phone) || empty($email) || empty($message)) {
        // Handle error: missing input
        echo "Error: Missing input.";
        exit();
    }

    try {
        $stmt = $conn->prepare('INSERT INTO userinfodata (name, phone, email, message) VALUES (:name, :phone, :email, :message)');

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        $stmt->execute();

        echo "Message sent successfully!";
    } catch (PDOException $e) {
        echo "PDO Error: " . $e->getMessage(); // Display the PDO error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard for Contact Form</title>
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
                                <a class="nav-link active" href="dashboard.php" aria-current="page">
                                    <span data-feather="home"></span>
                                    Dashboard
                                </a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">
                                    <span data-feather="home"></span>
                                    Our Home Page
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="reviews.php">
                                    <span data-feather="file"></span>
                                    Our Reviews
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1>Contact Form Submissions</h1>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
    <?php foreach ($submissions as $submission) : ?>
        <tr>
            <td><?php echo $submission['id']; ?></td>
            <td><?php echo $submission['name']; ?></td>
            <td><?php echo $submission['phone']; ?></td>
            <td><?php echo $submission['email']; ?></td>
            <td><?php echo isset($submission['message']) ? $submission['message'] : ''; ?></td>
            <td><?php echo isset($submission['created_at']) ? $submission['created_at'] : ''; ?></td>
            <td>
                <a href="editUsercontactus.php?id=<?= $submission['id']; ?>">Edit</a> |
                <a href="deleteUserContactus.php?id=<?= $submission['id']; ?>">Delete</a>
                
            </td>
        </tr>
    <?php endforeach; ?>
</tbody>
                </table>
            </main>
        </div>
    </div>
</body>
</html>
