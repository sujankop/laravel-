<?php  
	session_start();
	$error="";
	if ($_SESSION['user'] == null) 
	{
		header("location:index.php");
	}	
	$con=mysqli_connect("localhost","root","","project");
	if (isset($_POST['submit']))
	{	
		$size=$_FILES['img']['size'];
		$name=$_FILES['img']['name'];
		$type=$_FILES['img']['type'];
		$tmp=$_FILES['img']['tmp_name']; 
		$user=$_POST['passage'];
		if (empty($user) || empty($type)) 
		{
			$error="INVALID";
		}
		else
		{
			if ($type =='image/jpg' || $type =='image/png' || $type =='image/jpeg' || $type =='image/gif') 
			{
				if (move_uploaded_file($tmp,"img/".$name)) 
				{
					$query="INSERT INTO databse (image,description)
					values('$name','$user')";
					$result=mysqli_query($con,$query);
					if (!$result) 
					{
						echo "upload not done due to some problem";
					}
					header("location:news.php");	
				}
			}
			else
			{
				$error="NOT SUPPORTING FILE TYPE";
			}
		}
	}
	if (isset($_POST['article']))
	{	
		$size=$_FILES['image']['size'];
		$name=$_FILES['image']['name'];
		$type=$_FILES['image']['type'];
		$tmp=$_FILES['image']['tmp_name']; 
		$user=$_POST['passagearticle'];
		if (empty($user) || empty($type)) 
		{
			$error="INVALID";
		}
		else
		{
			if ($type =='image/jpg' || $type =='image/png' || $type =='image/jpeg' || $type =='image/gif') 
			{
				if (move_uploaded_file($tmp,"image/".$name)) 
				{
					$query="INSERT INTO article (image,article)
					values('$name','$user')";
					$result=mysqli_query($con,$query);
					if (!$result) 
					{
						echo "upload not done due to some problem";
					}
					header("location:article.php");	
				}
			}
			else
			{
				$error="NOT SUPPORTING FILE TYPE";
			}
		}
	}
	if (isset($_POST['ads']))
	{	
		$size=$_FILES['imageads']['size'];
		$name=$_FILES['imageads']['name'];
		$type=$_FILES['imageads']['type'];
		$tmp=$_FILES['imageads']['tmp_name']; 
		$user=$_POST['passageads'];
		if (empty($user) || empty($type)) 
		{
			$error="INVALID";
		}
		else
		{
			if ($type =='image/jpg' || $type =='image/png' || $type =='image/jpeg' || $type =='image/gif') 
			{
				if (move_uploaded_file($tmp,"imageads/".$name)) 
				{
					$query="INSERT INTO ads (img,title)
					values('$name','$user')";
					$result=mysqli_query($con,$query);
					if (!$result) 
					{
						echo "upload not done due to some problem";
					}
					header("location:ads.php");	
				}
			}
			else
			{
				$error="NOT SUPPORTING FILE TYPE";
			}
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
</head>
<body>
	<div class="main">
		<?php include 'navbar.php'; ?>
		<div class="container-fluid height">
			<div class="row">
				<?php include 'sidenav.php'; ?>
				<div class="col-md-10 add">
					<div class="error">
						<?php echo $error; ?>
					</div>
					<form class="form-horizontal text-center" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="file" name="img" id="img">
						</div>
						<div class="form-group">
							<textarea placeholder="DESCRIPTION ABOUT THE PHOTO" class="form-control" name="passage"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" class="btn">
						</div>
					</form>
					<div class="col-md-12 no-padding">
						<p class="for-article">FOR ARTICLE</p>
					</div>
					<div class="error">
						<?php echo $error; ?>
					</div>
					<form class="form-horizontal text-center" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="file" name="image">
						</div>
						<div class="form-group">
							<textarea placeholder="DESCRIPTION ABOUT THE PHOTO" class="form-control" name="passagearticle"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="article" class="btn">
						</div>
					</form>
					<div class="col-md-12 no-padding">
						<p class="for-article">FOR ADS</p>
					</div>
					<div class="error">
						<?php echo $error; ?>
					</div>
					<form class="form-horizontal text-center" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<input type="file" name="imageads">
						</div>
						<div class="form-group">
							<textarea placeholder="DESCRIPTION ABOUT THE PHOTO" class="form-control" name="passageads"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" name="ads" class="btn">
						</div>
					</form>
				</div>
			</div>
		</div>		
	</div>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php  
	
?>
