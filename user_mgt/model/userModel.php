<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
        return $con;
    }

    function login($Name, $password){
        $con = getConnection();
        $sql = "select * from student where Name='{$Name}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count =  mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
    }

    function addstudent($Name, $Id, $password, $confirmpassword){
        $con = getConnection();
        $sql = "INSERT INTO student VALUES ( '{$Name}', '{$Id}', '{$password}', '{$confirmpassword}')";        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getstudent($Id){
        $con = getConnection();
        $sql = "SELECT * FROM student WHERE Id='{$Id}'";
        $result = mysqli_query($con, $sql);
        $student = mysqli_fetch_assoc($result);

        if($student){
            return $student;
        }else{
            return null;
        }
    }

    function getAllstudent(){
        $con = getConnection();
        $sql = "SELECT * FROM student";
        $result = mysqli_query($con, $sql);
        $students = [];

        while($row = mysqli_fetch_assoc($result)){
            $students[] = $row;
        }

        return $students;
    }

    function updatestudent($student){
        $con = getConnection();
        $sql = "UPDATE student SET Name='{$student['Name']}', password='{$student['password']}', confirmpassword='{$student['confirmpassword']}' WHERE Id='{$student['Id']}'";

        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deletestudent($Id){
        $con = getConnection();
        $sql = "DELETE FROM student WHERE Id='{$Id}'";

        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }
?>
