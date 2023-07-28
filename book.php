<?php
session_start();
include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Booking</title>

    <style>
        body {                        
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
            background-color: rgba(70,122,30,0.5);
            min-height: 100vh;
            background-image:url("bg7.avif");
            background-repeat:no-repeat;
            background-size:cover;
        }

        .success{    
            font-family:Cursive;       
            position: fixed;
            top:0;
            left:0.2em;            
            width:100%;
        }
        
        span{
            background-color:AliceBlue;
        }

        fieldset {
            background-color: #eeeeee;
            margin-bottom: 10px;
        }

        legend {
            background-color: gray;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="radio"] {
            margin-right: 7px;
        }

        input[type="text"],
        input[type="date"],
        input[type="email"],
        input[type="number"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
            background-color: #E0FFFF;
            border-radius: 5px;
           
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 100%;
        }

        div{
            display:flex;
            flex-direction:column;
        }

        .one{
            padding: 30px;
        }

        .flex-item{
            flex:1;
            width:700px;
            height:800px;
        }        

    </style>

</head>

<?php

$query = 'select * from domain order by specialization ASC';
$res = $conn->query($query);

?>


<body>
    <div>

        <form class="one flex-item" action="save4.php"  method="post">
              <!-- Specialization dropdown -->
            <select id="spec" name="spec" required>
                <option value="hello">Select Specialization</option>
                
                <?php
            // print_r($res); die;
            if ($res->num_rows > 0) {
                while ($row = $res->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . $row['specialization'] . '</option>';
                }
            } else {
                echo '<option value="">Specialization not available</option>';
            }
            ?>
        </select>
        
        <!-- Doctor dropdown -->
        <select id="doctor" name="doctor" required>
            <option value="">Select Specialization First</option>          
        </select>

        

<label for="dt">Date Of Appointment</label>
<input type="date" id="dt" name="dt" required><br><br>

<label for="appt">Select a time:</label>
<input type="time" id="appt" name="appt"><br><br>

<input type="submit" value="Book Slot">

</form>
<br><br><br>


<form class="one flex-item" action="login.php">
    <input type="submit" value="Logout">
</form>
</div>

</body>

</html>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

        $('#spec').on('change', function() {

            var id = $(this).val();
             console.log(id);
            if (id) {
                $.ajax({
                    type: 'POST',
                    url: 'doctb.php',
                    data: 'spec_id=' + id,
                    success: function(html) {
                        $('#doctor').html(html);
                    }
                });
            }
        });

    });
</script>