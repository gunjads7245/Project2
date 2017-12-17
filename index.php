<?php
require 'db.php';
$action = $_POST['action'];
if ($action == NULL) {
	$action = 'login_page';
}	
if ($action == 'login_page') {
	header('Location: login.html');
}else if ($action =='test_user_valid') {
	$email = $_POST['reg_uname'];
	$pass = $_POST['reg_password'];
	$sql = "select * from accounts where email='$email'";
	$results = runQuery($sql);
	if (count($results) > 0) {
		if($results[0]['password'] == $pass) {
			$fname = $results[0]['fname'];
			$lname = $results[0]['lname'];
			header("Location: task.php?fname=$fname&lname=$lname");
		}else {
			header('Location: badinfo.html');
		}
	}else{
		header('Location: badinfo.html');
	}
}else if ($action == 'register') {
	$email = $_POST['email'];
	$sql = "select * from accounts where email = '$email' ";
	$results = runQuery($sql);
	if ((count($results) == 0)) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$birth = $_POST['birthday'];
		$gender = $_POST['gender'];
		$pass = $_POST['password'];
		$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) Values ('$email', '$fname', '$lname', '$phone', '$birth', '$gender', '$pass');";
		$results = runQuery($sql);
		header("Location: login.html");
	}else{
		header('Location: existedname.html');
	}	
}	
?>