<?php
	session_start();
?>
<!DOCTYPE>
<html>
<head>
</head>
<body>
	<?php 
	echo "Favorite color is ". $_SESSION["favcolor"] . "<br>";
	echo "Favorite animal is ". $_SESSION["favanimal"] . "<br>";
	?>
</body>
</html>