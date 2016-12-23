<?php include 'header.php'; ?>
<?php
	if (!isset($_SESSION['name'])) {
		header('Location: login.php');
	}
?>
<?php
	include 'db_connection.php';
	$sql = 'DELETE FROM person WHERE id=' . $_GET['id'];
	if ($conn->query($sql) === TRUE) {
		echo 'Person deleted successfully. <a href="index.php">Go to persons list</a>';
	} else {
		echo 'Error deleting record: ' . $conn->error;
	}
	$conn->close();
?>
<?php include 'footer.php'; ?>