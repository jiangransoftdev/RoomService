<?php

if(!empty($_GET["g_date"]) && !empty($_GET["room"]) && !empty($_GET["start"])) {
	$date = $_GET["g_date"];
	$room = $_GET["room"];
	$start = $_GET["start"];
	$end = $start+1;
	$user_id = $_GET["user"];
	$room_id = '';
	
	include("connection.php");
	
	$res_info_query = "SELECT * FROM reservation where user_id=".$user_id;
	$res_results = mysqli_query($con, $res_info_query);
	$num_rows = mysqli_num_rows($res_results);
	
	$res_info_query = "SELECT * FROM room where room_number=".$room;
	$res_results = mysqli_query($con, $res_info_query);
	
	while($row = mysqli_fetch_array($res_results))  {
		$room_id = $row['room_id'];
	}

	if($num_rows>45) header("location: search.php?error=102");
	else {
		$res_info_query = "insert into reservation(`room_id`, `user_id`, `date`, `start_hour`, `end_hour`) values ('".$room_id."','".$user_id."','".$date."','".$start."','".$end."')";
		echo $res_info_query;
		$res_results = mysqli_query($con, $res_info_query);
		header("location: my-res.php?succeed=202");
	}
}
else {
	header("location: search.php?error=101");
}



?>