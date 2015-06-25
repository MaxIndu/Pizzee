<?php

	// Start a session for error reporting
	session_start();
	// Call our connection & function file
	require("../connect/connect.php");
	include("../functions/functions.php");
		
	// Get our POSTed variables
	$pizza_id = $_POST['pro_pizza_id'];

	echo $_POST['submit'];
	// Sanitize our inputs
	//$pizza_id =  mysql_real_escape_string($pid);
	
	
	// Make sure all the fields from the form have inputs
	if ($pizza_id == "")
	{
		header('Location: show-pizza-types.php?sucmsg=Enter Pizza ID.');
	}
	else if ($_POST['submit']=="DELETE")
	{
		$query1 = "SELECT * FROM PIZZA_TYPE WHERE PizzaId=".$pizza_id.";";
		$result = mysqli_query($conn,$query1);
		$row = mysqli_fetch_array($result);
		$file = "../images/data/products/" . $row['P_img_URL'];
		unlink($file);
		$query2 = "DELETE FROM PIZZA_TYPE WHERE PizzaId=".$pizza_id.";";
		mysqli_query($conn,$query2);
		
		header('Location: show-pizza-types.php?sucmsg=DELETE Successful.');
	}else{
		$page = "Location: update-product.php?PizzaId=".$pizza_id;
		header($page);
	}
?>
