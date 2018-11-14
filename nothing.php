<?php 

while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
		$_SESSION["name"]=$row['name'];
		$_SESSION["email"]=$row['email'];
		$_SESSION["username"]=$row['username'];

	$count=$query->rowcount();
	if ($count>0) {
		$_SESSION["email"]=$email;
		header("location:welcome.php");
	}
	else
	{
		$msg= "<div class='alert alert-danger'> You are not valid user!! </div>";
		return $msg;
	}
	}

?>