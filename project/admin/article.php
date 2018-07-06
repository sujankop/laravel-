<?php  
	session_start();
	if ($_SESSION['user']==null) 
	{
		header("location:index.php");
	}
	$error="";
	$con=mysqli_connect("localhost","root","","project");
	$query="SELECT * FROM article";
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
		<?php include 'navbar.php'; ?>
		<div class="container-fluid height">
			<div class="row">
				<?php include 'sidenav.php'; ?>
				<div class="col-md-10 no-padding text-center">
					<div class="error">
						<?php echo $error; ?>
					</div>
					<table border="1px" width="100%">
						<tr>
							<th style="text-align:center; width:50px;">ID</th>
							<th style="text-align:center; width:200px;">IMAGE</th>
							<th style="text-align:center; width:500px;">ARTICLE</th>
							<th style="text-align:center; width:200px;">ACTION</th>
						</tr>
						<?php
							while ($new=mysqli_fetch_assoc($result)) 
							{ 
						?>
							<tr>
								<th style="text-align:justify;"><?php echo $new['id']; ?></th>
								<th style="text-align:justify;"><?php echo $new['image']; ?></th>
								<th style="text-align:justify;"><?php echo $new['article']; ?></th>
								<th style="text-align:center;">
									<button type="button" class="btn btn-primary" onclick="window.location.href='edit.php?d=<?php echo $new['id']; ?>&id=a&a=a'"><span class="glyphicon glyphicon-edit"></span></button>
									<button type="button" class="btn btn-primary" onclick="window.location.href='delete.php?d=<?php echo $new['id']; ?>&id=a&a=a'"><span class="glyphicon glyphicon-trash"></span></button>
								</th>
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