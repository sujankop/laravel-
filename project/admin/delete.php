<?php
$con=mysqli_connect("localhost","root","","project");  
	if ($_GET['id']==null || $_GET['d']==null || $_GET['a']==null) 
	{
		header("location:dashboard.php");
	}	
	else
	{
		if ($_GET['id']=='a' && $_GET['a']=='a') 
		{
			$d=$_GET['d'];
			$query1="DELETE FROM article WHERE id='$d'";
			$result1=mysqli_query($con,$query1);
			header("location:article.php");
		}
		elseif ($_GET['d']=='a' && $_GET['a']=='a') 
		{
			$id=$_GET['id'];		
			$query="DELETE FROM databse WHERE id='$id'";		
			$result=mysqli_query($con,$query);		
			header("location:news.php");
		}
		elseif ($_GET['id']=='a' && $_GET['d']=='a') 
		{
			$id=$_GET['a'];		
			$query="DELETE FROM ads WHERE id='$id'";		
			$result=mysqli_query($con,$query);		
			header("location:ads.php");
		}
	}
?>