<?php
class Database{
		private $servername="localhost";
		private$username="root";
		private$password='';
		private$name='user';
		public $pdo;
public function __construct(){
	if(!isset($this->pdo)){
		try {
		$conn=new PDO("mysql:host=".$this->servername."; dbname=".$this->name,$this->username, $this->password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$this->pdo=$conn;
		return $this->pdo;
			} 
		catch (PDOException $e) {
			die("connect is faild because " .$e->getMessage());
			
		}
	}
	 
	 }


	 }



	
?>