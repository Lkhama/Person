<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Persons list</title>
		<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="styles/style.css" />
		<link rel="icon" type="image/png" href="images/favicon.png" />
		<script src="scripts/jquery.js"></script>
		<script src="scripts/bootstrap.js"></script>
	</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Polariz</a>
			</div>
			<p class="navbar-text navbar-right">
				<?php if (isset($_SESSION['name'])) : ?>
					Hello <?php echo $_SESSION['name']; ?>! You're logged in.
					<a href="logout.php" onclick="return confirm('Do you really wanna logout?');">Logout</a>	
				<?php else : ?>
					You're not logged in. Please <a href="login.php">Login</a>!
				<?php endif; ?>
			</p>
			<?php
				$search='';
				if (isset($_GET['search'])) {
					$search=$_GET['search'];
				} 
			?>
			<form class="navbar-form navbar-right" action="index.php">
				<div class="form-group">
					<input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $search; ?>">
				</div>
				<button type="submit" class="btn btn-default">Search</button>
			</form>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-10">