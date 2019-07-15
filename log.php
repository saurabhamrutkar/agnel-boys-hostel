<?php


include "db1.php";
session_start();
if(!isset($_SESSION['username'])){
    header("Location:login/login.php");
}

if(isset($_POST['saurabh']))
{
	 $username = $_POST['username'];
	
	$pass = $_POST['pass'];

	$username = mysqli_real_escape_string($connect,$username);
	$pass = mysqli_real_escape_string($connect,$pass);

	$qu = "SELECT * FROM registration where username = '{$username}'";
	$wer = mysqli_query($connect,$qu);
/*
	if($wer){
		echo " welcome ".$username;
	}else{
		echo "sorry";
	}*/

	while($Row = mysqli_fetch_array($wer)){
		$city = $Row['city'];
		$dbusername  = $Row['username'];
		$dbpasswrd = $Row['password']; 
		$email = $Row['email'];
		$room = $Row['roomno'];
	}

	if($username == "Admin" && $pass == $dbpasswrd){
		$_SESSION['username'] = $username;
		$_SESSION['city'] = $city;
		$_SESSION['emel'] = $email;
		$_SESSION['room'] = $room;
		header("Location:User/admin.php");
	}elseif ($username !== $dbusername  && $pass !== $dbpasswrd) {

		
		header("Location:login/login.php");

	}elseif ($username == $dbusername && $pass ==  $dbpasswrd) {
		$_SESSION['username'] = $dbusername;
		$_SESSION['city'] = $city;
		$_SESSION['emel'] = $email;
		$_SESSION['room'] = $room;
		header("Location:User/index.php");
	}else{
		header("Location:login/login.php");
	}
}

?>