<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
  
    $servername = "localhost";
    $username = "id21645467_iotuser";		//put your phpmyadmin username.(default is "root")
    $password = "#Project@6";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "id21645467_iotdata";
    $connect = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($connect->connect_error) {
        die("Database Connection failed: " . $connect->connect_error);
    }
    //$connect = mysqli_connect("localhost", "root", "", "testing");
    $sql = "SELECT * FROM students";  
    $result = mysqli_query($connect, $sql);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SBJain E&Tc Program</title>
        <link rel="stylesheet" href="css/signup.css">
        <link rel="icon" type="image/png" href="images/icons/SBJain_logo.png"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->	
    	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row pt-4">
                <div class="col-sm-4">
                    <img src="images/SBJainImg.png" alt="TopImg" class="sbj_img">
                </div>
                <div class="col-sm-7 my-auto text-center text-white">
                    <h1>Sleuth Guide</h1>
                    <h2>Student Attendance Monitoring System</h2>
                </div>
                <div class="col-sm-1 my-auto text-center">
                    <a href="logout.php" class="text-dark h4" style="text-decoration: underline;">Logout</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card" style="border-radius: 2em;">
                        <div class="card-body text-center p-5">
                            <h2 class="card-title text-info">Student Location</h2>
                            <p class="card-text h4 py-3">Real-time location tracking system of student during schooling hours.</p>
                            <a href="listStudentLocation.php" class="btn btn-primary">Click Here!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card" style="border-radius: 2em;">
                        <div class="card-body text-center p-5">
                            <h2 class="card-title text-info">Course Attendance</h2>
                            <p class="card-text h4 py-3">Course wise Attendance Monitoring for Teachers.</p>
                            <a href="courseAttendance.php" class="btn btn-primary">Click Here!</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card" style="border-radius: 2em;">
                        <div class="card-body text-center p-5">
                            <h2 class="card-title text-info">Student Attendance</h2>
                            <p class="card-text h4 pt-3 pb-5">Student wise Attendance Monitoring System.</p>
                            <a href="listStudentAttendance.php" class="btn btn-primary">Click Here!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
