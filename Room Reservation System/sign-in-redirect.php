
<html>
<body>
<?php 
        ob_start();
	include ("connection.php");
	$username = $_GET['username'];
	$password = $_GET['password'];
	$role = '';
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	if(empty($username) or empty($password)) {
		  echo "User does not exist.";
	}
	else{
		$sql="SELECT * FROM `user` WHERE email = '".$username."'";
		$result = mysqli_query($con,$sql);
		$found_user = false;
		
		while($row = mysqli_fetch_array($result)) {
			if($username==$row['email']) $found_user=true;
			$dbpassword=$row['password'];
			
			if($password != $dbpassword) {
				header('Location: sign-in.php?username='.$username.'&error=22');
			}
			else {
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['role'] = $row['role'];
				$role = $row['role'];
				$_SESSION['first_name'] = $row['first_name'];
				$_SESSION['last_name'] = $row['last_name'];
				$_SESSION['email'] = $row['email'];
				$_SESSION['phone'] = $row['phone'];
				$_SESSION['password'] = $row['password'];
				$_SESSION['address'] = $row['address'];
				$_SESSION['city'] = $row['city'];
				$_SESSION['state'] = $row['state'];
				$_SESSION['ZIP'] = $row['ZIP'];
				
				if($role == 'Admin') {
                                    header("location: admin.php");
				}
				elseif($role == 'User') {
					header('location: user.php');
				}
				else {
					header('Location: sign-in.php?username='.$username.'&error=33');
				}
			}
		}  
	}
	
	if(!$found_user) {
		header('Location: sign-in.php?username='.$username.'&error=11');
	}

?>
</body>
</html>