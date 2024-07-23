<html>
<body>
	<form method="POST">
		Enter A YOUR UNIT:<input type="number" name="num">
		<input type="submit" name="submit">
	</form>
    <?php
    $units=$_POST['num'];
    $bill=0;

    if($units <= 50)
    {
	    $bill=$units * 3.50;
    }
    elseif($units <= 150)
    {
	   $bill=(50 * 3.50)+(($units - 50) * 4.00);
    }
    elseif($units <= 250)
    {
    	$bill=(50 * 3.50)+(100 * 4.00)+(($units-150) * 5.20);
    }
    else
    {
    	$bill=$bill=(50 * 3.50)+(100 *4.00)+(100*5.20)+(($units-250) * 6.20);
    }
    echo "The Total bill is: ".$bill;
?>
</body>
</html>