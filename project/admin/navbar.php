<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="btn btn-primary navbar-toggle" data-toggle="collapse" data-target="#nav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="navbar-brand">DASHBOARD</div>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="nav">
			<ul class="nav navbar-nav">
				<li class="dropdown">
			        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">MENU<span class="caret"></span></button>
			        <ul class="dropdown-menu">
			          <li><a href="#">PROFILE</a></li>
			          <li><a href="changepassword.php">CHANGE PASSWORD</a></li>
			          <li><a href="logout.php?logout=<?php echo"logout";?>">LOGOUT</a></li>
			        </ul>				
				</li>
			</ul>
		</div>
	</div>
</nav>