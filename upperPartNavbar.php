<?php
 session_start();
?>

<?php
include_once 'includes/ratedb.php';
?>
<link rel="stylesheet" type="text/css" href="styleFE.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Top part -->
<div class="container">
<div class="left"><a href="index.php"><img src="Images/logo - Copy.png" id="logo"></a></div>
<div class="center"><h1 id="head">Today's Rate</h1>
	<p id="rateDisplay">
	<?php
      $sql="SELECT * FROM rate;";
      $result= mysqli_query($conn, $sql);
      $resultCheck= mysqli_num_rows($result);

      if ($resultCheck>0) {
      	while ($row= mysqli_fetch_assoc($result)) 
      	{
      	   
      	   echo $row['ELEMENTS']." ".": ";
      	   echo "NPR"."&nbsp".$row['RATE']."/Tola"."<br>";   
      	}
       }    
   ?>
 </p>
 </div>
 <div class="right">
 	<ul>
 	<li><a href="about.php">ABOUT US</a></li>
 	<li><a href="https://www.facebook.com/newajewellers/" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook-square" aria-hidden="true"></i> FOLLOW US</a><li>
 	<li><a href="checkLogin.php"><i class="fa fa-user" aria-hidden="true"></i> SIGNUP/LOGIN</a></li>
 	<br>
 	<br>
 	<br>
  <?php
  if (isset($_SESSION['userId'])) 
  {
    echo '
    <a href="cart.php" class="notification">
    <span><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp; My Cart</span>';
    if(isset($_SESSION["cart"]))
     {
      $count=count($_SESSION["cart"]);
     echo '<span class="badge">'.$count.'</span></a>';
     }
     else
     {
       echo '<span class="badge">0</span></a>';
     }
    
  }
 	
  ?>
 </div>
</div>
<!-- End of Top part -->

<!-- Navbar -->
<div id="navbar">
	<ul>
	<li class="<?php if($page=='earring'){echo 'active';}?>"><a href="earring.php">EARRING</a></li>
	<li class="<?php if($page=='ring'){echo 'active';}?>"><a href="ring.php">RING</a></li>
	<li class="<?php if($page=='necklace'){echo 'active';}?>"><a href="necklace.php">NECKLACE</a></li>
	<li class="<?php if($page=='pendent'){echo 'active';}?>"><a href="pendent.php">PENDENT</a></li>
	<li class="<?php if($page=='bangle'){echo 'active';}?>"><a href="bangle.php">BANGLE/BRACELET</a></li>
	<li class="<?php if($page=='contact'){echo 'active';}?>"><a href="contact.php">CONTACT US</a></li>
	<div class="search-container">
     	<form action="#">
     		 <li><input type="text" placeholder="Search.." name="search">
     		 <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button></li>
     		</form>
     	</div> 
     </ul>
	</div>
<!-- End of Navbar -->