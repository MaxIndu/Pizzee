<?php

	// Start a session for error reporting
	session_start();
	// Call our connection & function file
	require("../connect/connect.php");
	include("../functions/functions.php");

	// Set some constants
	// This variable is the path to the image folder where all the images are going to be stored
	// Note that there is a trailing forward slash
	$TARGET_PATH = "../images/data/products/";
		
	// Get our POSTed variables
	$pname = $_POST['pro_name'];
	$pprice = $_POST['pro_price'];
	$pdescr = $_POST['description'];
	$pimage = $_FILES['product_image'];
	$pid = random_num_gen(10);
	
	// Sanitize our inputs
	$pid =  mysql_real_escape_string($pid);
	$pname = mysql_real_escape_string($pname);
	$pprice = mysql_real_escape_string($pprice);
	$pdescr = mysql_real_escape_string($pdescr);
	$pimage['name'] = mysql_real_escape_string($pimage['name']);
	
	// Define Errors
	$err1 = 
	$err2 = 
	$err3 = 
	$err4 =
	
	// Build our target path full string.  This is where the file will be moved do
	// i.e.  ../images/data/products/picture.jpg
	$TARGET_PATH .= $pimage['name'];
	
	// Make sure all the fields from the form have inputs
	if ($pid == ""|| $pname == "" || $pprice == "")
	{
		header("Location: add-product.php?sucmsg=All fields are required");
		exit;
	}
	
	// Check to make sure that our file is actually an image
	// You check the file type instead of the extension because the extension can easily be faked
	if (!is_valid_type($pimage))
	{
		header("Location: add-product.php?sucmsg=You must upload a jeg,jpeg, gif, or bmp");
		exit;
	}


	// Here we check to see if a file with that name already exists
	// You could get past filename problems by appending a timestamp to the filename and then continuing
	if (file_exists($TARGET_PATH))
	{
		header("Location: add-product.php?sucmsg=A file with that name already exists");
		exit;
	}

	// Lets attempt to move the file from its temporary directory to its new home
	if (move_uploaded_file($pimage['tmp_name'], $TARGET_PATH))
	{
		// NOTE: This is where a lot of people make mistakes.
		// We are *not* putting the image into the database; we are putting a reference to the file's location on the server
		$add = "insert into PIZZA_TYPE (PizzaID,Name,Price,Pizza_Description,P_img_URL) values ('$pid', '$pname','$pprice','$pdescr', '" . $pimage['name'] . "')";
		$result = mysqli_query($conn,$add) or die ("Could not insert data into DB: " . mysqli_error());
		header("Location: add-product.php?sucmsg=New Pizza Type added successfully.");
		exit;
		
		}else{
			
		// A common cause of file moving failures is because of bad permissions on the directory attempting to be written to
		// Make sure you chmod the directory to be writeable
		header("Location: add-product.php?sucmsg=Could not upload file.  Check read/write persmissions on the directory");
		exit;
		
}
?>
