<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
<?php
for($num1=0;$num1<10;$num1++){
	echo "$num1<br>";
}
$num1=0;
while ($num1 < 10) {
	echo "$num1<br>";
	$num1++;
}
$num1=1;
do{echo "$num1<br>";
	$num1++;
}
while ($num1 < 10);
$items = array("tv" ,"phone" );
foreach ($items as $item) {
	echo "$item<br>";
	# code...
}
?>
</ul>

</body>
</html>