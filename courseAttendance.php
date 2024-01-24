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
            <div class="container">
                <h3 class="text-center m-4">List of Courses - 4th Year</h3>
                <div class="table-responsive pt-4">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-info text-center">
                                <th scope="col">Sr no</th>
                                <th scope="col">Course Name</th>
                                <th scope="col">Course Code</th>
                                <th scope="col">Course Incharge Name</th>
                                <th scope="col">Attendance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Data Encryption and Decryption</td>
                                <td>PECET702T</td>
                                <td>Prof. Snehal Sahastrabudhey</td>
                                <td><a href="sub1/index.php" class="btn btn-primary">Click here</a></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Robotics</td>
                                <td>PECET703T</td>
                                <td>Prof. Chaitali Darode</td>
                                <td><a href="sub2/index.php" class="btn btn-primary">Click here</a></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Bio-Medical Electronics</td>
                                <td>PECET705T</td>
                                <td>Prof. Parag Puranik</td>
                                <td><a href="#" class="btn btn-primary">Click here</a></td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Antennas and Wave Propagation</td>
                                <td>PECET706T</td>
                                <td>Prof. Sagar Pradhan</td>
                                <td><a href="#" class="btn btn-primary">Click here</a></td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Micro-Electro Mechanical System (MEMS)</td>
                                <td>PECET707T</td>
                                <td>Dr. Vicky Butram</td>
                                <td><a href="#" class="btn btn-primary">Click here</a></td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Machine Learning</td>
                                <td>PECET708T</td>
                                <td>Prof. Mayur Tembhurney</td>
                                <td><a href="#" class="btn btn-primary">Click here</a></td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>Satellite Communication</td>
                                <td>PECET711T</td>
                                <td>Prof. Nitin Khadane</td>
                                <td><a href="#" class="btn btn-primary">Click here</a></td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>Wireless and Mobile Communication</td>
                                <td>PECET712T</td>
                                <td>Prof. Ayushi jaiswal</td>
                                <td><a href="#" class="btn btn-primary">Click here</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </body>
</html>