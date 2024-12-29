<?php
    session_start();
    if(isset($_COOKIE['flag'])){

        if(isset($_REQUEST['id'])){
            echo $_REQUEST['id'];
        }
        
?>

<html>
<head>
    <title>Signup</title>
</head>
<body>
        <h2> Edit student </h2>
        <form method="post" action="update.php" enctype="">
             
        Name: <input type="text" name="Name" value="" /> <br>
            Id: <input type="text" name="Id" value="" /> <br>
            Password: <input type="password" name="password" value="" /> <br>
            confirm password: <input type="password" name="confirmpassword" value="" /> <br>
                    <input type="submit" name="submit" value="Update" />
        </form>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>