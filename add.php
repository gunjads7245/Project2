<?php
require 'db.php';
if(isset($_POST['message'])) {
	$name = $_POST['message'];
	if(!empty($name)) {
		$sql = "insert into todos (message, isdone) Values ('$name', 0); ";
		$results = runQuery($sql);
	}
}
header('Location: task.php');
?>