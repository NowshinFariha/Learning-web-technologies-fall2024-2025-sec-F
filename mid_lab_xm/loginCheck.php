<?php
session_start();

if (isset($_POST['submit'])) {

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        header('Location: login.html');
        exit;
    }

    if (isset($_SESSION['users'])) {
        foreach ($_SESSION['users'] as $user) {
            if ($user['username'] == $username && password_verify($password, $user['password'])) {
                echo "Welcome, " . $user['name'] . "!";

                exit;
            }
        }
        echo "Invalid username or password.";
    } else {
        echo "No users found. Please register first.";
    }
} elseif (isset($_POST['sign-in'])) {
    header('Location: Registration.html');
    exit;
} else {
    header('Location: login.html');
    exit;
}
?>