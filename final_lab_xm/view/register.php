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

if (isset($_POST['name'], $_POST['contact'], $_POST['username'], $_POST['password'])) {
    $name =($_POST['name']);
    $contact =($_POST['contact']);
    $username =($_POST['username']);
    $password =($_POST['password']);

    $sql = "INSERT INTO employees (name, contact_no, username, password) VALUES ('$name', '$contact', '$username', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Employee registered successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "All fields are required.";
}

$conn->close();
?>
