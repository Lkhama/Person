<?php include 'header.php'; ?>
<?php
	include 'db_connection.php';
	$sql = "SELECT * FROM person WHERE id=" . $_GET['id'];
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
			<td><?php echo $row["bdate"]; ?></td>
		</tr>
		<tr>
			<td align="right"><b>Age</b></td>
			<td><?php echo (date("Y")-substr($row["bdate"], 0, 4)); ?></td>
		</tr>
		<?php if (isset($_SESSION['name'])) : ?>
		<tr>
				<td colspan="2" align='center'>
					<a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a>
					<a href="delete.php?id=<?php echo $row["id"]; ?>" onclick='return confirm("Do you really wanna delete this person?");'>Delete</a>
				</td>
			</tr>
		<?php endif; ?>
	</table>
<?php else : ?>
	Person not found!
<?php endif; ?>
<?php $conn->close(); ?>
<?php include 'footer.php'; ?>