<?php
include "db1.php";
if(isset($_POST['sub'])){
	$name= $_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];


	$query = "INSERT INTO contact(name,email,subject,message) values('$name','$email','$subject','$message')";
	$r = mysqli_query($connect,$query);
	
}


?>