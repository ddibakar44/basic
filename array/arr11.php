<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	echo("<br><b><u>String</u></b><br>");
	$st="Ghosh-Sudeshna-Das-Dibakar-Bose-Sourav";
	echo($st);
	echo("<hr>");
	
	$ar=explode("-",$st);
	echo("<br><b><u>List</u></b><br>");
	foreach($ar as $value)
	{
		echo("$value ");
	}
	
?>

</body>
</html>