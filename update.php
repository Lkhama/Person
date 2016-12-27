<?php
	if (!isset($_SESSION['name'])) {
		include 'db_connection.php';
		$sql = 'UPDATE person SET name="' . $_POST['name'] . '", email="' . $_POST['email'] . '", bdate="' . $_POST['byear'] . '-' . $_POST['bmonth'] . '-' . $_POST['bday'] . '" WHERE id=' . $_GET['id'];
		if ($conn->query($sql) === TRUE) {
			header('Location: detail.php?id=' . $_GET['id']);
		} else {
			echo 'Error: ' . $sql . '<br>' . $conn->error;
		}
		$conn->close();
	} else {
		header('Location: login.php');
	}
?>