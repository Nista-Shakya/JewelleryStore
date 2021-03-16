
<link rel="stylesheet" type="text/css" href="card.css">

<?php
  $page='bangle';
  include 'upperPartNavbar.php';
?>
<?php
include_once 'includes/ratedb.php';
?>
<h1 class="heading">Bangle</h1>
   
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
$query="SELECT `Image`, `Name`, `Price` FROM `bangle` ORDER BY id ASC ";
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
        	 $product1['Image'];?>" alt="Bangle" width="250px" height="300px">
        	 
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
            
            <button type="submit" class="view4"> <a href="bview.php?ab=<?php echo $product1['Image'] ?>">View</a></button>
          
            </p>
            <p class="text">
           <?php 
           if (isset($_SESSION['userId'])) {
          echo '<button type="submit" class="view4">Add to cart &nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i></button>';
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










<?php
  include 'footer.php';
?>
<script src="javascript.js"></script>
