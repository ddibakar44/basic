<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
	$ar=array("Ghosh"=>"Sudeshna","Das"=>"Dibakar","Bose"=>"Sourav");
	echo("<br><b><u>Before krsort</u></b><br>");
	foreach($ar as $key=>$value)
	{
		echo("&bull; $key : $value<br>");
	}
	echo("<hr>");
	krsort($ar);
	echo("<br><b><u>After arsort</u></b><br>");
	foreach($ar as $key=>$value)
	{
		echo("&bull; $key : $value<br>");
	}
?>

</body>
</html>