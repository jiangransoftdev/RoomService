
<html>
<body>
<?php
	// remove all session variables
	session_unset();

	// destroy the session
	session_destroy();

	mysqli_close($con);

	header('Location: sign-in.php');
?>
</body>
</html>
