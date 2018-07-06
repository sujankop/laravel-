<?php  
	session_start();
	if ($_SESSION['user']==null || $_GET['id']==null ) 
	{
		header("location:dashboard.php");
	}
	$user=$_SESSION['user'];
	$id=$_GET['id'];
	$d=$_GET['d'];
	$a=$_GET['a'];
	$con=mysqli_connect("localhost","root","","project");
	if (isset($_POST['submit'])) 
	{
		$passage=$_POST['passage'];
		$name=$_FILES['img']['name'];
		$type=$_FILES['img']['type'];
		$tmp=$_FILES['img']['tmp_name'];
		if ($type =='image/jpg' || $type =='image/png' || $type =='image/jpeg' || $type =='image/gif') 
			{
				if (move_uploaded_file($tmp,"img/".$name)) 
				{
				    $query="UPDATE databse SET image='$name'WHERE id='$id'";
					$result=mysqli_query($con,$query);	
				}
			}
		$querypass="UPDATE databse SET description='$passage'WHERE id='$id'";
		$resultpass=mysqli_query($con,$querypass);					
    }
    if (isset($_POST['submita'])) 
	{
		$passage=$_POST['passagea'];
		$name=$_FILES['image']['name'];
		$type=$_FILES['image']['type'];
		$tmp=$_FILES['image']['tmp_name'];
		if ($type =='image/jpg' || $type =='image/png' || $type =='image/jpeg' || $type =='image/gif') 
			{
				if (move_uploaded_file($tmp,"image/".$name)) 
				{
				    $query="UPDATE article SET image='$name'WHERE id='$d'";
					$result=mysqli_query($con,$query);	
				}
			}
		$querypass="UPDATE article SET article='$passage'WHERE id='$d'";
		$resultpass=mysqli_query($con,$querypass);					
    }
    if (isset($_POST['submitads'])) 
	{
		$passage=$_POST['passageads'];
		$name=$_FILES['imageads']['name'];
		$type=$_FILES['imageads']['type'];
		$tmp=$_FILES['imageads']['tmp_name'];
		if ($type =='image/jpg' || $type =='image/png' || $type =='image/jpeg' || $type =='image/gif') 
			{
				if (move_uploaded_file($tmp,"imageads/".$name)) 
				{
				    $query="UPDATE ads SET img='$name'WHERE id='$a'";
					$result=mysqli_query($con,$query);	
				}
			}
		$querypass="UPDATE ads SET title='$passage'WHERE id='$a'";
		$resultpass=mysqli_query($con,$querypass);					
    }	
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
					<div class="col-md-10 add">
						<?php  
							$con=mysqli_connect("localhost","root","","project");
							$query="SELECT * FROM databse where id='$id'";
							$result=mysqli_query($con,$query);
							$new=mysqli_fetch_assoc($result);
						?>
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="file" name="img">
							</div>
							<div class="form-group">
								<textarea placeholder="DESCRIPTION ABOUT THE PHOTO" class="form-control" name="passage">
									<?php echo $new['description']; ?>
								</textarea>
							</div>
							<div class="form-group">
								<input type="submit" name="submit" value="UPDATE" class="btn">
								<button type="button" onclick="window.location.href='news.php'" class="btn">CANCEL</button>
							</div>
						</form>
						<div class="col-md-12">
							FOR ARTICLE
						</div>
						<?php  
							$con=mysqli_connect("localhost","root","","project");
							$query="SELECT * FROM article where id='$d'";
							$result=mysqli_query($con,$query);
							$new=mysqli_fetch_assoc($result);
						?>
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="file" name="image">
							</div>
							<div class="form-group">
								<textarea placeholder="DESCRIPTION ABOUT THE PHOTO" class="form-control" name="passagea">
									<?php echo $new['article']; ?>
								</textarea>
							</div>
							<div class="form-group">
								<input type="submit" name="submita" value="UPDATE" class="btn">
								<button type="button" onclick="window.location.href='article.php'" class="btn">CANCEL</button>
							</div>
						</form>
						<div class="col-md-12">
							FOR ARTICLE
						</div>
						<?php  
							$con=mysqli_connect("localhost","root","","project");
							$query="SELECT * FROM ads where id='$a'";
							$result=mysqli_query($con,$query);
							$new=mysqli_fetch_assoc($result);
						?>
						<form class="form-horizontal" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<input type="file" name="imageads">
							</div>
							<div class="form-group">
								<textarea placeholder="DESCRIPTION ABOUT THE PHOTO" class="form-control" name="passageads">
									<?php echo $new['title']; ?>
								</textarea>
							</div>
							<div class="form-group">
								<input type="submit" name="submitads" value="UPDATE" class="btn">
								<button type="button" onclick="window.location.href='ads.php'" class="btn">CANCEL</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php 
	
?>