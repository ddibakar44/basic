<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	$ar=array(55,44,66,33,11);
	echo("$ar[0], $ar[1], $ar[2], $ar[3], $ar[4]");	
	echo("<hr>");
	for($i=0;$i<5;$i++)
	{
		echo("$ar[$i] ");	
	}
	echo("<hr>");
	foreach($ar as $value)
	{
		echo("$value ");
	}
?>

</body>
</html>