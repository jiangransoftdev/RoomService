<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Manage Reservation</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/extra.css" type="text/css" media="screen" />
	
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function() 
	{ 
		$(".tablesorter").tablesorter(); 
	});
	$(document).ready(function() {
		//When page loads...
		$(".tab_content").hide(); //Hide all content
		$("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(".tab_content:first").show(); //Show first tab content
		//On Click Event
		$("ul.tabs li").click(function() {

			$("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(".tab_content").hide(); //Hide all tab content
	
			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$(activeTab).fadeIn(); //Fade in the active ID content
			return false;
		});
	});
	</script>
	<script type="text/javascript">
	$(function(){
		$('.column').equalHeight();
	});
	
	function delcfm(str) { 
	
     var r=confirm("delete?");
	  var   tmp;  
          

	if (r==true)
	  {
	  
			location.href="return-all-res.php?q="+str;

	  }
	else
	  {
	  alert("You pressed Cancel!");
	  }
	}

</script>
</head>

<body>

<?php
session_start();
include("connection.php");
$sql="SELECT res_id,room_number,capacity,first_name,last_name,email,date,start_hour,end_hour,submit_time FROM reservation ,user,room 
where user.user_id=reservation.user_id and reservation.room_id=room.room_id";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
 
$_SESSION['res_id']=$row['res_id'];
$_SESSION['room_number']=$row['room_number'] ;
$_SESSION['capacity']=$row['capacity'] ;
$_SESSION['first_name']= $row['first_name'] ;
$_SESSION['last_name']=$row['last_name'] ;
$_SESSION['email']=$row['email'] ;
$_SESSION['date']=$row['date'] ;
$_SESSION['start_hour']=$row['start_hour'] ;
$_SESSION['end_hour']=$row['end_hour'] ;
$_SESSION['submit_time']=$row['submit_time'] ;
}

?>

	<section id="main" class="column">	

	<div class="res-width-full">
		<div class="res-row-full">
			<form class="go-back" action="welcome.php"><input type="submit" class="res-view-button" value="Go Back" /></form>
		</div>
		<hr />
	</div>
	
	<article class="module width_full" >
	<header><h3 class="tabs_involved2">Manage Reservation</h3></header>
		
	<div class="tab_container">
		<div class="message_list" style="height: 450px;">
			<div class="tab_content">
			
<?php
$sql="SELECT res_id,room_number,capacity,first_name,last_name,email,date,start_hour,end_hour,submit_time FROM reservation ,user,room 
where user.user_id=reservation.user_id and reservation.room_id=room.room_id";

$result = mysqli_query($con,$sql);

echo "<table class='tablesorter' cellspacing='0'>
<thead> 
<tr>
<th>ID</th>
<th>Date</th>
<th>Time</th>
<th>Room number</th>
<th>Capacity</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Submit time</th>
<th></th>
</tr>
</thead>";


while($row = mysqli_fetch_array($result)) {

$yyy=substr($row['date'],0,4);
$mmm=substr($row['date'],4,2);
$ddd=substr($row['date'],6,2);
$date=$mmm."-".$ddd."-".$yyy;

	echo "<tr>";
	echo "<td>" . $row['res_id'] . "</td>";
	echo "<td>" .$date. "</td>";
	echo "<td>" . $row['start_hour'] . ":00-" . $row['end_hour'] . ":00</td>";
	echo "<td>" . $row['room_number'] . "</td>";
	echo "<td>" . $row['capacity'] . "</td>";
	echo "<td>" . $row['first_name'] . "</td>";
	echo "<td>" . $row['last_name'] . "</td>";
	echo "<td>" . $row['email'] . "</td>";
	echo "<td>" . $row['submit_time'] . "</td>";
	$tem=$row['res_id'];
	echo "<td> <input type='image' src='images/icn_trash.png' title='Cancel' onClick='delcfm($tem)' /> </td>";
	echo "</tr>";
}

echo "</table>";

?>



			</div>
		</div>
	</div>
	<footer></footer>
	</article>

	</section>
</body>
