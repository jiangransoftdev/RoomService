<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>SearchPatent</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/extra.css" type="text/css" media="screen" />
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/data-ajax.js" type="text/javascript"></script>

</head>

<body onload="javascript: selectDate(0)">

<?php
		session_start();
		$userID = $_SESSION['user_id'];
		echo "<input type='hidden' id='current-user-id' value='".$userID."'>";
?>
	<section id="main" class="column">
	<article class="res-width-full">
	
	<div class="res-row-full">
		<form class="go-back" action="welcome.php"><input type="submit" class="res-view-button" value="Go Back" /></form>
	</div>

		<hr />
	<div class="res-row-full">
		<div class="calendar-container">
			<div class="calendar-base">
				<input type="button" class="calendar-pre" value="PREV"  onclick="javascript: prevWeek()">
					<span id="the-current-week">
					<?php include("selected-days.php"); ?>
					</span>
				<input type="button" class="calendar-next" value="NEXT" onclick="javascript: nextWeek()">
			</div>
		</div>
	</div>
	
	<div class="res-row-full" style="margin-bottom: -15px;">
	<div class="filter-navbar" style="margin-left: 3%;">
		<div class="sort-selective selective-left">
			<form id="floor-select-form">
				<select id="selective-floor" class="view-data-year selective-year" name="users" onchange="selectFloor()"  style="width: 150px; margin-right: 3%;">
				<option value="">Select Floor</option>
				<option value="1">1F</option>
				<option value="2">2F</option>
				<option value="3">3F</option>
				<option value="4">4F</option>
				</select>
			</form>
		</div>
		
		<form>
		<div id="room-select-form" class="sort-selective selective-left">
			
				<?php include("option-room.php"); ?>

		</div>
		</form>
		
		<div class="sort-selective">
			<form id="health-info-form">
				<select class="view-data-selective" name="users" onchange="filter(this.value)">
				<option value=" ">Sorted by</option>
				<option value="room_number">Room # (INCR)</option>
				<option value="room_number DESC">Room # (DESC)</option>
				<option value="capacity">Capacity (INCR)</option>
				<option value="capacity DESC">Capacity (DESC)</option>
				</select>
			</form>
		</div>
	</div>
	</div>

	
	<div id="table-contents" class="module width_full" >
		<?php 
		include("sql-query-data.php");
		?>
	</div>
	
		<div class="filter-navbar-bottom-right">
		<div class="sort-selective bottom-selective">
		<form id="row-select-form">
			<select class="view-data-selective" style="width:125px;" onchange="selectRow(this.value)" name="users">
			<option value="10">10 rows per page</option>
			<option value="20">20 rows per page</option>
			<option value="50">50 rows per page</option>
			<option value="100">100 rows per page</option>
			</select>
			</form>
		</div>
	</div>
	

	</article>
	</section>
</body>
