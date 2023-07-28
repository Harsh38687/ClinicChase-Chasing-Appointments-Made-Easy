<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            background-image:url('bg2.jpg');
            background-size:cover;
            background_repeat:no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction:column;
            
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

include("conn.php");
$email = $_POST['email'];
$pass = md5($_POST['pass']);

$query = "SELECT * FROM login WHERE email = '$email' AND password = '$pass' ";


$result = mysqli_query($conn, $query);

// Check if any row is returned
if(mysqli_num_rows($result) > 0){
    // The username and password exist in the database
    
    echo '<div class="output-message">';
    echo "Username and Password match" ."<br>";

    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    $_SESSION['id'] = $id;
    // echo "ID =".$id."<br>";

    $_SESSION['pass'] = "Login Success";
    echo "Session Set". "<br>". $_SESSION['pass'];
    echo '</div>';
    

    // Flush the output buffer
    ob_flush();
    flush();

    // Delay the redirect for a few seconds (adjust as needed)
    sleep(3);

    //The above 3 commands are needed to show the echo statements on screen
    //otherwise the redirect happens so fast that no output is visible on screen

    echo "<script>location.href='save3.php'</script>";

}
else {
    // No matching username and password found
    echo '<div class="output-message">';
    echo "Invalid Username or Password.";
    echo '</div>';
}

$_SESSION['email'] = $email;
$_SESSION['pass'] = $pass;

?>

