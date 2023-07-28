<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image:url('bg3.jpg');
            background-size:cover;
            background_repeat:no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .output-message{            
            text-align:center;
            font-size:20px;
            color: Black;
            padding: 20px;
            background-color:Linen;
            border: 1px solid black;
            border-radius:20px;
            font-weight:bold;
            font-family:Cursive;
        }

    </style>
</head>
<body>    
</body>
</html>

<?php

session_start();

if(isset($_SESSION['pass']))
{
    echo '<div class="output-message">';
    echo "Kindly Wait";
    echo "<br>";
    echo "Redirecting to Appointment Booking Page";
    echo "<br>";    
    echo '</div>';

    // Flush the output buffer
    ob_flush();
    flush();

    // Delay the redirect for a few seconds (adjust as needed)
    sleep(2);

    //The above 3 commands are needed to show the echo statements on screen
    //otherwise the redirect happens so fast that no output is visible on screen

    echo "<script>location.href='book.php'</script>";
}

else
{
    echo '<div class="output-message">';
    echo "Session not set, Login Failed, Wrong Credentials"."<br>";
    echo  "<script>location.href = 'login.php'</script>";
    echo "<br><br>";
    echo '</div>';
}
?>

