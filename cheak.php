<?php 
$connect= mysqli_connect("localhost", "root", "", "user");


if (isset($_POST["email"])) {
	$sql="select * from user where email= '".$_POST["email"]."'";
	$result=mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) > 0) {
		echo '<span class ="text-danger"> Email exist </span>';
	}
	else
	{
		echo '<span class ="text-success"> Email doesnt exist </span>';
	}
}
if (isset($_POST["username"])) {
	$sqll="select * from user where username= '".$_POST["username"]."'";
	$resultt=mysqli_query($connect,$sqll);
	if (mysqli_num_rows($resultt) > 0) {
		echo '<span class ="text-danger"> Username exist </span>';
	}
	else
	{
		echo '<span class ="text-success"> Username doesnt exist </span>';
	}
}


?>

