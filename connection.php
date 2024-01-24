<?php

	//Defining Variables
	$servername = "localhost";
    $username = "id21645467_iotuser";		//put your phpmyadmin username.(default is "root")
    $password = "#Project@6";			//if your phpmyadmin has a password put it here.(default is "root")
    $dbname = "id21645467_iotdata";
    
	//Database connection
	if(!$con = new mysqli($servername, $username, $password, $dbname)){
		die("Failed to connect!");
	}
?>