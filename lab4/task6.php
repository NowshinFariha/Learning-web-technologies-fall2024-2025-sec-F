<?php
    if(isset($_POST['submit']))
    {
        $blood_group = $_POST['blood_group'];

      
        if($blood_group == "")
        {
            echo "Please select a blood group!";
        } else
        {
            echo "Your selected blood group is: " . $blood_group;
        }
    } else
    {
        header('location: bloodGroupForm.html');
    }
?>
