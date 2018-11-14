<?php

session_start();
if (!isset($_SESSION['email'])) {
	header("Location: login.php");
 		exit();
}
else
{
	echo "welcome <h2>" .$_SESSION['username']."</h2>";
	echo "<br>";

	echo "<a href='logout.php'>Logout</a>";
}
?>