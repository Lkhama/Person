<?php include 'header.php'; ?>
<?php
	if (!isset($_SESSION['name'])) {
		header('Location: login.php');
	}
?>
<div class="top">
	<span class="title">New Persons Registration</span>
</div>
<form action="create.php" method='POST'>
	Name:<input type="text" name='name'></input>
	</br>
	E-mail:<input type="text" name='email'></input>
	</br>
	Birthday:
	Year:
	<select name="byear">
		<?php for ($i = 1950; $i <= 2016; $i=$i+1) : ?>
			<option><?php echo $i; ?></option>
		<?php endfor; ?>
	</select>
	Month:
	<select name="bmonth">
		<?php for ($i = 1; $i <= 12; $i=$i+1) : ?>
			<option><?php echo $i; ?></option>
		<?php endfor; ?>
	</select>
	Day:
	<select name="bday">
		<?php for ($i = 1; $i <= 31; $i=$i+1) : ?>
			<option><?php echo $i; ?></option>
		<?php endfor; ?>
	</select>
	</br>
	<input type="submit">
</form>
<?php include 'footer.php'; ?>