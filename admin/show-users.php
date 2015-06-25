<?php
	session_start();
	include("../connect/connect.php");
	include("../functions/functions.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="../styles/styles-nav.css"/>
    <link rel="stylesheet" type="text/css" href="../styles/styles-add-product.css"/>
    <link rel="stylesheet" type="text/css" href="../styles/style-tables.css"/>
    
    <script type="text/javascript" src="../script/add-product.js"></script>
    <title>INDEX-ADMIN</title>

</head>

<body>
    	<div id = "nav">
          	  <div id = "nav_wrapper">
                 <ul>
                    <li><a href = "index-admin.php">HOME</a></li><li>
                    <a href = "#">PIZZA<img src="../images/arrow.fw.png"></a>
                    	<ul>
                            <li><a href="add-product.php">ADD NEW PIZZA TYPE</a></li>
                            <li><a href="show-pizza-types.php">EDIT/DELETE PIZZA TYPE</a></li> 
                        </ul>
                     </li>
                    <li>
                    <a href = "#"> STOCKS<img src="../images/arrow.fw.png"></a>
                       	 <ul>
                            <li><a href="#">ADD NEW STOCK</a></li>
                            <li><a href="#">EDIT/DELETE EXISTING STOCK</a></li> 
                        </ul> 
                    </li>
                    <li>
                    <a href = "#"> PEOPLE<img src="../images/arrow.fw.png"></a>
                    	<ul>
                            <li><a href="#">SYSTEM USERS</a></li>
                            <li><a href="#">SUPPLIERS</a></li> 
                            <li><a href="#">DELIVERES</a></li>
                            <li><a href="#">CUSTOMERS</a></li>
                        </ul>
                      </li>
                    <li><a href = "../about.php"> ABOUT PIZZEE</a></li>
                    <li><a href = "../logout.php"> LOGOUT</a></li>
                </ul>
            </div>
   		</div>
        
<div class="wrapper_main">
        
<div class="wrap_overall">
    	<div class="header">
        
        	<h3><span class="inner_shadow">USER MANAGEMENT</span></h3>
        
        </div>
    
    	<div class="content">
        
        <div class="users">
        
			<table class="table-fill" border="0px" align="center">
                <tr>
                    <th width=80>UserName</th>
                    <th>UserId</th>
                    <th>Password</th>
                    <th>UserType</th>
                </tr>
                    
				<tbody>
					<?php
                        $result = mysqli_query($conn,"SELECT * FROM SYSTEM_USERS");
                        while($row = mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                                echo "<td>" . $row['UserName'] . "</td>";
                                echo "<td>" . $row['UserId'] . "</td>";
                                echo "<td>" . $row['Password'] . "</td>";
                                echo "<td>" . $row['UserType'] . "</td>";
                            echo "</tr>";
                        }
                        mysqli_close($conn);
                    ?>
              	</tbody>
           </table>
           
    	</div>
		</div>
</div>
</div>
</body>
</html>