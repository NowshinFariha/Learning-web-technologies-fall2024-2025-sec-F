<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "Access Denied! Please log in.";
    exit();
}

$conn = new mysqli('localhost', 'root', '', 'online_shop');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id'])) {
    $id =($_POST['id']);

    $sql = "DELETE FROM employees WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Employee ID is required.";
}

$conn->close();
?>
