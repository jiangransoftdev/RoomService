<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Profile Update</title>
	
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
	<div style="font-size: 16px;">
		<div class="res-row-full" style="margin: 8px;">
			User ID: <?php echo $_SESSION['user_id'];?>
		</div>
		<div class="res-row-full" style="margin: 8px;">
			Role: <?php echo $_SESSION['role'];?>
		</div>	
		<div class="res-row-full" style="margin: 8px;">
			First Name: <?php echo $_SESSION['first_name'];?>
		</div>
		<div class="res-row-full" style="margin: 8px;">
			Last Name: <?php echo $_SESSION['last_name'];?>
		</div>	
		<div class="res-row-full" style="margin: 8px;">
			Email: <?php echo $_SESSION['email'];?>
		</div>
		<div class="res-row-full" style="margin: 8px;">
			Phone: <?php echo $_SESSION['phone'];?>
		</div>	
		<div class="res-row-full" style="margin: 8px;">
			Address Street: <?php echo $_SESSION['address'];?>
		</div>
		<div class="res-row-full" style="margin: 8px;">
			City: <?php echo $_SESSION['city'];?>
		</div>	
		<div class="res-row-full" style="margin: 8px;">
			State: <?php echo $_SESSION['state'];?>
		</div>
		<div class="res-row-full" style="margin: 8px;">
			Zip Code: <?php echo $_SESSION['ZIP'];?>
		</div>	
	</div>	

	</article>
	</section>
</body>
