<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Option</title>


<style>

button{
  background-color: rgb(10,20,200); 
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}

body {
    background-color : yellow;
    background-image:url("bg4.avif");
    background-size: cover;    
}

h1 {
    color: red;
    text-align:center;
}

div{
    display:flex;
    justify-content:space-around;
}

.on{
    font-family:Cursive;
}

.on:hover{
    background-color: rgb(0,0,255);
}

</style>

</head>
<body>
    
<h1><u>Choose Accordingly</u></h1>

<div>
    <button class="on" onclick = "redirectToPage('login.php')">Patient Login</button>
    <button class="on" onclick = "redirectToPage('signup.php')">Patient Sign Up</button> 
</div>
<script>
    function redirectToPage(url) {
        window.location.href = url;
    }
</script>

</body>
</html>