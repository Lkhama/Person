<?php include 'header.php'; ?>
<?php
	include 'db_connection.php';
	$sql = 'SELECT * FROM person WHERE id=' . $_GET['id'];
	$result = $conn->query($sql);
?>
<?php if ($result->num_rows > 0) : ?>
	<?php $row = $result->fetch_assoc(); ?>
	<div class="top">
		<span class="title">Details of <?php echo $row["name"]; ?></span>
	</div>
	<table border="0">
		<tr>
			<td align="right"><b>Email</b></td>
			<td><?php echo $row["email"]; ?></td>
		</tr>
		<tr>
			<td align="right"><b>Birthday</b></td>
			<td id="birthday"><?php echo $row["bdate"]; ?></td>
		</tr>
		<tr>
			<td align="right"><b>Age</b></td>
			<td id="age"></td>
		</tr>
		<?php if (isset($_SESSION['name'])) : ?>
		<tr>
				<td colspan="2" align='center'>
					<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
					<a href="delete.php?id=<?php echo $row['id']; ?>" onclick='return confirm("Do you really wanna delete this person?");'>Delete</a>
				</td>
			</tr>
		<?php endif; ?>
	</table>
<?php else : ?>
	Person not found!
<?php endif; ?>
<?php $conn->close(); ?>
<script>
	$('td#age').text(new Date().getFullYear() - parseInt($('td#birthday').text().substr(0, 4)) + ' years old');
</script>
<?php include 'footer.php'; ?>