<?php include 'header.php'; ?>
<?php
	if (isset($_SESSION['name'])) {
		header('Location: index.php');
	} else {
		if (isset($_POST['name'])) {
			$_SESSION['name'] = $_POST['name'];
			header('Location: index.php');
		}
	}
?>
<form method="POST">
	<input type="text" name="name" placeholder="Insert your name"/>
	<input type="submit" value="Login"/> 
</form>
<?php include 'footer.php'; ?>