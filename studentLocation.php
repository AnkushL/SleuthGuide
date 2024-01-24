<?php
    $servername = "localhost";
    $username = "id21645467_iotuser";		//put your phpmyadmin username.(default is "root")
    $password = "#Project@6";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "id21645467_iotdata";
    $connect = mysqli_connect($servername, $username, $password, $dbname);
	
	if ($connect->connect_error) {
        die("Database Connection failed: " . $connect->connect_error);
    }
    //$connect = mysqli_connect("localhost", "root", "", "testing");
    $sql = "SELECT * FROM iottable";  
    $result = mysqli_query($connect, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>List of Students SBJain</title>
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
                    <h2>Student Attandence Monitoring System</h2>
                </div>
                <div class="col-sm-1 my-auto text-center">
                    <a href="logout.php" class="text-dark h4" style="text-decoration: underline;">Logout</a>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="table-responsive pt-4">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table-info text-center">
                                <th scope="col">DATE / TIME</th>
                                <th scope="col">LONGITUDE</th>
                                <th scope="col">LATITUDE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row = mysqli_fetch_array($result)){  
                                    echo '  
                                        <tr>  
                                            <td>'.$row["time"].'</td>  
                                            <td>'.$row["lon"].'</td>  
                                            <td>'.$row["lat"].'</td>
                                        </tr>  
                                    ';  
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </body>
</html>