<?php
if(isset($_POST['submit'])){
	if(isset($_POST['sfname'])){
		$firstname = $_POST['sfname'];
	}
	if(isset($_POST['suser'])){
		$user = $_POST['suser'];
	}
	if(isset($_POST['spass'])){
		$password = $_POST['spass'];
	}
	if(isset($_POST['slname'])){
		$lastname = $_POST['slname'];
	}
	if(isset($_POST['semail'])){
		$email = $_POST['semail'];
	}
	if(isset($_POST['sconfpass'])){
	$confpass = $_POST['sconfpass'];
	}

	// if (!$password=$confpass) {
	// 	echo "Password does not match!";
	// }

	//$dbhost = "athena01.fhict.local";
	//$password = "GCBKQ7ecdd";
	//$dbuser = "dbi302277"; 
	//$dbname = "dbi302277";

	$dbuser = "root";
	$dbpassword = "vlad";
	$dbhost = "localhost"; 
	$dbname = "blindsnow";



	//$count = $query->rowCount();


	$sql = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpassword);
	$query = $sql->prepare("INSERT INTO users (firstName, lastName, user, email, password) VALUES (:firstname,:lastname,:user,:email,:password);");
		$query->bindParam(':firstname', $firstname);
		$query->bindParam(':user', $user);
		$query->bindParam(':password', $password);
		$query->bindParam(':lastname', $lastname);
		$query->bindParam(':email', $email);
	
	if($query->execute())
	{
		session_start();
		header("Location: Boards.php");
		$_SESSION['username'] = $user;
	} else {
		echo "there was an error!";
	}
}
//header("Location: Snow.php");
//exit;
?>
