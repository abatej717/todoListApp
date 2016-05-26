<?php
	include("obg/dbConn.php");

	//echo "Hello";

	$taskName = $_POST['taskInput'];

	//echo $taskName;

	$sql = "INSERT INTO todoTasks(taskName) VALUES ('".$taskName."')";
	//echo $sql;

	$rec = $conn->query($sql);

	header("Location:index.php");

?>