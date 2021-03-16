<?php
 include 'upperPartNavbar.php';
?>
<link rel="stylesheet" type="text/css" href="loginStyle.css">
<div class="header-login">
   <div class="signup-login">
      <?php
         if (isset($_GET['error'])) 
         {
            if($_GET['error']=="emptyfields")
            {
               echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET['error']=="sqlerror") 
            {
               echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
   
            else if ($_GET['error']=="nouser") 
            {
               echo '<p class="signuperror">No User Found!</p>';
            }
            else if ($_GET['error']=="wrongpwd") 
            {
               echo '<p class="signuperror">The Password is incorrect</p>';
            }
         }
         ?>




   <?php
   if (isset($_SESSION['userId'])) 
   {
   	echo '<form action="includes/logout.inc.php" method="post">
	<button type="submit" name="logout-submit">Logout</button></form>';
   
   }
   else
   {
   	
      echo '<h1 id="head-login">Login</h1>';
      echo '<form action="includes/login.inc.php" method="post">
	<input type="text" name="mailuid" placeholder="Username/Email..."><br>
	<input type="password" name="pwd" placeholder="Password..."><br>
	<button type="submit" name="login-submit">Login</button><br>	
	</form>
	<a href="signup.php">Signup</a>';
   }
 ?>
</div>
</div>