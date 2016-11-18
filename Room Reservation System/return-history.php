<?php
session_start();

$tem22=$_GET['q'];


$con = mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('reservation',$con) or die ("can not select DB");


mysql_query("delete from reservation where res_id=$tem22");

header("Location:history.php");
?>