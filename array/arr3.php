<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Associative Array</title>
</head>

<body>

<?php
	$ar=array("Ghosh"=>"Sudeshna","Das"=>"Dibakar","Bose"=>"Sourav");
	foreach($ar as $value)
	{
		echo("&bull; $value<br>");
	}
	echo("<hr>");
	foreach($ar as $key=>$value)
	{
		echo("&bull; $key : $value<br>");
	}
	echo("<hr>");
?>

</body>
</html>