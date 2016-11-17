<?php
$all = true;
$morning = true;
$afternoon = true;
$evening = true;
?>


	<header><h3 class="tabs_involved2">Search</h3></header>
		
	<div class="tab_container">
		<div class="message_list" style="height: 350px; overflow-x: scroll;">
			<div class="tab_content">
			<table class="tablesorter" cellspacing="0" style="text-align: center;"> 
			<thead style="text-align: center;"> 
				<tr style="text-align: center;"> 
					<th>Room</th> 
    				<th>Capacity</th> 

				<?php if($all || $morning) {
					echo "<th class='search-thead'>8:00-9:00</th>
    				<th class='search-thead'>9:00-10:00</th>
    				<th class='search-thead'>10:00-11:00</th>
					<th class='search-thead'>11:00-12:00</th> ";
				} ?>
				
				<?php if($all || $afternoon) {
					echo "<th class='search-thead'>12:00-13:00</th> 			
    				<th class='search-thead'>13:00-14:00</th>
					<th class='search-thead'>14:00-15:00</th>
    				<th class='search-thead'>15:00-16:00</th>
    				<th class='search-thead'>16:00-17:00</th>
					<th class='search-thead'>17:00-18:00</th>";
				} ?>
				
				<?php if($all || $evening) {
					echo "<th class='search-thead'>18:00-19:00</th> 			
    				<th class='search-thead'>19:00-20:00</th> 
					<th class='search-thead'>20:00-21:00</th>
    				<th class='search-thead'>21:00-22:00</th>";
				} ?>
					
				</tr> 
			</thead>
<?php 

include ("connection.php");
$start8 = [];
$start9 = [];
$start10 = [];
$start11 = [];
$start12 = [];
$start13 = [];
$start14 = [];
$start15 = [];
$start16 = [];
$start17 = [];
$start18 = [];
$start19 = [];
$start20 = [];
$start21 = [];

$sort_key = "room_number";
$num_page = 10;
$select_date = date("Y").date("m").date("d");
$select_room = "";
//echo $select_date;

if(!empty($_POST["g_sort_key"])) {
	$sort_key = $_POST["g_sort_key"];
	if($sort_key=='' || $sort_key==null) $sort_key="room_number";
}

if(!empty($_POST["g_num_page"])) {
	$num_page = $_POST["g_num_page"];
}

if(!empty($_POST["g_date"])) {
	$select_date = $_POST["g_date"];
}

if(!empty($_POST["g_room"])) {
	$select_room = $_POST["g_room"];
}

$res_info_query = "SELECT * FROM reservation as s, room as r WHERE s.room_id=r.room_id and s.date =".$select_date;

$res_results = mysqli_query($con, $res_info_query);

while($row = mysqli_fetch_array($res_results))  { 
	if($row['start_hour']==8) $start8[$row['room_number']] = 'reserved';
	if($row['start_hour']==9) $start9[$row['room_number']] = 'reserved';
	if($row['start_hour']==10) $start10[$row['room_number']] = 'reserved';
	if($row['start_hour']==11) $start11[$row['room_number']] = 'reserved';
	if($row['start_hour']==12) $start12[$row['room_number']] = 'reserved';
	if($row['start_hour']==13) $start13[$row['room_number']] = 'reserved';
	if($row['start_hour']==14) $start14[$row['room_number']] = 'reserved';
	if($row['start_hour']==15) $start15[$row['room_number']] = 'reserved';
	if($row['start_hour']==16) $start16[$row['room_number']] = 'reserved';
	if($row['start_hour']==17) $start17[$row['room_number']] = 'reserved';
	if($row['start_hour']==18) $start18[$row['room_number']] = 'reserved';
	if($row['start_hour']==19) $start19[$row['room_number']] = 'reserved';
	if($row['start_hour']==20) $start20[$row['room_number']] = 'reserved';
	if($row['start_hour']==21) $start21[$row['room_number']] = 'reserved';
}
//echo $start14['3.614'];

$rm_info_query = "SELECT * FROM room where room_number like '".$select_room."%' order by ".$sort_key;
$rm_results = mysqli_query($con, $rm_info_query);
$num_rows = mysqli_num_rows($rm_results);
//echo $num_rows;

$totNoOfItems = $num_rows;

if($num_page===null) $itemsPerPage = 10; 
else $itemsPerPage = $num_page; 

$startItem = 0;
if(!empty($_POST["g_startitem"])) $startItem = $_POST["g_startitem"]; 

//session_start();

$navi = include("navigation.php");
?>			

			<tbody> 
				<tr> 
<?php 
$count = 0;
$hour = (date("H")+17)%24;
while($row = mysqli_fetch_array($rm_results))  {
	if($count>=$startItem && $count<($startItem+$itemsPerPage)) {
?>


   					<td><?php echo $row['room_number'];?></td>
    				<td><?php echo $row['capacity'];?></td> 
					
    			<?php if($all || $morning) {;?>
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start8))
							{ echo "<em>Reserved</em>"; }
						else if($hour>8) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",8)'>Select</a>"; }
					?> 
					</td> 
    				<td>
					<?php
						if (array_key_exists($row['room_number'],$start9))
							{ echo "<em>Reserved</em>"; }
						else if($hour>9) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",9)'>Select</a>"; }
					?> 
					</td> 
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start10))
							{ echo "<em>Reserved</em>"; }
							else if($hour>10) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",10)'>Select</a>"; }
					?> 
					</td>
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start11))
							{ echo "<em>Reserved</em>"; }
							else if($hour>11) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",11)'>Select</a>"; }
					?> 
					</td>
				<?php } ?>
				
    			<?php if($all || $afternoon) {;?>
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start12))
							{ echo "<em>Reserved</em>"; }
							else if($hour>12) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",12)'>Select</a>"; }
					?> 
					</td> 
    				<td>
					<?php
						if (array_key_exists($row['room_number'],$start13))
							{ echo "<em>Reserved</em>"; }
							else if($hour>13) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",13)'>Select</a>"; }
					?> 
					</td> 
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start14))
							{ echo "<em>Reserved</em>"; }
							else if($hour>14) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",14)'>Select</a>"; }
					?> 
					</td>
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start15))
							{ echo "<em>Reserved</em>"; }
							else if($hour>15) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",15)'>Select</a>"; }
					?> 
					</td>
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start16))
							{ echo "<em>Reserved</em>"; }
							else if($hour>16) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",16)'>Select</a>"; }
					?> 
					</td>
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start17))
							{ echo "<em>Reserved</em>"; }
							else if($hour>17) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",17)'>Select</a>"; }
					?> 
					</td>
				<?php } ?>
				
    			<?php if($all || $evening) {;?>
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start18))
							{ echo "<em>Reserved</em>"; }
							else if($hour>18) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",18)'>Select</a>"; }
					?> 
					</td> 
    				<td>
					<?php
						if (array_key_exists($row['room_number'],$start19))
							{ echo "<em>Reserved</em>"; }
							else if($hour>19) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",19)'>Select</a>"; }
					?> 
					</td> 
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start20))
							{ echo "<em>Reserved</em>"; }
							else if($hour>20) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",20)'>Select</a>"; }
					?> 
					</td>
					<td>
					<?php
						if (array_key_exists($row['room_number'],$start21))
							{ echo "<em>Reserved</em>"; }
							else if($hour>21) {}
						else
							{ echo "<a href='#' onclick='javascript: msg(".$row['room_number'].",21)'>Select</a>"; }
					?> 
					</td>
				<?php } ?>
				</tr> 
<?php
	}
	$count++;
}
?>
			</tbody> 
			</table>
			</div>
		</div>
	</div>
	<footer><div id="navigation-bar" style="margin-top:8px; margin-left:12px; font-size: 14px;"><?php echo $navi; ?></div></footer>