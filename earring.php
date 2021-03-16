<link rel="stylesheet" type="text/css" href="card.css">

<?php
 
  $page='earring';
  include 'upperPartNavbar.php';
?>
<?php

include_once 'includes/ratedb.php';

?>
<h1 class="heading">Earring</h1>
   
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
$query="SELECT `Id`,`Image`, `Name`, `Price` FROM `earring` ORDER BY id ASC ";
$queryfire=mysqli_query($con, $query);

$num=mysqli_num_rows($queryfire);
if ($num>0) {
	while ($product1=mysqli_fetch_array($queryfire)) {
		
		?>
    	
		<form action="" method="post">
			
	     <div class="column">
			<div class="card"> 
        <div class="card-body">
                
        	<img src="<?php echo
        	 $product1['Image'];?>" alt="earring" width="300px" height="250px">

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
        	  
        	  <button type="submit" class="view4"> <a href="eview.php?ab=<?php echo $product1['Image'] ?>">View</a></button>
        	
            </p>
            <p class="text">
        	 <?php 
        	 if (isset($_SESSION['userId'])) {
            
        	echo '<button type="submit" class="view4" name="add" >Add to cart &nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i>   </button>';
          echo '<input type="hidden" name="product_id" value="' .$product1['Id'].'">	';
          
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
  //echo $_POST['product_id'];
  if (isset($_SESSION['cart'])) {
    $item_array_id=array_column($_SESSION['cart'],"product_id");
    //print_r($item_array_id);

    if (in_array($_POST['product_id'],$item_array_id)) {
      echo "<script>alert('Product is already added in the cart')</script>";
      echo "<script>window.location='earring.php'</script>";
    }else{
      $count=count($_SESSION['cart']);
      $item_array=array(
      'product_id'=> $_POST['product_id']
    );
      $_SESSION['cart'][$count]=$item_array;
      //print_r($_SESSION['cart']);
    }
   }
else{
    $item_array=array(
   'product_id'=> $_POST['product_id']
    );
  //create new session variable
  $_SESSION['cart'][0]=$item_array;
  //print_r($_SESSION['cart']);
}
}

?>







<?php
  include 'footer.php';
?>
<script src="javascript.js"></script>
