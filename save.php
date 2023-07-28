<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirecting</title>
<style>
    body{
        background-image:url("bg5.avif");
        background-size: cover;
        background-repeat: no-repeat;
    }

    .pass{
        font-family:Cursive;
        font-weight:bold;
        color: DarkGreen;
        font-size:50px;
        margin-top: 6.5em;
        margin-left: 11.5em;        
}

span{
    background-color:black;
}

.error{
    font-family:Cursive;
    color: red;
    font-weight:bold;
    font-size:50px;
    margin-top: 6.5em;
    margin-left: 11.5em;
}
    

</style>

</head>
<body>
    
</body>
</html>

<?php

include("conn.php");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$email = $_POST['email'];
$birthday = $_POST['birthday'];
$number = $_POST['number'];
$pass = md5($_POST['pass']);

$sql = "INSERT INTO login (`fname` , `lname`,`gender` , `country`,`email` , `dob`,`mobile` , `password`)
        VALUES ('$fname', '$lname','$gender', '$country','$email', '$birthday','$number', '$pass')";
        
$result = mysqli_query($conn, $sql);


if($result)
{
    echo '<p class="pass"><span>Successfull Insertion</span></p>'."<br><br>";
}
else
{
    echo '<p class="error">Insertion Failed'. mysqli_error($conn).'</p>'."<br><br>";
}
?>