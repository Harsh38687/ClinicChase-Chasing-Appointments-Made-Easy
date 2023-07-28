<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

    body{
        position:relative;
    }

    .success{
        position:absolute;
        font-weight:bold;
        color: red;
        font-size:50px;        
        margin-left: 11.5em;
        margin-top:0px;        
    }

    span{
        font-family:Cursive;
        background-color:black;
    }
    
    </style>
</head>
<body>
    
</body>
</html>

<?php

$_servername = "localhost";
$_username = "root";
$_password = "";
$_database = "dbharry";

$conn = mysqli_connect($_servername, $_username, $_password, $_database);

if(!$conn)
{
    die ("Connection Failed ". mysqli_connect_error());
}
// else
// {
//     echo '<p class="success"><span>Connection Success</span></p>'."<br><br>";
// }
?>