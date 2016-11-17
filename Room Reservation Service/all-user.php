<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Manage</title>
	
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
	
	$(function(){
		$('.column').equalHeight();
	});
	

	
function upgradecfm(str) { 
	
     var r=confirm("Upgrade?");
	  var   tmp;  
 
if (r==true)
  {
  
        location.href="upgrade-user.php?q="+str;

  }
else
  {
  alert("You pressed Cancel!");
  }
}



function delcfm(str) { 
	
     var r=confirm("delete?");
	  var   tmp;  
          

if (r==true)
  {
  
        location.href="del-user.php?q="+str;

  }
else
  {
  alert("You pressed Cancel!");
  }
}


	
	</script>
</head>

<body>
	<section id="main" class="column">	

	<div class="res-width-full">
		<div class="res-row-full">
			<form class="go-back" action="welcome.php"><input type="submit" class="res-view-button" value="Go Back" /></form>
		</div>
		<hr />
	</div>
	
	<article class="module width_full" >
	<header><h3 class="tabs_involved2">Manage Users</h3></header>
		
	<div class="tab_container">
		<div class="message_list" style="height: 400px;">
			<div class="tab_content">
			
			
			<?php


$con = mysqli_connect('localhost','root','','reservation');
if (!$con) {

  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,'user');
$sql="SELECT * FROM user";



$result = mysqli_query($con,$sql);

echo "<table border='1' class='tablesorter' style='height: 200px;'>
<tr>

<th>User Id</th>
<th>Role</th>

<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>phone</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>ZIP</th>
<th>Upgrade</th>
<th>Delete</th>



</tr>";


while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['user_id'] . "</td>";

  echo "<td>" . $row['role'] . "</td>";

  echo "<td>" . $row['first_name'] . "</td>";
  echo "<td>" . $row['last_name'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['phone'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
	echo "<td>" . $row['city'] . "</td>";
	    echo "<td>" . $row['state'] . "</td>";
		
		  echo "<td>" . $row['ZIP'] . "</td>";
	
		
		$tem=$row['user_id'];
		$role= $row['role'];
		  echo " <td><input id='first' type='image' src='images/icn_edit.png' title='Upgrade' onClick='upgradecfm($tem)' /> </td>";
		 echo "<td> <input id='second' type='image' src='images/icn_trash.png' title='Delete' onClick='delcfm($tem)'  /> </td>";

echo "</tr>";


  
}

echo "</table>";


  



mysqli_close($con);
?>
			
			
			
			
			
			</div>
		</div>
	</div>
	<footer></footer>
	</article>

	</section>
</body>
