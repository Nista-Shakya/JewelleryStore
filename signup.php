<?php
  include 'upperPartNavbar.php';
?>

<link rel="stylesheet" type="text/css" href="loginStyle.css">
	<div class="signup">
		 <div class="signup-login">
			<h1 id="head-signup">Signup</h1>
			<?php
			if (isset($_GET['error'])) 
			{
				if($_GET['error']=="emptyfields")
				{
					echo '<p class="signuperror">Fill in all fields!</p>';
				}
				else if ($_GET['error']=="invaliduidmail") 
				{
					echo '<p class="signuperror">Invalid username and e-mail!</p>';
				}
				else if ($_GET['error']=="invaliduid") 
				{
					echo '<p class="signuperror">Invalid username!</p>';
				}
				else if ($_GET['error']=="invalidmail") 
				{
					echo '<p class="signuperror">Invalid  e-mail!</p>';
				}
				else if ($_GET['error']=="passwordcheck") 
				{
					echo '<p class="signuperror">Your passwords do not match!</p>';
				}
				else if ($_GET['error']=="usertaken") 
				{
					echo '<p class="signuperror">Username is already taken!</p>';
				}
			}
				else if (isset($_GET['signup'])=="success")
				{
					echo '<p class="signupsuccess">Signup Successful!</p>';
				}
		

			?>
			<div class="signup-form">
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username"><br>
				<input type="text" name="mail" placeholder="Email"><br>
				<input type="password" name="pwd" placeholder="Password"><br>
				<input type="password" name="pwd-repeat" placeholder="Repeat Password"><br>
				<button type="submit" name="signup-submit">Signup</button>
			</form>
		</div>
	</div>
</div>