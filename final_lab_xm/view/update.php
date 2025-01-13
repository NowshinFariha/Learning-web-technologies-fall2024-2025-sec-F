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

if (isset($_POST['id'], $_POST['name'], $_POST['contact'])) {
    $id =($_POST['id']);
    $name =($_POST['name']);
    $contact =($_POST['contact']);

    $sql = "UPDATE employees SET name='$name', contact_no='$contact' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "Employee info updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "All fields are required.";
}

$conn->close();
?>
