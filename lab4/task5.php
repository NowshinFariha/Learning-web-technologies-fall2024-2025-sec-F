<?php
if (isset($_POST['submit'])) {
  
    if (isset($_POST['degree']))
    {
        $degrees = $_POST['degree']; 
        
        $count = 0;
        foreach ($degrees as $degree)
        {
            $count++;
        }

        if ($count >= 2)
        {
            echo "Form submitted successfully! You selected: ";
            foreach ($degrees as $degree)
            {
                echo $degree . " ";
            }
        } else
        {
            echo "Error: Please select at least two degrees!";
        }
    } else
    {
        echo "Error: No degree selected!";
    }
} else
{
    header('location: degreeForm.html');
}
?>
