<?php  
	session_start();
	if ($_SESSION['user']==null) 
	{
		header("location:index.php");
	}
	$error="";
	$user=$_SESSION['user'];
	$con=mysqli_connect("localhost","root","","project");
	if (isset($_POST['submit'])) 
	{
		$oldpass=$_POST['password1'];
		$newpass=$_POST['password2'];
		$conpass=$_POST['password3'];
		$check="SELECT * FROM admin WHERE user='$user'";
		$result=mysqli_query($con,$check);
		$new=mysqli_fetch_assoc($result);
		if ($new['pass']==$oldpass) 
		{
			if ($newpass==$conpass) 
			{
				$change="UPDATE admin SET pass='$newpass'";
				$changeresult=mysqli_query($con,$change);
				$error="PASSWORD CHANGED";
			}
			else
			{
				$error="NEW PASSWORD DIDNOT MATCH";
			}
		}
		else
		{
			$error="OLD PASSWORD DIDNOT MATCH";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style(admin).css">
	<style type="text/css">
		.error
		{
			text-align:center;
			font-size:15px; 
			height:50px;
			line-height:50px; 
			color:black;
			font-weight:bolder;    
		}
	</style>
</head>
<body>
	<div class="main">
		<?php include 'navbar.php'; ?>
		<div class="container-fluid height">
			<div class="row">
				<?php include 'sidenav.php'; ?>
				<div class="col-md-3 col-md-offset-3">
					<form class="form-horizontal text-center" method="post">
						<div class="error">
							<?php echo $error; ?>
						</div>
						<div class="form-group">
							<label for="oldpassword">Old Password:</label>
							<input type="password" name="password1" class="form-control">
						</div>
						<div class="form-group">
							<label for="newpassword">New Password:</label>
							<input type="password" name="password2" class="form-control">
						</div>
						<div class="form-group">
							<label for="confitmpassword">Confirm Password:</label>
							<input type="password" name="password3" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn" value="CHANGE PASSWORD">
						</div>
					</form>
				</div>
			</div>
		</div>		
	</div>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>