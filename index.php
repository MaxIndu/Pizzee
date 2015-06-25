<?php

	session_start();
	// Check database Connection
	include("connect/connect.php");
	mysqli_close($conn);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>PIZZEE-LOGIN</title>
        <link a href="styles/styles-login.css" type="text/css" rel="stylesheet" />
    </head>

    <body>

        <div class="wrap"> 
            <div class="palette">
                
                    <div class="header bg1">
                        <h4>PIZZEE-LOGIN</h4>
                    </div>
                
                    <div class="img">
                        <img src="images/login/pizza-welcome.jpg" alt="" width="360">
                    </div>

                	<div class="content">
                    
                        <form action="redirect.php" method="POST"/>
                        
                            <table width="98%" border="0" cellspacing="10" cellpadding="3">
                              <tr>
                            <td>USERNAME</td>
                            <td><input type="text" name="login_username" placeholder="Your Username" required="required" /></td>
                              </tr>
                              <tr>
                            <td>PASSWORD</td>
                            <td><input type="password" name="login_password" placeholder="Your Password" required="required" autocomplete="off"/></td>
                              </tr>
                            </table>
                            
                            <div class="clear"></div>
                            
                            <div class="login">
                                <a><input class="button" type="submit" value="LOGIN"/></a>
                            </div>
                        </form>
					</div>
              </div>
        </div>
    </body>

</html>