<?PHP
	include("connect/connect.php");
	include("functions/functions.php");
	
	$username = $_POST['login_username'];
	$password = $_POST['login_password'];
	
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	get_user($conn,$username,$password);

?>