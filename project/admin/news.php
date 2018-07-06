<?php 
	session_start();
	if ($_SESSION['user']==null) 
	{
		header("location:index.php");
	}	
	$con=mysqli_connect("localhost","root","","project");
	$query="SELECT * FROM databse";
	$result=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style(admin).css">
</head>
<body>
	<div class="main">
		<?php include 'navbar.php';?>
		<div class="container-fluid height">
			<div class="row">
				<?php include 'sidenav.php';?>
				<div class="col-md-10 no-padding text-center">
					<table border="1px" width="100%">
						<tr style="height:100px;">
							<th style="text-align:center;width:50px;">ID</th>
							<th  style="text-align:center; width:100px;">IMAGE</th>
							<th  style="text-align:center;width:500px;">DESCRIPTION</th>
							<th  style="text-align:center; width:100px;">ACTION</th>
						</tr>
						<?php  
							while ($new=mysqli_fetch_assoc($result)) 
							{
						?>
						<tr>
							<td><?php echo $new['id']; ?></td>
							<td><img src="img/<?php echo $new['image'] ?>" width="100%" height="100px;"></td>
							<td><?php echo $new['description']; ?></td>
							<td>
								<button type="button" class="btn" onclick="window.location.href='edit.php?id=<?php echo $new['id']; ?>&d=a&a=a'">
								<span class="glyphicon glyphicon-edit"></span>
								</button>
								<button type="button" class="btn" onclick="window.location.href='delete.php?id=<?php echo $new['id']; ?>&d=a&a=a'">
								<span class="glyphicon glyphicon-trash"></span>
								</button>
							</td>
						</tr>
						<?php  
							}
						?>
					</table>
					<button type="button" class="btn btn-primary" onclick="window.location.href='add.php'"><span class="glyphicon glyphicon-plus"></span></button>
				</div>
			</div>
		</div>		
	</div>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>

