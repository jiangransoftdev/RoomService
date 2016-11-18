<?php
include("connection.php");

$select_floors="";

if(!empty($_POST['g_room'])) {
	$select_floors = $_POST['g_room'];
}
$resul="";

$rm_info_query = "SELECT * FROM room where room_number like '".$select_floors."%' order by room_number";
$rm_results = mysqli_query($con, $rm_info_query);

while($row = mysqli_fetch_array($rm_results))  {
	$resul .= "<option value=".$row['room_number'].">".$row['room_number']."</option>";
}
?>

<select id="selective-room" class="view-data-year selective-year" name="users" onchange="selectRoom()">
<option value="">Room</option>
<?php echo $resul;?>
</select>