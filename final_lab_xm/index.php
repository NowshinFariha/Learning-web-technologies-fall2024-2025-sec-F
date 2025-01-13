<?php
session_start();


if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: views/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome to the Admin Dashboard</h1>
    <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
 
        <ul>
            <li><a href="views/register.php">Register Employee</a></li>
            <li><a href="views/update.php">Update Employee</a></li>
            <li><a href="views/delete.php">Delete Employee</a></li>
            <li><a href="views/search.php">Search Employee</a></li>
            <li><a href="controllers/LogoutController.php">Logout</a></li>
        </ul>
</body>
</html>
