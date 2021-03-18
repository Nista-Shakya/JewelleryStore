<?php
 session_start();
?>

<?php
include_once 'includes/ratedb.php';
?>
<link rel="stylesheet" type="text/css" href="styleFE.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
  #cash
  {
    font-size: 12px;
    margin-left: 50px;
  }

  #cart
  {
    color: white;
  }

  .username-container
{
  float: right;
  color: white;
  margin-left: 345px;
  margin-top: 12px;
  font-size: 19px;
}
</style>

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
 	<li><a href="https://www.facebook.com/newajewellers/" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook-square" aria-hidden="true"></i> FOLLOW US</a></li>
 	<li><a href="checkLogin.php"><i class="fa fa-user" aria-hidden="true"></i> SIGNUP/LOGIN</a></li>
 	<br>
 	<br>
 	<br>
  <li>
  <?php
  if (isset($_SESSION['userId'])) 
  {
    echo '
    <a href="cart.php" class="notification">
    <span id="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp; My Cart</span>';
    if(isset($_SESSION["cnt"]))
     {
      $count=$_SESSION["cnt"];
     echo '<span class="badge">'.$count.'</span></a>';
     }
     else
     {
       echo '<span class="badge">0</span></a>';
     }
    
  }
 	
  ?>
  </li>
  <li>
    <p id="cash">CASH ON DELIVERY &nbsp;<i class="fa fa-truck" aria-hidden="true" style="font-size: 1.5em;"></i></p>
  </li>
</ul>
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
  <li class="username-container"><?php
  if (isset($_SESSION['userId'])) 
    {
     echo "Welcome:&nbsp;" .ucfirst($_SESSION['userUid']) ."&nbsp;<span>&#128591;&#127995;</span>";
    }
   ?>
  </li>
     </ul>
	</div>
<!-- End of Navbar -->