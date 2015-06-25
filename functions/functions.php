<?PHP

function get_user($conn,$user,$pwd){
		
			$que = "SELECT username,password,usertype FROM system_users WHERE username='$user'";
			$res = mysqli_query($conn,$que) or die( mysqli_error($conn));
			$one_user = mysqli_fetch_array($res);
			
			if ( $one_user["password"] != $pwd){
					header("Location: login.php");
				}
			else{
		
				if($one_user["usertype"] == 'admin'){
						$_SESSION['login_user']=$user;
						header("Location: admin/index-admin.php");
					}
				else if($one_user["usertype"] == 'system_user'){
						$_SESSION['login_user']=$user;
						header("Location: user/index-user.php");
					}
				else{
						// if there is anything else in that field	
					}
					
			}
		mysqli_close($conn);
}


// Check wether image is a valid type 	
function is_valid_type($file)
	{
		// This is an array that holds all the valid image MIME types
		$valid_types = array( "image/jpg", "image/jpeg", "image/bmp", "image/gif" , "image/jpg" );
		if (in_array($file['type'], $valid_types)){
			return 1;
		}else{
		return 0;
		}
	}
	
// GENERATE RANDOM NUMBERS
// calling : random_num_gen(15); 
// random string with 15 units

function random_num_gen($j = 8){
    $string = "";
    for($i=0; $i < $j; $i++){
        $x = mt_rand(0, 2);
        switch($x){
            case 0: $string.= chr(mt_rand(97,122));break;
            case 1: $string.= chr(mt_rand(65,90));break;
            case 2: $string.= chr(mt_rand(48,57));break;
        }
    }
    return $string; 
}


// Just a short function that prints out the contents of an array in a manner that's easy to read
// I used this function during debugging but it serves no purpose at run time for this example
function showContents($array)
	{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}



?>