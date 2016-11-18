
<html>
<head>

</head>
<body>

<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);

include("connection.php");

$first_name=$_SESSION['sess_fn11'];
$last_name=$_SESSION['sess_ln11'];
$email=$_SESSION['sess_email11'];
$phone=$_SESSION['sess_phone11'];
$password=$_SESSION['sess_fp11'];
$address=$_SESSION['sess_addr11'];
$city=$_SESSION['sess_city11'];
$state=$_SESSION['sess_state11'];
$zip=$_SESSION['sess_ZIP'];

$insert_sql = 
"INSERT INTO user(user_id,role,first_name,last_name,email,phone,password,address,city,state,ZIP) 
VALUES(null,'user','$first_name','$last_name','$email','$phone','$password','$address','$city','$state','$zip')";

$result = mysqli_query($con, $insert_sql);

if($result)
{
	echo "<div style='font-size: 24px;'>";

	echo "Congradulations! Your registration is successful.", "<br />";
	echo "Username:", $email,'<br />';
	echo "Password:",$password,'<br />','<br />';

	echo "Click <a href='sign-in.php'>here</a> to sign in your account.",'<br />';

	echo "</div>";
}
else
{
	echo "Error! Please <a href='sign-up.php'>return</a> and <a href='sign-up.php'>register</a> again.";
}
?>
</body>





