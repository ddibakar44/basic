<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	$ar=array("Ghosh"=>"Sudeshna","Das"=>"Dibakar","Bose"=>"Sourav");
	echo("<br><b><u>Before asort</u></b><br>");
	foreach($ar as $key=>$value)
	{
		echo("&bull; $key : $value<br>");
	}
	echo("<hr>");
	asort($ar);
	echo("<br><b><u>After asort</u></b><br>");
	foreach($ar as $key=>$value)
	{
		echo("&bull; $key : $value<br>");
	}
?>

</body>
</html>