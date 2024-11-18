<?php
if (isset($_POST['submit']))
{
   
    if (isset($_POST['gender']))
    {
        $gender = $_POST['gender']; 
        echo "Gender selected: " . $gender;
    } else
    {
        echo "Please select a gender!";
    }
} else
{
    header('location: genderForm.html');
}
?>
