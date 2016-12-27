<?php
	session_start();
	if (isset($_SESSION['name'])) {
		include 'db_connection.php';
		$sql = 'DELETE FROM person WHERE id=' . $_GET['id'];
		if ($conn->query($sql) === TRUE) {
			echo 'success';
		} else {
			echo 'fails';
		}
		$conn->close();
	} else {
		header('Location: login.php');
	}
?>