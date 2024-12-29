<?php
    session_start();
    if
   (isset($_COOKIE['flag'])){
 $student = [
        [ 'Name'=>'abc', 'Id'=>1,'password'=>'123', 'confirm password'=>123],
        ['Name'=>'xyz', 'Id'=>2,'password'=>'123', 'confirm password'=>123],
        [ 'Name'=>'abcd','Id'=>3, 'password'=>'123', 'confirm password'=>123],
        [ 'Name'=>'wxyz', 'Id'=>4,'password'=>'123', 'confirm password'=>123]
    ];
?>

<html lang="en">
<head>
    <title>Student</title>
</head>
<body>
        <h2>Student </h2>
        <a href=" ../view/home.php">Back</a> |
        <a href=" ../controller/logout.php">logout</a>

        <table border=1> 
            <tr>
                <th>Name</th>
                <th>Id</th>
                <th>password</th>
                <th>edit or delete</th>
            </tr>
            <?php 
                    for($i=0; $i< count($student); $i++){
            ?>
            <tr>
                <td><?php echo $student[$i]['Name']; ?></td>
                <td><?php echo $student[$i]['Id']; ?></td>
                <td><?php echo $student[$i]['password']; ?></td>
               
            
                <td>
                    <a href=' ../view/edit.php?id=<?=$student[$i]['Id']?>'> EDIT </a> |
                    <a href=' ../view/delete.php'> DELETE </a> 
                </td>
            </tr>

            <?php } ?>
        </table>
</body>
</html>

<?php
    }else{
        header('location:  ../view/login.html'); 
    }
?>