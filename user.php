<?php
session_start();
include'db.php';
class User{
	private $db;
	public function __construct()
	{
		$this->db= new Database();
	}
	
	public function userRegistration($data)
	{
		$name          =$data['name'];
		$username      =$data['username'];
		$email         =$data['email'];
		$pass          =$data['pass'];
		
	
	if($name==""| $username==''|$email==''|$pass=='')
	{
		$msg= "<div class='alert alert-danger'>Field must not be empty</div>";
		return $msg;
	}
	if (strlen($username)<3)
	{
		$msg= "<div class='alert alert-danger'>Username must be greater then 3 word!</div>";
		return $msg;
	}
	elseif (preg_match('/[^a-z0-9_-]+/i',$username)) {
		$msg= "<div class='alert alert-danger'>Username have to contains alphanumeric charecters! </div>";
		return $msg;
	}
	if (filter_var($email,FILTER_VALIDATE_EMAIL)===false) {
		$msg= "<div class='alert alert-danger'>Email address is not valid!! </div>";
		return $msg;
	}
	$sql="insert into user(name, username, email,password) values(:name, :username,:email,:password)";
	$query=$this->db->pdo->prepare($sql);
	$query->bindValue(':name', $name);
	$query->bindValue(':username', $username);
	$query->bindValue(':email', $email);
	$query->bindValue(':password', $pass);
	$result=$query->execute();
	if ($result) {
		$msg= "<div class='alert alert-success'> You are registerd now!! </div>";
		return $msg;
	}
	else
	{
		$msg= "<div class='alert alert-danger'> Sorry!! </div>";
		return $msg;
	}
	}
	
public function userLogin($data)
{
	$email         =$data['email'];
	$pass          =md5($data['pass']);
	if($email==''|$pass=='')
	{
		$msg= "<div class='alert alert-danger'>Field must not be empty</div>";
		return $msg;
	}
	if (filter_var($email,FILTER_VALIDATE_EMAIL)===false) {
		$msg= "<div class='alert alert-danger'>Email address is not valid!! </div>";
		return $msg;
	}
	else
	{
	$sql=" select * from user where email= :email AND password= :password LIMIT 1";
	$query=$this->db->pdo->prepare($sql);
	$query->execute(
		array(
				'email'=>$_POST['email'],
				'password'=> $_POST['pass']
		)
	);

	$count=$query->rowcount();
	if ($count>0) {
		$_SESSION["email"]=$_POST["email"];
		header("location:welcome.php");
	}
	else
	{
		$msg= "<div class='alert alert-danger'> You are not valid user!! </div>";
		return $msg;
	}

	while ($row=$query->fetch(PDO::FETCH_ASSOC)) {
		$_SESSION["name"]=$row['name'];
		$_SESSION["email"]=$row['email'];
		$_SESSION["username"]=$row['username'];
	}
	}
	
}
}
?>