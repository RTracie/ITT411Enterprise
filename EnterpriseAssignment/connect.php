<?php
    define("database","Registry_Department");
    define("user","root"); #add user if necessary
    define("password","1234"); #add password if necessary
	
	$connection=mysqli_connect('localhost',user,password,database) or die('Error connecting to MYSQL');

