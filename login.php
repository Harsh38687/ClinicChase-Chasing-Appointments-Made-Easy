<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>

    body{
        font-family: Arial, sans-serif;
        background-color: rgb(60,60,60);
        display: flex;
        justify-content:center;
        align-items:center;
        min-height: 100vh;
        background-image:url("bg3.jpg");
        background-repeat:none;
        background-size:cover;
    }

    form{
        background-color: rgb(0,191,255);
        border-radius: 5px;
        padding: 30px;
        box-shadow:0 2px 4px rgba(0,0,0,0.1);
        width:70%;
        max-width: 100%;  
        display:flex;    
        justify-content:center;
        align-items:center;
        position: relative;
    }

    label{
        display:block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="email"], 
    input[type="password"]{
        width:100%;
        padding: 10px;
        border: 1px solid black;
        border-radius: 4px;
        margin-bottom: 15px;
        font-size:16px;
    }

    input[type="submit"]{
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    input[type="submit"]:hover{
        background-color: #45a049;
    }

fieldset{
    background-color: #eeeeee;
    margin-bottom: 15px;
    border: none;

    position: absolute;
    top:20px;
    left:10px;
    right:10px;
    bottom:20px;
}

legend {
    background-color: gray;
    color: white;
    padding: 15px 20px;
    border-radius: 4px;
    font-size:20px;
}

.flex-container{
display:flex;
width:65vw;
height:85vh;
background-color:white;
}

.flex-item{
    flex:1;
}

.one{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
}


</style>


<body>
    <div class="flex-container"> 

        <img class="flex-item" src="Login.png" alt="Login to your Account">
        
        <form class="flex-item" action="save2.php" method="post" enctype = "multipart/form-data">
            <fieldset class="one">
                <legend >Login Credentials</legend><br>
                <label  for="email">Email</label>
                <input  type="email" name="email" id="email" required><br><br>
                
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" required><br><br>
                
                
                <input type="submit" value="Sign In"><br>
            </fieldset>
        </form>
    </body>
</div>
    </html>

    
