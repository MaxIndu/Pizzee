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
    <link rel="stylesheet" type="text/css" href="../styles/styles-show-pizza-types.css"/>
    <link rel="stylesheet" type="text/css" href="../styles/popups.css"/>
    
    <script type="text/javascript" src="../script/add-product.js"></script>
    <title>INDEX-ADMIN</title>
	<style>
		table{
			/*table-layout: fixed;*/
			width: 900px;
			}
		
	</style>
</head>
    

<body>
    	<div id = "nav">
          	  <div id = "nav_wrapper">
                 <ul>
                    <li><a href = "index-admin.php">HOME</a></li><li>
                    <a href = "#">PIZZA<img src="../images/arrow.fw.png"></a>
                    	<ul>
                            <li><a href="add-product.php">ADD NEW PIZZA TYPE</a></li>
                            <li><a href="#">EDIT/DELETE PIZZA TYPE</a></li> 
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
                            <li><a href="show-users.php">SYSTEM USERS</a></li>
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
        
        	<h3>PIZZA TYPES</h3>
			
        </div>
        
    
    	<div class="content">
        <div class="pop_up" style="text-align:center; color:#093;">
         <?php
			if(!empty($_GET['sucmsg'])) {
				echo $_GET['sucmsg'];
			}
		?>  
        </div>
		
			<form action="delete-pizza.php" enctype="multipart/form-data" method="POST" onsubmit="return confirm('Are you Sure you want to Delete/Update the database?')">
            
				<div class="header_product">
                        <div class="head_pizza_id">
                        	<table class="typing_area" cellspacing="0" style="border-bottom: !important;">
                    <tr style="background-color:#036;">
                    <th>PIZZA ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                    <input type="text" name="pro_pizza_id" style="width: 150px; margin-left:25px; margin-right:25px;"/>
                    <input type="submit" name="submit" value="DELETE" style="width: 150px; margin-left:25px; margin-right:25px;"/>
                    <input type="submit" name="submit" value="UPDATE" style="width: 150px; margin-left:25px; margin-right:25px;"/></th>
                                </tr>
                             </table>
                        </div>
       			</div>
                
            </form>
            
				<table border='0' align=center>
				<tr>
                    <th width=80>Pizza ID</th>
                    <th width=200>Name</th>
                    <th width=100>Unit Price</th>
                    <!--<th width=100>Availability</th>-->
                    <th>Description</th>
                    <th width=100>Image</th>
				</tr>
                <tbody>
                <?php
					$result = mysqli_query($conn,"SELECT * FROM PIZZA_TYPE");
					while($row = mysqli_fetch_array($result))
					{
						echo "<tr>";
						echo "<td align=center>" . $row['PizzaId'] . "</td>";
						echo "<td>" . $row['Name'] . "</td>";
						echo "<td align=center>" . $row['Price'] . "</td>";
						//echo "<td align=center>" . $row['Availability'] . "</td>";
						echo "<td>" . $row['Pizza_Description'] . "</td>";
						echo "<td>" . "<img src='../images/data/products/" . $row['P_img_URL'] . "' height=75px >" . "</td>";
						echo "</tr>";
					}
					mysqli_close($conn);
				?>
                </tbody>
			</table>
    	</div>
        
	</div>
            
        </div>
</body>
</html>