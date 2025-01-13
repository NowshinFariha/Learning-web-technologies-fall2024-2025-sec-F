<?php
session_start(); 

$conn = new mysqli('localhost', 'root', '', 'online_shop');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM employees WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
 
        if (password_verify($password, $user['password'])) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            echo "Login successful! Welcome, {$user['name']}.";
        } else {
            echo "Invalid password. Please try again.";
        }
    } else {
        echo "Username not found.";
    }
} else {
    echo "Both username and password are required.";
}

$conn->close();
?>
