<?php
  include 'upperPartNavbar.php';
?>

<link rel="stylesheet" type="text/css" href="card.css">

<h1 class="heading">My Cart</h1>
<div class="row">
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'product');

$query="SELECT `Id`,`Image`, `Name`, `Price`, `Details`, `User` FROM `cart` ORDER BY id ASC ";
$queryfire=mysqli_query($con, $query);
$id=0;
$num=mysqli_num_rows($queryfire);
$logedInUsername = $_SESSION['userId'];
if ($num>0) {
	while ($product1=mysqli_fetch_array($queryfire)) {
		if ($logedInUsername==$product1['User'])
		{
		
		?>
			
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
           <p>
           	<form action=" " method="post">
          <button type="submit" class="remv" name="add"> Remove</button>
           <input type="hidden" name="product_id" value="<?php echo $product1['Id']; ?>">
           </form>
          </p>
        </div>

       </div>
       </div>
        
		<?php
	}

}
}
?>

</div>

<?php
if (isset($_POST['add'])) 
{
  $id=$_POST['product_id'];
}

$query1="SELECT `Id`,`Image`, `Name`, `Price`,`Details` FROM `cart` WHERE Id=$id";
$queryfire1=mysqli_query($con, $query1);
$num1=mysqli_num_rows($queryfire1);
if ($num1>0)
{
$product2=mysqli_fetch_array($queryfire1);
$query2= "DELETE FROM cart WHERE Id=$id ";
            $queryfire2=mysqli_query($con, $query2);

}
?>




 <?php
  include 'footer.php';
?>
<script src="javascript.js"></script>
