<?php
if (isset($_POST['submit']))
{
    $email = $_POST['email'];

    if ($email == null || $email == "")
    {
        echo "Email cannot be empty!";
    } else
    {
        
        $atIndex = -1;
        $dotIndex = -1;
        $isValid = true;

        
        for ($i = 0; $i < strlen($email); $i++)
        {
            if ($email[$i] == '@')
            {
                if ($atIndex != -1)
                { 
                    $isValid = false;
                    break;
                }
                $atIndex = $i;
            }
            if ($email[$i] == '.' && $atIndex != -1)
            {
                $dotIndex = $i; 
            }
        }

        
        if ($atIndex < 1
        || $dotIndex <= $atIndex + 1
        || $dotIndex == strlen($email) - 1)
        {
            $isValid = false;
        }

        if ($isValid)
        {
            echo "Valid email address!";
        } else
        {
            echo "Invalid email format!";
        }
    }
} else
{
    echo "Invalid request!";
}
?>
