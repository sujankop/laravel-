<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<style type="text/css">
		.border
		{
			border:1px solid black; 
		}
		.padding-top
		{
			padding-top:100px; 
		}
		.col-md-3
		{
			position:relative; 
		}
		.overlay
		{
			position:absolute;
			bottom: 100%;
			left: 0;
			right: 0;
			background-color: #008CBA;
			overflow: hidden;
			width:100%;
			height:0; 
			transition:all 0.5s; 
		}
		.text
		{
			position:absolute;
			text-align:center;
			left:50%;
			top:50%;
			transform:translate(-50%,-50%);    
		}
		.col-md-3:hover .overlay
		{
			bottom:0;
			height:100%; 
		}
	</style>
</head>
<body>
	<div class="container padding-top">
		<div class="row">
			<div class="col-md-3 border">
				<img src="img/portfolio/01-small.jpg" width="100%">
				<div class="overlay">
					<div class="text">text</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>