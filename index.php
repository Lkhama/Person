<?php include 'header.php'; ?>
	<?php
		$search="";
		if (isset($_GET["search"])) {
			$search=$_GET["search"];
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
		$number_sql = "SELECT COUNT(id) AS num FROM person WHERE name LIKE '%" . $search . "%'";
		$number_result = $conn->query($number_sql);
		$number_of_rows = $number_result->fetch_assoc()['num'];
		$page=1;
		$perpage=10;
		if (isset($_GET["page"])) {
			$page=$_GET["page"];
		}
		$sql = "SELECT id, name FROM person WHERE name LIKE '%" . $search . "%' LIMIT " . (($page-1)*$perpage) . ", " . $perpage;
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo "<table><tr><th>Name</th><th>Link</th></tr>";
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["name"] . "</td><td><a href='detail.php?id=" . $row["id"] . "'>detail</a></td></tr>";
			}
			if (isset($_SESSION['name'])) {
				echo "<tr><td colspan='2' align='center'><a href='new.php'>Add person</a></td></tr>";
			}
			echo '</table>';
		} else {
			echo "0 results";
		}
		$conn->close();
	?>
	<div class="pagination">
		<?php
			for ($i = 1; $i <= ceil($number_of_rows/$perpage); $i=$i+1) {
				if ($i == $page) {
					echo $i . " ";
				} else {
					echo "<a href='index.php?page=" . $i . "&search=" . $search . "'>" . $i . "</a> ";
				}
			}
		?>
	</div>
<?php include 'footer.php'; ?>