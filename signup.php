<?php
session_start();
include('db_config.php');

$user = $_POST['User-type'];
$username = $_POST['Username'];
$pass = $_POST['Password'];
$phone = $_POST['Contact'];
$address = $_POST['Address'];
$email = $_POST['Email'];

if ($user == 'Donor'){
	$s = "select * from donor where NGO_ID = '$username";
	$res = mysqli_query($conn, $s);

	$num = mysqli_num_rows($res);
	if($num == 1){
		alert("NGO already exists. Try using another username");
		header('login.html');
	}
	else{
		$query = "insert into ngo values('$username','$sername','$phone','$address','$email','$pass')";
		mysqli_query($conn, $query);
		header('home.html');
	}
}
elseif ($user == 'NGO') {
	$s = "select * from ngo where username = '$username";
	$res = mysqli_query($conn, $s);

	$num = mysqli_num_rows($res);
	if($num == 1){
		alert("Username already exists. Try with another");
		header('login.html');
	}
	else{
		$query = "insert into donor values('$username','$pass','$phone','$address','$email')";
		mysqli_query($conn, $query);
		header('home.html');
	}
}





?>