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
		<option>1967</option>
		<option>1968</option>
		<option>1969</option>
		<option>1970</option>
		<option>1971</option>
		<option>1972</option>
		<option>1973</option>
		<option>1974</option>
		<option>1975</option>
		<option>1976</option>
		<option>1977</option>
		<option>1978</option>
		<option>1979</option>
		<option>1980</option>
		<option>1981</option>
		<option>1982</option>
		<option>1983</option>
		<option>1984</option>
		<option>1985</option>
		<option>1986</option>
		<option>1987</option>
		<option>1988</option>
		<option>1989</option>
		<option>1990</option>
		<option>1991</option>
		<option>1992</option>
		<option>1993</option>
		<option>1994</option>
		<option>1995</option>
		<option>1996</option>
		<option>1997</option>
	</select>
	Month:
	<select name="bmonth">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
	</select>
	Day:
	<select name="bday">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		<option>13</option>
		<option>14</option>
		<option>15</option>
		<option>16</option>
		<option>17</option>
		<option>18</option>
		<option>19</option>
		<option>20</option>
		<option>21</option>
		<option>22</option>
		<option>23</option>
		<option>24</option>
		<option>25</option>
		<option>26</option>
		<option>27</option>
		<option>28</option>
		<option>29</option>
		<option>30</option>
		<option>31</option>
	</select>
	</br>
	<input type="submit">
</form>
<?php include 'footer.php'; ?>