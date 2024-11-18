<?php

if (isset($_POST['submit']))
{
    $name = $_POST['name'];

    
    if ($name == null)
    {
        echo "Name cannot be empty!";
    } else
    {
        $isValid = true;

        $words = explode(' ', $name); 
        if (count($words) < 2)
        {
            $isValid = false;
            echo "Name must contain at least two words!<br>";
        }

        $firstChar = $name[0];
        if (!(($firstChar >= 'a' && $firstChar <= 'z')
        || ($firstChar >= 'A' && $firstChar <= 'Z')))
        {
            $isValid = false;
            echo "Name must start with a letter!<br>";
        }

        for ($i = 0; $i < strlen($name); $i++)
        {
            $char = $name[$i];
            if (!(($char >= 'a' && $char <= 'z')
            || ($char >= 'A' && $char <= 'Z')
            || $char == '.'
            || $char == '-'
            || $char == ' '))
            {
                $isValid = false;
                echo "Name can only contain letters, periods, dashes, and spaces!<br>";
                break;
            }
        }

        if ($isValid)
        {
            echo "Name is valid!";
        }
    }
} else
{
    echo "Invalid request!";
}
?>
