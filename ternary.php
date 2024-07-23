<html>
<body>
	<form method="POST">
		Enter a number:<input type="number" name="num1"/><br><br>
		<input type="submit" name="submit">
	</form>
	<?php
	class Ternary
	{
		public $number;

		function test($number)
		{
			return $number > 30 ? "greater than 30" : ($number > 20 ? "greater than 20" : ($number > 10 ? "greater than 10" : "not greater than 10"));
		}
	}
	if(isset($_POST['submit']))
	{
		$number=$_POST['num1'];
		$obj1 = new Ternary();
	    echo "Result is: ".$obj1->test($number);
	}
	?>
</body>
</html>