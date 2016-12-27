<?php include 'header.php'; ?>
<?php
	if (isset($_SESSION['name'])) {
		include 'db_connection.php';
		$sql = 'INSERT INTO person (name, email, bdate) VALUES ("' . $_POST['name'] . '", "' . $_POST['email'] . '", "' . $_POST['byear'] . '-' . $_POST['bmonth'] . '-' . $_POST['bday'] . '")';
		if ($conn->query($sql) === TRUE) {
			echo 'New person registered. <a href="index.php">Go to persons list</a>';
		} else {
			echo 'Error: ' . $sql . '<br>' . $conn->error;
		}
		$conn->close();
	} else {
		header('Location: login.php');
	}
?>
<?php include 'footer.php'; ?>