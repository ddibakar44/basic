<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	$ar=array("Ghosh","Sudeshna","Das","Dibakar","Bose","Sourav");
	echo("<br><b><u>List</u></b><br>");
	foreach($ar as $value)
	{
		echo("$value ");
	}
	echo("<hr>");
	echo("<br><b><u>String</u></b><br>");
	$st=implode("-",$ar);
	echo($st);
?>

</body>
</html>