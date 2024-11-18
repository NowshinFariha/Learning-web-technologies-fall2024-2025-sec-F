<?php
if (isset($_POST['submit']))
{
    $day = $_REQUEST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];

    if ($day == null
    || $month == null
    || $year == null)
    {
        echo "Fields cannot be empty!";
    } else
    {
        $isValid = true;

       
        if ($day < 1 || $day > 31)
        {
            $isValid = false;
            echo "Invalid day! Please enter a number between 1 and 31.<br>";
        }

        if ($month < 1 || $month > 12)
        {
            $isValid = false;
            echo "Invalid month! Please enter a number between 1 and 12.<br>";
        }

        if ($year < 2000 || $year > 2024)
        {
            $isValid = false;
            echo "Invalid year! Please enter a number between 1953 and 1998.<br>";
        }


        if ($isValid)
        {
            echo "Date of birth is valid!";
        }
    }
} else
{
    echo "Invalid request!";
}
?>
