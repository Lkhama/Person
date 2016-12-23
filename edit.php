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
		Name: <input type="text" name='name' value='<?php echo $row['name']; ?>'></input>
		</br>
		E-mail: <input type="text" name='email' value='<?php echo $row['email']; ?>'></input>
		</br>
		Birthday:
		Year:
		<select name="byear">
			<option <?php if(substr($row["bdate"], 0, 4) == "1967") { ?>selected="selected"<?php } ?>>1967</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1968") { ?>selected="selected"<?php } ?>>1968</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1969") { ?>selected="selected"<?php } ?>>1969</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1970") { ?>selected="selected"<?php } ?>>1970</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1971") { ?>selected="selected"<?php } ?>>1971</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1972") { ?>selected="selected"<?php } ?>>1972</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1973") { ?>selected="selected"<?php } ?>>1973</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1974") { ?>selected="selected"<?php } ?>>1974</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1975") { ?>selected="selected"<?php } ?>>1975</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1976") { ?>selected="selected"<?php } ?>>1976</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1977") { ?>selected="selected"<?php } ?>>1977</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1978") { ?>selected="selected"<?php } ?>>1978</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1979") { ?>selected="selected"<?php } ?>>1979</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1980") { ?>selected="selected"<?php } ?>>1980</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1981") { ?>selected="selected"<?php } ?>>1981</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1982") { ?>selected="selected"<?php } ?>>1982</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1983") { ?>selected="selected"<?php } ?>>1983</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1984") { ?>selected="selected"<?php } ?>>1984</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1985") { ?>selected="selected"<?php } ?>>1985</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1986") { ?>selected="selected"<?php } ?>>1986</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1987") { ?>selected="selected"<?php } ?>>1987</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1988") { ?>selected="selected"<?php } ?>>1988</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1989") { ?>selected="selected"<?php } ?>>1989</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1990") { ?>selected="selected"<?php } ?>>1990</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1991") { ?>selected="selected"<?php } ?>>1991</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1992") { ?>selected="selected"<?php } ?>>1992</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1993") { ?>selected="selected"<?php } ?>>1993</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1994") { ?>selected="selected"<?php } ?>>1994</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1995") { ?>selected="selected"<?php } ?>>1995</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1996") { ?>selected="selected"<?php } ?>>1996</option>
			<option <?php if(substr($row["bdate"], 0, 4) == "1997") { ?>selected="selected"<?php } ?>>1997</option>
		</select>
		Month:
		<select name="bmonth"></div></p>
			<option <?php if(substr($row["bdate"], 5, 2) == "1") { ?>selected="selected"<?php } ?>>1</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "2") { ?>selected="selected"<?php } ?>>2</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "3") { ?>selected="selected"<?php } ?>>3</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "4") { ?>selected="selected"<?php } ?>>4</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "5") { ?>selected="selected"<?php } ?>>5</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "6") { ?>selected="selected"<?php } ?>>6</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "7") { ?>selected="selected"<?php } ?>>7</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "8") { ?>selected="selected"<?php } ?>>8</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "9") { ?>selected="selected"<?php } ?>>9</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "10") { ?>selected="selected"<?php } ?>>10</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "11") { ?>selected="selected"<?php } ?>>11</option>
			<option <?php if(substr($row["bdate"], 5, 2) == "12") { ?>selected="selected"<?php } ?>>12</option>
		</select>
		Day:
		<select name="bday"></div></p>
			<option <?php if(substr($row["bdate"], 8, 2) == "1") { ?>selected="selected"<?php } ?>>1</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "2") { ?>selected="selected"<?php } ?>>2</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "3") { ?>selected="selected"<?php } ?>>3</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "4") { ?>selected="selected"<?php } ?>>4</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "5") { ?>selected="selected"<?php } ?>>5</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "6") { ?>selected="selected"<?php } ?>>6</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "7") { ?>selected="selected"<?php } ?>>7</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "8") { ?>selected="selected"<?php } ?>>8</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "9") { ?>selected="selected"<?php } ?>>9</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "10") { ?>selected="selected"<?php } ?>>10</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "11") { ?>selected="selected"<?php } ?>>11</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "12") { ?>selected="selected"<?php } ?>>12</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "13") { ?>selected="selected"<?php } ?>>13</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "14") { ?>selected="selected"<?php } ?>>14</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "15") { ?>selected="selected"<?php } ?>>15</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "16") { ?>selected="selected"<?php } ?>>16</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "17") { ?>selected="selected"<?php } ?>>17</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "18") { ?>selected="selected"<?php } ?>>18</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "19") { ?>selected="selected"<?php } ?>>19</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "20") { ?>selected="selected"<?php } ?>>20</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "21") { ?>selected="selected"<?php } ?>>21</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "22") { ?>selected="selected"<?php } ?>>22</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "23") { ?>selected="selected"<?php } ?>>23</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "24") { ?>selected="selected"<?php } ?>>24</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "25") { ?>selected="selected"<?php } ?>>25</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "26") { ?>selected="selected"<?php } ?>>26</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "27") { ?>selected="selected"<?php } ?>>27</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "28") { ?>selected="selected"<?php } ?>>28</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "29") { ?>selected="selected"<?php } ?>>29</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "30") { ?>selected="selected"<?php } ?>>30</option>
			<option <?php if(substr($row["bdate"], 8, 2) == "31") { ?>selected="selected"<?php } ?>>31</option>
		</select>
		<input type="submit">
	</form>
<?php  else : ?>
	Person not found!
<?php endif; ?>
<?php $conn->close(); ?>
<?php include 'footer.php'; ?>