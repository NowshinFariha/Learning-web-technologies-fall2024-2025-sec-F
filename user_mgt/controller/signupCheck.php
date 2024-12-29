<?php
    require_once('../model/userModel.php');

    if (isset($_POST['submit'])) {
        $Name = trim($_POST['Name']);
        $Id = trim($_POST['Id']);
        $password = trim($_POST['password']);
        $confirmpassword = trim($_POST['confirmpassword']);

        if ($Name == null || $Id == null || $password == null || $confirmpassword == null) {
            echo "Null data found!";
        } else {
            $status = addstudent($Name, $Id, $password, $confirmpassword);

            if ($status) {
                header('location: ../view/login.html');
            } else {
                header('location: ../view/signup.html');
            }
        }
    } else {
        header('location: ../view/signup.html');
    }
?>
