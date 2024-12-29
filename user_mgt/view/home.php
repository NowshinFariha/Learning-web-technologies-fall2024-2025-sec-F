<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome Home! <?php echo $_SESSION['Name']?></h1>
        <a href="userlist.php">View All students</a> |
        <a href="../controller/logout.php">logout</a>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>