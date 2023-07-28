<?php

include_once 'conn.php'; 
//  print_r($_POST); 
//  die();
if(!empty($_POST["spec_id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM doctor WHERE specificid = ".$_POST['spec_id']." ORDER BY name ASC"; 
    $result = $conn->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select Doctor</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">Doctor not available</option>'; 
    } 

}
?>