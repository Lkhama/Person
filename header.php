<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Persons list</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
	</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo_container">
				<a href="index.php">Polariz</a>
				<div class="hometip">Click to home</div>
			</div>
		</div>
		<div class="loginbar">
			<?php if (isset($_SESSION['name'])) : ?>
				Hello <?php echo $_SESSION['name']; ?>! You're logged in.
				<a href="logout.php" onclick="return confirm('Do you really wanna logout?');">Logout</a>	
			<?php else : ?>
				You're not logged in. Please <a href="login.php">Login</a>!
			<?php endif; ?>
		</div>
		<div class="content">