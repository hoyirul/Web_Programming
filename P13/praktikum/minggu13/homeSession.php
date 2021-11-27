<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<?php 
	session_start();

	if ($_SESSION["status"] == "login") {
		echo "welcome" . $_SESSION["username"];
	
	?>
	<br><a href="sessionLogout.php">Log Out</a>
	<?php 
	}
else{
	echo "You are not logged in. Please"
	?>
	<a href="sessionLoginForm"></a>
	<?php 
	}
?>
</body>
</html>