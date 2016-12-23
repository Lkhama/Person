<?php include 'header.php'; ?>
<?php
	if (!isset($_SESSION['name'])) {
		header('Location: login.php');
	}
?>
<?php
	include 'db_connection.php';
	$sql = 'SELECT * FROM person WHERE id=' . $_GET['id'];
	$result = $conn->query($sql);
?>
<?php if ($result->num_rows > 0) : ?>
	<?php $row = $result->fetch_assoc(); ?>
	<form action="update.php?id=<?php echo $row['id']; ?>" method='POST'>
		<h1>Edit Person</h1>
		Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"></input>
		</br>
		E-mail: <input type="text" name="email" value="<?php echo $row['email']; ?>"></input>
		</br>
		Birthday:
		Year:
		<select name="byear">
			<?php for ($i = 1950; $i <= 2016; $i=$i+1) : ?>
				<option <?php if(substr($row["bdate"], 0, 4) == $i) { ?>selected="selected"<?php } ?>><?php echo $i; ?></option>
			<?php endfor; ?>
		</select>
		Month:
		<select name="bmonth"></div></p>
			<?php for ($i = 1; $i <= 12; $i=$i+1) : ?>
				<option <?php if(substr($row["bdate"], 5, 2) == $i) { ?>selected="selected"<?php } ?>><?php echo $i; ?></option>
			<?php endfor; ?>
		</select>
		</select>
		Day:
		<select name="bday"></div></p>
			<?php for ($i = 1; $i <= 31; $i=$i+1) : ?>
				<option <?php if(substr($row["bdate"], 8, 2) == $i) { ?>selected="selected"<?php } ?>><?php echo $i; ?></option>
			<?php endfor; ?>
		</select>
		<input type="submit">
	</form>
<?php  else : ?>
	Person not found!
<?php endif; ?>
<?php $conn->close(); ?>
<?php include 'footer.php'; ?>