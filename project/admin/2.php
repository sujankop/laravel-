<?php  
	session_start();
	$error="";
	$con=mysqli_connect("localhost","root","","project");
	if (isset($_POST['submit'])) 
	{
		$user=$_POST['user'];
		$pass=$_POST['password'];
		$_SESSION['user']=$user;
		if (empty($user) || empty($pass)) 
		{
			$error="ENTER USERNAME AND PASSWORD";
		}
		else
		{
			$query="SELECT * FROM admin WHERE user='$user' and pass='$pass'";
			$result=mysqli_query($con,$query);
			$row=mysqli_num_rows($result);
			if ($row==1) 
			{
				echo '<!DOCTYPE html>
						<html>
						<head>
							<title></title>
							<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
							<script type="text/javascript" src="../js/jquery.min.js"></script>
							<style type="text/css">
								html,body
								{
									height:100%;

								}
								.main
								{
									height:100%; 
									background:url(img/wallpaper.jpg);
									background-size:100% 100%;
									background-repeat:no-repeat;   
								}
								.padding
								{
									padding-top:100px; 
								}
								.p
								{
									text-align:center;
									font-size:20px; 
									height:50px;
									line-height:50px; 
									color:white;
									font-weight:bolder;    
								}
							</style>
						</head>
						<body>
							<div class="main">
								<div class="col-md-4 col-md-offset-4 padding">
									<div class="p"><?php echo $error; ?></div>
									<form method="post">
										<div class="form-group">
											<input type="text" name="user" placeholder="USERNAME" class="form-control">
										</div>
										<div class="form-group">
											<input type="password" name="password" placeholder="PASSWORD" class="form-control">
										</div>
										<div class="form-group">
											<input type="submit" name="submit" class="btn btn-default">
										</div>
									</form>
								</div>
							</div>
							<script type="text/javascript" src="../js/bootstrap.min.js"></script>
						</body>
						</html>';
			}
			else
			{
				$error="INVALID USERNAME AND PASSWORD";
			}
		}	
	}
?>