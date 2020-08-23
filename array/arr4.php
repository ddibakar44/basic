<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	$ar=array(55,44,66,33,11);
	echo("<br><b><u>Before sort</u></b><br>");
	foreach($ar as $value)
	{
		echo("$value ");
	}
	echo("<hr>");
	sort($ar);
	echo("<br><b><u>After sort</u></b><br>");
	foreach($ar as $value)
	{
		echo("$value ");
	}
?>

</body>
</html>