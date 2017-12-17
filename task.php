<?php
require 'db.php';
$fname = $_GET['fname'];
$lname = $_GET['lname'];
echo "Welcome ".$fname." ".$lname;
$errors = "";
/* Add a task */ 
if (isset($_POST['submit'])) {
	$task = $_POST['task'];
	if (empty($task)) {
		$errors = "Fill in task";
	}else{
		$sql = "insert into todos (message) Values ('$task')";
		$results = runQuery($sql);
		header('Location: task.php');
	}	
}
/* Delete a task */ 
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$sqlll = "delete from todos where id='$id'";
	$result = runQuery($sqlll);
	header('Location: task.php');
}
/* Edit a task */ 
if (isset($_POST['update'])) {
	$edit = $_POST['edit'];
	$sq = "update todos set message = '$edit' where id='$id'";
	$result = runQuery($sq);
	header('Location: task.php');
}
$sqll = "select id, message, isdone from todos";
$tasks = runQuery($sqll);
?>

<html lang="en">
<head>
	<link rel="stylesheet" href="todo.css">
	<title>TO do List</title>
</head>
<body>
	<div class = "heading">
		<h2>Todo List</h2>
	</div>

	<form method="POST" action="task.php">
	<?php if (isset($errors)) { ?>
		<p><?php echo $errors; ?></p>
	<?php } ?>	
		<input type="text" name="task" class="task_input">
		<button type="submit" class="task_btn" name="submit">Add Task</button>
	</form>	

	<table>
		<thead>
			<tr>
				<th>N</th>
				<th>Task</th>
				<th>Delete</th>
				<th>Edit</th>
				<th>Complete</th>
			</tr>
		</thead>

		<tbody>
			<?php $i = 1; foreach($tasks as $thing) { ?>
				<tr>
					<td><?php echo $i; ?></td>
					<td class="task"><?php echo $thing['message']; ?></td>
					<td class="delete">
						<a href="task.php?del=<?php echo $thing['id']; ?>">X</a>
					</td>
					<td class="edit"><?php echo $edit['message']; ?>
						<input type="text" name="edit" class="edit_input">
						<button type="submit" class="edit_btn" name="update">Edit</button>
					</td>
				</tr>
			<?php $i++; } ?>

		</tbody>
	</table>

	<br><br><br><br> <a href="login.html">Logout</a>
</body>	
</html>