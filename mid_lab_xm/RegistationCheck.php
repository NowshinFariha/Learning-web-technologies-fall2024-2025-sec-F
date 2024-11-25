<?php
session_start();

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

if (isset($_POST['register'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password) || empty($name) || empty($email)) {
        header('Location: Registration.html');
        exit;
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $user = [
            "name" => $name,
            "email" => $email,
            "username" => $username,
            "password" => $hashed_password
        ];

        $_SESSION['users'][] = $user;

        header('Location: login.html');
        exit;
    }
} elseif (isset($_POST['back'])) {
    header('Location: login.html');
    exit;
} else {
    header('Location: Registration.html');
    exit;
}
?>