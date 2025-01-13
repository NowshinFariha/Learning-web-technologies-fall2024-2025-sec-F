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

if (isset($_GET['query'])) {
    $query =($_GET['query']);
    $sql = "SELECT * FROM employees WHERE name LIKE '%$query%' OR contact_no LIKE '%$query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li>ID: {$row['id']}, Name: {$row['name']}, Contact: {$row['contact_no']}</li>";
        }
    } else {
        echo "<li>No results found.</li>";
    }
} else {
    echo "<li>Search query is required.</li>";
}

$conn->close();
?>
