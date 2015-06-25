<?php
/*------------------------------------------------------------------------------------*/
/*-------------------- Author: Darshana W.T. (E/11/067)-------------------------------*/
/*------------------------------------------------------------------------------------*/

/*---------------------------DATA FOR CONNECTION(Change this)-------------------------*/

		$host = "localhost";		// Host name
		$user = "root";				// User name
		$password = "7432629";		// User Password
		$database = "PIZZEE";		// Database name
		
/*------------------------------------------------------------------------------------*/	

$errors = "<h2>ERROR: CANNOT ESTABLISH CONNECTION</h2><br>
					There is problem with connection.<br>
					Check wether your 
					<strong>HOSTNAME, USERNAME, PASSWORD, DATABASE NAME</strong> are correct.<br>";
/* Database connection ($conn)*/
    	/*$conn=mysql_connect($host,$user,$password) or die('Error');
    	mysql_select_db($database,$conn) or die($errors);*/
	
/* Database connection USING mysqli connection*/
		// host (or location of the database), username, password,database name .
		$conn = @mysqli_connect($host,$user,$password,$database) or die($errors);
?>