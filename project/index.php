<?php
session_start();  
$con=mysqli_connect("localhost","root","","project");
$query="SELECT * FROM databse";
$query1="SELECT * FROM article";
$query2="SELECT * FROM ads";
$result=mysqli_query($con,$query);
$result1=mysqli_query($con,$query1);
$result2=mysqli_query($con,$query2);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="index(main).css">
</head>
<body>
	<div class="container-fluid  header">
		<div class="row" style="text-align:justify;">
			<header class="col-md-12">
				<nav class="">
					<ul></ul>
				</nav>
			</header>
			<div class="col-md-12 no-padding">
				<div class="col-md-6 header padding">
					<img src="car.jpg" width="100%" height="200px">				
				</div>
				<div class="col-md-6 header padding">
					<img src="house.jpg" width="100%" height="200px">				
				</div>
			</div>
		</div>
	</div>
	<?php include 'nav.php'; ?>
	<div class="container-fluid no-padding height">
		<div class="col-md-3 height">
			<?php
				while ($new=mysqli_fetch_assoc($result)) 
				{
			?>
			<div class="col-md-12 inner-heightl box-shadow box-radius">
				<div class="col-md-12 no-padding"><img src="admin/img/<?php echo$new['image']; ?>" height="200px" width="100%" class="margin-bottom"></div>
				<div class="col-md-12"><p><?php echo $new['description'];?></p></div>
			</div>
			<?php } ?>
		</div>
		<div class="col-md-6 height" style="text-align:justify;">
			<?php
			while ($new=mysqli_fetch_assoc($result1)) 
					{  
			?>
			<div class="col-md-12 inner-heightm middle box-shadow box-radius no-padding">
				<div class="col-md-12 text-center">
					<img src="admin/image/<?php echo $new['image'];?>" width="100%" height="500px">
				</div>
				<div class="col-md-12 margin-top text">
					<p><?php echo $new['article']; ?></p>
				</div>
			</div>
			<?php  
				}
			?>
		</div>
		<div class="col-md-3">
			<?php
				while ($new=mysqli_fetch_assoc($result2)) 
				{
			?>
			<div class="col-md-12 inner-heightr box-shadow box-radius" style=" ">
				<div class="col-md-12 no-padding"><img src="admin/imageads/<?php echo $new['img']; ?>" height="300px" width="100%" class="margin-bottom"></div>
			</div>
			<?php } ?>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scroll.js"></script>
</body>
</html>