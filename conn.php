<?php

		$servername="localhost";
		$username="root";
		$password='';
		$name='user';

		try {
		$conn=new PDO("mysql:host=$servername; dbname=$name","$username","$password");
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	
		} catch (PDOException $e) {
			die("connect is faild".$e->getMessage());
			
		}

?>