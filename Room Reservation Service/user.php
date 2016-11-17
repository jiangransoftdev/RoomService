<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Library Management System</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" />
	<link rel="stylesheet" href="css/extra.css" type="text/css" />
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/data-ajax.js" type="text/javascript"></script>
	
	<script type="text/javascript"> 
		function changeTag(menu) 
		{ 
			document.getElementById("currentPage").innerHTML=menu.name;
		}
	</script> 

</head>

<body>
<?php
	session_start();
	$role = $_SESSION['role'];
	$first_name = $_SESSION['first_name'];
	$last_name = $_SESSION['last_name'];
?>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="#">Reservation System</a></h1>
			<h2 class="section_title"></h2>
			<div class="btn_view_site"><a href="log-off.php">Logout</a></div>
		</hgroup>
	</header>
	
	<section id="secondary_bar">
		<div class="user">
			<p><a href="my-info.php" name="My Information" target="MainPage" onclick="javascript: changeTag(this)"><?php echo $first_name." ".$last_name;?></a><?php echo " (Role: ".$role.")";?></p>
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs">
				<a href="welcome.php" name="Welcome" target="MainPage" onclick="javascript: changeTag(this)">Home</a> 
				<div class="breadcrumb_divider"></div>
				<a id="currentPage"class="current">Welcome</a>
			</article>
		</div>
	</section><!-- end of secondary bar -->
	
	
	
	
	
	<aside id="sidebar" class="column">
		<h3>Control Panel</h3>

		<h3>My Account</h3>
		<ul class="toggle">
			<li class="icn_edit_article"><a href="my-res.php" name="My Reservation" target="MainPage" onclick="javascript: changeTag(this)">My Reservation</a></li>
			<li class="icn_new_article"><a href="search.php" name="Reserve" target="MainPage" onclick="javascript: changeTag(this)">New Reservation</a></li>
			<li class="icn_categories"><a href="history.php" name="View History" target="MainPage" onclick="javascript: changeTag(this)">View History</a></li>
		</ul>
		<h3>Settings</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="profile.php" name="Profile Update" target="MainPage" onclick="javascript: changeTag(this)">Profile</a></li>
			<li class="icn_jump_back"><a href="log-off.php">Logout</a></li>
		</ul>

	</aside><!-- end of sidebar -->
	
	<section id="frame" class="column" style="height:800px;">	
		<iframe src="Welcome.php" name="MainPage" style="height:100%; width:100%;" scrolling="no" frameborder="0"></iframe>
	</section>
</body>
