<?php  
	session_start();
	if ($_SESSION['user']==null) 
	{
		header("location:index.php");
	}
	$user=$_SESSION['user'];	
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
				<div class="col-md-10 well">
					<div class="col-md-12">
						<p class="welcome">WELCOME</p>
					</div>
					<div class="col-md-12">
						<p class="user"><?php echo $user;?>!!!</p>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>