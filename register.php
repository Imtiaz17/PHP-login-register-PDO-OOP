<!DOCTYPE html>
<html lang="en">
	<head>
		<title>User Registration</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		
	</head>
	<body>
<?php 
include'user.php';
	$user= new User();
	if (isset($_POST['submit'])) {
		$userg=$user->userRegistration($_POST);
	}


?>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>User Registration</h2>
				</div>
				<div class=panel-body>
<?php 
if (isset($userg)) {
	echo $userg;
}

?>
					<form accept="" method="post">
						<div class="form-group">
							Name: <input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
							Username: <input type="text" id ="username" name="username" class="form-control">
							<span id="uavail"></span>
						</div>
						<div class="form-group">
							Email: <input type="text" name="email" id="email" class="form-control" >
							<span id="avail"></span>
						</div>
						<div class="form-group">
							Password :<input type="password" name="pass" class="form-control">
						</div>
						<input type="submit" class="btn btn-info" name="submit" value="Refister Me!">
					</form>
				</div>
			</div>
		</div>
	
		<script type="text/javascript" src="js.js"></script>
	</body>
</html>