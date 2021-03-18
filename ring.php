
<link rel="stylesheet" type="text/css" href="card.css">

<?php

  $page='ring';
  include 'upperPartNavbar.php';
?>
<?php
include_once 'includes/ratedb.php';
?>
<h1 class="heading">Ring</h1>
   
   		<!--	<img src="ProductImages/Earring/E1.jpg" width="255px" height="140px">
   			<h1>Product1</h1>-->
 
   <!-- </form>-->
   <div class="row">
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'product');
//
//if ($con) {
//	echo "connection successful";
//}
//else
//{
//	echo "no connection";
//}
$query="SELECT `Id`,`Image`, `Name`, `Price`, `Details` FROM `ring` ORDER BY id ASC ";
$queryfire=mysqli_query($con, $query);

$num=mysqli_num_rows($queryfire);
$id=0;
if ($num>0) {
	while ($product1=mysqli_fetch_array($queryfire)) {
		
		?>
    	
		<form action="" method="post">
			
	     <div class="column">
			<div class="card"> 
        <div class="card-body">
                
        	<img src="<?php echo
        	 $product1['Image'];?>" alt="ring" width="300px" height="250px">
        	 
        	 <p class="text">
        	 <?php 
        	echo $product1['Name'];
        	?>
            </p>
            <p class="text">
        	 <?php 
        	echo "NPR"."&nbsp" .$product1['Price'];
        	?>
            </p>
              <p class="text">
            
            <button type="submit" class="view4"> <a href="rview.php?ab=<?php echo $product1['Image'] ?>">View</a></button>
          
            </p>
            <p class="text">
           <?php 
           if (isset($_SESSION['userId'])) {
          echo '<button type="submit" class="view4" name="add">Add to cart &nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>';

           echo '<input type="hidden" name="product_id" value="' .$product1['Id'].'"> ';
          }
          ?>
            </p>
        </div>

       </div>
       </div>
       
        </form>
        
		<?php
	}

}
?>
 </div>

<!-- add to cart -->
<?php
if (isset($_POST['add'])) 
{
  $id=$_POST['product_id'];

}


$query1="SELECT `Id`,`Image`, `Name`, `Price`,`Details` FROM `ring` WHERE Id=$id";
$queryfire1=mysqli_query($con, $query1);
$num1=mysqli_num_rows($queryfire1);
if ($num1>0){
$product2=mysqli_fetch_array($queryfire1);
$query2= "INSERT INTO `cart`(`Image`, `Name`, `Price`, `Details`, `User`) VALUES ('".$product2['Image']."','".$product2['Name']."','".$product2['Price']."','".$product2['Details']."','".$_SESSION['userId']."')";
            $queryfire2=mysqli_query($con, $query2);

}
if (isset($_SESSION['userId'])) 
{
$count="SELECT * FROM cart WHERE User='".$_SESSION['userId']."'";
      $queryfire3=mysqli_query($con, $count);
$num2=mysqli_num_rows($queryfire3);
$_SESSION['cnt']=$num2;

}
?>


 <?php
  include 'footer.php';
?>
<script src="javascript.js"></script>
