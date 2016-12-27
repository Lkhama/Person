<?php include 'header.php'; ?>
<div class="page-header">
	<h3>Person list</h3>
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
	<?php while($row = $result->fetch_assoc()) : ?>
		<div class="person" id="person<?php echo $row['id']; ?>">
			<a href="detail.php?id=<?php echo $row['id']; ?>" class="name"><?php echo $row['name']; ?></a>
			<a href="#_" class="btn btn-danger btn-xs pull-right" onclick="remove(<?php echo $row['id']; ?>);return false;">
				<span class="glyphicon glyphicon-trash"></span>
				Delete
			</a>
		</div>
	<?php endwhile; ?>
<?php else : ?>
	<div class="well">There is no person.</div>
<?php endif; ?>
<?php $conn->close(); ?>
<div class="text-center">
	<ul class="pagination">
		<?php for ($i = 1; $i <= ceil($number_of_rows/$perpage); $i=$i+1) : ?>
			<?php if ($i == $page) : ?>
				<li class="active"><a href="#"><?php echo $i; ?></a></li>
			<?php else : ?>
				<li><a href="index.php?page=<?php echo $i; ?>&search=<?php echo $search; ?>"><?php echo $i; ?></a></li>
			<?php endif; ?>
		<?php endfor; ?>
	</ul>
</div>
<script>
	function remove(id) {
		if (confirm('Do you really wanna delete this person?')) {
			$.get('delete.php?id=' + id, function() {
				$('div#person' + id).slideUp(500, function() {
					$(this).remove();
				});
			});
		}
	};
</script>
<?php include 'footer.php'; ?>