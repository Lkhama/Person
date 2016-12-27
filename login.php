<?php include 'header.php'; ?>
<?php
	if (isset($_SESSION['name'])) {
		header('Location: index.php');
	} else {
		if (isset($_POST['username']) && (isset($_POST['password']))) {
			include 'db_connection.php';
			$sql = 'SELECT * FROM users WHERE username="' . $_POST['username'] . '"';
			$result = $conn->query($sql);
			if ($result && $result->num_rows > 0) {
				$row = $result->fetch_assoc();
				if ($row['Password'] == $_POST['password']) {
					$_SESSION['name'] = $_POST['username'];
					header('Location: index.php');
				} else {
					echo "Incorrect password!";
				}
			} else {
				echo "Incorrect username!";
			} 
		} else {
			echo "Please insert username and password!";
		}
	}
?>
<form method="POST">
	<input type="text" name="username" placeholder="Insert your Username"/>
	<input type="password" name="password" placeholder="Insert your Password"/>
	<input type="submit" value="Login"/> 
</form>
<?php include 'footer.php'; ?>