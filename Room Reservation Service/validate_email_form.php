<?php
error_reporting(E_ALL ^ E_DEPRECATED);
session_start();
$q =$_GET['q'];

$con = mysql_connect('localhost','root','root') or die(mysql_error());
mysql_select_db('finalproject') or die ("can not select DB");

$sql=mysql_query("SELECT * FROM user WHERE email='".$q."'");



$number=mysql_num_rows($sql);


if (!filter_var($q, FILTER_VALIDATE_EMAIL)) {
 define('HEADING_TITLE1', 'Invalid email format.');
       $emailErr = "Invalid email format"; 
$_SESSION['email_error']=$emailErr;
$_SESSION['email_error1']="";
echo '<font color="red">' . HEADING_TITLE1 . '</font><br>';
die();
     }


if($number != 0) {
  define('HEADING_TITLE', 'This email has been registered,please change another email.');
  $emailErr ="this email has been registered,please change another email";
$_SESSION['email_error']=$emailErr;
$_SESSION['email_error1']="";
echo '<font color="red">' . HEADING_TITLE . '</font><br>';  
     
die();
 }
else{$emailErr = "congradulation!This email can be used";
  define('HEADING_TITLE2', 'Congradulation!This email can be used');
$_SESSION['email_error']=$emailErr;
$_SESSION['email_error1']='√';
$_SESSION['sess_email11']=$q;
echo '<font color="green">' . HEADING_TITLE2 . '</font><br>'; 
}



?>




