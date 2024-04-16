<?php
    	define("database","Registry_Department");
    	define("user","----"); #add user if necessary
    	define("password","----"); #add password if necessary
	
	$connection=mysqli_connect('localhost',user,password,database) or die('Error connecting to MYSQL');
