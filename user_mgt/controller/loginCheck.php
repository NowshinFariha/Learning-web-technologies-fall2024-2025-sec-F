<?php
    session_start();
    require_once('../model/userModel.php');

    if (isset($_POST['submit'])) {
        $Name = trim($_POST['Name']);
        $password = trim($_POST['password']);

        if ($Name == null || $password == null) {
            echo "Null data found!";
        } else {
            $status = login($Name, $password);
            
            if ($status) {
                setcookie('flag', 'true', time() + 3600, '/');
                $_SESSION['Name'] = $Name;
                header('location: ../view/home.php');
            } else {
                echo "Invalid user";
            }
        }
    } else {
        header('location: ../view/login.html');
    }
?>
