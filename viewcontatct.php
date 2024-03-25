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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submissions</title>
</head>

<body>
    <h1>Contact Form Submissions</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date</th>
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
                    <td><?php echo $submission['message']; ?></td>
                    <td><?php echo $submission['created_at']; ?></td>
                    <td>
                        <a href="editUsercontactus.php?id=<?php echo $submission['id']; ?>">Edit</a>
                        <a href="deleteUsercontactus.php?id=<?php echo $submission['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
