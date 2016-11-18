<?php
    $dbhost = "localhost";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "finalproject";

    $con = mysqli_connect($dbhost, $dbusername, $dbpassword);
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
	
	mysqli_select_db($con, $dbname);
?>