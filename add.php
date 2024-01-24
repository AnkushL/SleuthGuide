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
$lon = $_GET['lon'];
$lat = $_GET['lat'];
$date=date("Y-m-d h:i:s");
$sql = "INSERT INTO iottable SET time = '$date'";
$sql = "INSERT INTO iottable (time,lon,lat) VALUES ('$date',$lon,$lat);";
if ($conn->query($sql) === TRUE) {
    echo "Saved Successfully!";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}

$conn->close();
?>