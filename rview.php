<?php
include 'upperPartNavbar.php';
?>
<link rel="stylesheet" type="text/css" href="view.css">
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con, 'product');


if(isset($_GET['ab'])){
$id =$_GET['ab'];
$sql = $con->prepare("select * from ring where Image=?");
$sql->bind_param('s',$id);
$sql->execute();
$result = $sql->get_result();
$row = $result->fetch_assoc();
$img=$row['Image'];
$name=$row['Name'];
$price=$row['Price'];
$details=$row['Details'];
}

else{
echo 'error';

}
?>
<div class="heading"><?php echo $name ?></div>
<div class="detail-container">
	
	
	<div class="detail-left">
	<img src="<?php echo
        	 $img;?>" alt="earring" width="300px" height="250px">
	</div>

	<div class="detail-right">
    <p class="des"><?php echo "$details";?></p>

    <p class="price">NPR <?php echo "$price"; ?></p>
     	
	</div>

</div>

<?php
  include 'footer.php';
?>
<script src="javascript.js"></script>