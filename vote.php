<html>
<body>
	<form method="POST">
		Enter a your age:<input type="number" name="age"/>
		<input type="submit" name="submit"/>
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		$_AGE=$_POST['age'];
		if($_AGE > 18)
		{
			echo "$_AGE, you are eligible for voting";
		}
		else
		{
			echo "$_AGE, you are not eligible for voting";
		}
	}
	?>
</body>
</html>