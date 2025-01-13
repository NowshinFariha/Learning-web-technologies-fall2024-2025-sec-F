<?php
require_once '../models/EmployeeModel.php';

session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    echo "Access Denied! Please log in.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (empty($name) || empty($contact) || empty($username) || empty($password)) {
        echo "All fields are required!";
        exit();
    }

    $employeeModel = new EmployeeModel();
    if ($employeeModel->register($name, $contact, $username, $password)) {
        echo "Employee registered successfully!";
    } else {
        echo "Error registering employee.";
    }
}
?>
