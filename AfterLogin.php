<?php
if(isset($_POST['login'])){
	if(isset($_POST['username'])){
		$user = $_POST['username'];
	}
	if(isset($_POST['password'])){
		$password = $_POST['password'];
	}

	//$dbhost = "athena01.fhict.local";
	//$password = "GCBKQ7ecdd";
	//$dbuser = "dbi302277"; 
	//$dbname = "dbi302277";

	$dbuser = "root";
	$dbpassword = "vlad";
	$dbhost = "localhost"; 
	$dbname = "blindsnow";

	$sql = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpassword);
	$query = $sql->prepare("SELECT Count(*) FROM users WHERE user = :username AND password = :password");
		$query->bindParam(':username', $username);
		$query->bindParam(':password', $password);
		$query->execute();

		$count = $query->rowCount();

		if ($count == 1) {
			session_start();
			header("Location: AdventurecornerPrivate.php");
			$_SESSION['username'] = $user;
		} else {
			echo "Error!";
		}

}