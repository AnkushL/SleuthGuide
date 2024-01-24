<?php
date_default_timezone_set('Asia/Kolkata');
$servername = "localhost";
    $username = "id21645467_iotuser";		//put your phpmyadmin username.(default is "root")
    $password = "#Project@6";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "id21645467_iotdata";
// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id = $_GET['id'];
$date=date("Y-m-d h:i:s");
$sql = "INSERT INTO subject1 SET time = '$date'";
$sql = "INSERT INTO subject1 (time,rollnum) VALUES ('$date',$id);";
if ($conn->query($sql) === TRUE) {
    echo "Saved Successfully!";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>