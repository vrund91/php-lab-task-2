<html>
<body>
	<form method="POST">
		Rollno:<input type="number" name="nam1"/><br><br>
		Name:<input type="text" name="nam2"/><br><br>
		Gmail:<input type="gmail" name="gmail"><br><br>
		<input type="submit" name="submit"><br>
	</form>
	<table border="4">
		<tr>
			<th>Rollno</th>
			<th>Name</th>
			<th>Gmail</th>
		</tr>
	
	<tr>
	<?php
    session_start();

    if (!isset($_SESSION['records']))
    {
        $_SESSION['records'] = [];
    }

	if(isset($_POST['submit']))
	{
		$rollno = htmlspecialchars($_POST['nam1']);
        $name = htmlspecialchars($_POST['nam2']);
        $gmail = htmlspecialchars($_POST['gmail']);

        $_SESSION['records'][] = [$rollno, $name, $gmail];
	}
    foreach ($_SESSION['records'] as $record)
    {
        echo "<tr>";
        echo "<td>{$record[1]}</td>";
        echo "<td>{$record[0]}</td>";
        echo "<td>{$record[2]}</td>";
        echo "</tr>";
    }
        
	?>
</tr>
</table>
</body>
</html>	