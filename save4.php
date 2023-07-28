<?php
session_start();

include 'conn.php';

if (isset($_POST['spec']) && !empty($_POST['spec'])) {
    $_SESSION['spec'] = $_POST['spec'];
}

if (isset($_POST['doctor']) && !empty($_POST['doctor'])) {
    $_SESSION['doctor'] = $_POST['doctor'];
}


$patient_id = $_SESSION['id'];
$specialist = $_SESSION['spec'];
$name = $_SESSION['doctor'];
$date = $_POST['dt'];




$desiredDate = $_POST['dt'];

$query = "SELECT COUNT(*) AS num_appointments FROM appointment
          WHERE date = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $desiredDate);
$stmt->execute();
$stmt->bind_result($num_appointments);
$stmt->fetch();
$stmt->close();

if($num_appointments>=5)
{
     echo "Slots_Full"."<br>"."Choose another date";

     // Flush the output buffer
    ob_flush();
    flush();

    // Delay the redirect for a few seconds (adjust as needed)
    sleep(3);

    //The above 3 commands are needed to show the echo statements on screen
    //otherwise the redirect happens so fast that no output is visible on screen
    echo "<script>location.href='book.php'</script>";
    // header("Location:book.php?error=slots_full");
    exit();
}
else 
{
    $sql = "INSERT INTO appointment (`patient_id` , `specialist`,`name` , `date`)
    VALUES (?,?,?,?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $patient_id, $specialist, $name, $date);
    $result = $stmt->execute();
    $stmt->close();

    if($result)
    {
    echo "Successfull Insertion"."<br><br>";
    }
    else
    {
    echo "Insertion Failed". mysqli_error($conn)."<br><br>";
    }
 }

 
 $conn->close();
 ?>