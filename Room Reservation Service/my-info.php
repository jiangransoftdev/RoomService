<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>My Information</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/extra.css" type="text/css" media="screen" />
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>

</head>

<body>
<?php 	session_start(); ?>

	<section id="main" class="column">
	<article class="res-width-full">
	
	<div class="res-row-full">
		<form class="go-back" action="welcome.php"><input type="submit" class="res-view-button" value="Go Back" /></form>
	</div>

	<hr />
	<div style="font-size: 22px;">
		<div class="res-row-full" style="margin: -2px;">
			User ID: <?php echo $_SESSION['user_id'];?>
		</div>
		<div class="res-row-full" style="margin: -2px;">
			Role: <?php echo $_SESSION['role'];?>
		</div>	
		<div class="res-row-full">
			First Name: <?php echo $_SESSION['first_name'];?>
		</div>
		<div class="res-row-full">
			Last Name: <?php echo $_SESSION['last_name'];?>
		</div>	
		<div class="res-row-full">
			Email: <?php echo $_SESSION['email'];?>
		</div>
		<div class="res-row-full">
			Phone: <?php echo $_SESSION['phone'];?>
		</div>	
		<div class="res-row-full">
			Address Street: <?php echo $_SESSION['address'];?>
		</div>
		<div class="res-row-full">
			City: <?php echo $_SESSION['city'];?>
		</div>	
			<div class="res-row-full">
			State: <?php echo $_SESSION['state'];?>
		</div>
		<div class="res-row-full">
			Zip Code: <?php echo $_SESSION['ZIP'];?>
		</div>	
	</div>	

	</article>
	</section>
</body>
