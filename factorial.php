<html>
<body>
	<form method="POST">
		Enter a no:<input type="number" name="num"/><br><br>
		<input type="submit" name="submit">
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$NO=$_POST['num'];
		$fac=1;
		for($i=1; $i<=$NO; $i++)
		{
			$fac = $fac * $i;
		}
		echo "The factorial number is: $fac";
	}
	?>
</body>
</html>