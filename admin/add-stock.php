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
        
        	<h3>ADD NEW STOCK</h3>
        
        </div>
    
    	<div class="content">
            <form action="upload-product.php" enctype="multipart/form-data" method="POST">
                <table width="90%" border="0" cellspacing="10" cellpadding="3">
                  <tr>
                    <td class="row_head">NAME&nbsp;&nbsp;&nbsp;:</td>
                    <td><input type="text" name="pro_name" style="width: 420px;"/></td>
                  </tr>
                  <tr style="width:180px;">
                    <td class="row_head">Image&nbsp;&nbsp;&nbsp;:</td>
                    <td ><input type="file" name="product_image" accept="image/*"  onchange="showMyImage(this)" /><br/>
                    <img id="thumbnil" style="width:20%; margin-top:10px;"  src="../images/no_image.jpg"/>
                    </td>
                  </tr>
                  <tr>
                    <td class="row_head">PRICE&nbsp;&nbsp;&nbsp;:</td>
                    <td><input type="text" name="pro_price" /> &nbsp;&nbsp; Rs.</td>
                  </tr>
                  <tr>
                    <td class="row_head">DESCRIPTION&nbsp;&nbsp;&nbsp;:</td>
                    <td><textarea id="description" name="description" style="width: 300px; height: 100px;">Your content here.</textarea></td>
                  </tr>
                  <tr>
                  	<td>
                    	
                    </td>
                    <td>
                    <input type="submit" name="submit" value="ADD TO DATABASE" />
                    </td>
                  </tr>
                </table>
            </form>
    	</div>
	</div>
            
        </div>
</body>
</html>