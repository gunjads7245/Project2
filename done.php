<?php
require 'db.php';
if (isset($_GET['as'], $_GET['message'])) {
	$as = $_GET['as'];
	$item = $_GET['message'];
	switch ($as) {
		case 'done':
			/*$doneQuery = $db->prepare("update todos set isdone = 1 where id = :message and user = :user");
			$doneQuery->execute(['message'=>$item, 'user' =>$_SESSION['user_id']]);*/
			$sql = "update todos set isdone = '1'";
			$results = runQuery($sql);
			break;
	}
}
header('Location: task.php');
?>