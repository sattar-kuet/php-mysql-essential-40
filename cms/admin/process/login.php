<?php
session_start();
include('../../database/connect.php');

// Login 
extract($_POST);
//$email
$password = sha1($password);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$result = mysqli_query($connection,$sql);

if(mysqli_num_rows($result)==1){
  // login
  // redirect to dashboard
	header('Location:../dashboard.php');
}else{
	$_SESSION['warning_msg'] = 'Email/Password incorrect';
	header('Location:../login.php');
}

?>