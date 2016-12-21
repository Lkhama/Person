<?php include 'header.php'; ?>
	<?php
		$search='';
		if (isset($_GET['search'])) {
			$search=$_GET['search'];
		} 
	?>
	<div class="top">
		<span class="title">Persons</span>
		<form class="search">
			<input type="text" name="search" value="<?php echo $search; ?>">
			<input type="submit" value="search"> 
		</form>
	</div>
	<?php
		include 'db_connection.php';
		$number_sql = 'SELECT COUNT(id) AS num FROM person WHERE name LIKE "%' . $search . '%"';
		$number_result = $conn->query($number_sql);
		$number_of_rows = $number_result->fetch_assoc()['num'];
		$page=1;
		$perpage=10;
		if (isset($_GET['page'])) {
			$page=$_GET['page'];
		}
		$sql = 'SELECT id, name FROM person WHERE name LIKE "%' . $search . '%" LIMIT ' . (($page-1)*$perpage) . ', ' . $perpage;
		$result = $conn->query($sql);
	?>
	<?php if ($result->num_rows > 0) : ?>
		<table>
			<tr>
				<th>Name</th>
				<th>Link</th>
			</tr>
			<?php while($row = $result->fetch_assoc()) : ?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><a href="detail.php?id=<?php echo $row['id']; ?>">detail</a></td>
				</tr>
			<?php endwhile; ?>
			<?php if (isset($_SESSION['name'])) : ?>
				<tr>
					<td colspan="2" align="center"><a href="new.php">Add person</a></td>
				</tr>
			<?php endif; ?>
		</table>
	<?php else : ?>
		0 results
	<?php endif; ?>
	<?php $conn->close(); ?>
	
	<div class="pagination">
		<?php for ($i = 1; $i <= ceil($number_of_rows/$perpage); $i=$i+1) : ?>
			<?php if ($i == $page) : ?>
				<?php echo $i; ?> 
			<?php else : ?>
				<a href="index.php?page=<?php echo $i; ?>&search=<?php echo $search; ?>"><?php echo $i; ?></a> 
			<?php endif; ?>
		<?php endfor; ?>
	</div>
<?php include 'footer.php'; ?>