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
	<div class="row head">
		<div class="cell">Name</div>
		<div class="cell">Actions</div>
	</div>
	<?php while($row = $result->fetch_assoc()) : ?>
		<div class="row person" id="person<?php echo $row['id']; ?>">
			<div class="cell"><?php echo $row['name']; ?></div>
			<div class="cell">
				<a href="detail.php?id=<?php echo $row['id']; ?>">Details</a>
				<a href="#_" onclick="remove(<?php echo $row['id']; ?>);return false;">Delete</a>
			</div>
		</div>
	<?php endwhile; ?>
	<?php if (isset($_SESSION['name'])) : ?>
		<div class="row foot">
			<a href="new.php">Add person</a>
		</div>
	<?php endif; ?>
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
<script>
	function remove(id) {
		if (confirm('Do you really wanna delete this person?')) {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					var deleting_element = document.getElementById('person' + id);
					deleting_element.className += ' deleting';
					setTimeout(function() {
						deleting_element.remove();
					}, 500);
				}
			};
			xhttp.open("GET", "delete.php?id=" + id, true);
			xhttp.send();
		}
	};
</script>
<?php include 'footer.php'; ?>