<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login User</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
		include'user.php';
		$user= new User();
		if (isset($_POST['submit'])) {
		$userlogin=$user->userLogin($_POST);
		}
		?>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Log-In User</h2>
				</div>
				<div class=panel-body>
					<?php
					if (isset($userlogin)) {
					echo $userlogin;
					}?>
					<form accept="" method="post">
						<div class="form-group">
							Email: <input type="text" name="email" class="form-control" >
						</div>
						<div class="form-group">
							Password :<input type="password" name="pass" class="form-control" >
						</div>
						<input type="submit" class="btn btn-info" name="submit" value="Login">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>