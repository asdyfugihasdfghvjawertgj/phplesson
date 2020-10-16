<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
<tr>
	<th>no</th>
	<th>Name</th>
	<th>email</th>
	<th>actions</th>
</tr>
<?php
$student= array("mg mg","aye aye","su su"); 
$email = array("mg@gmail.com","aye@gmail.com","su@gmail.com");
for ($i=0; $i <count($student) ; $i++) {
$num=$i+1;
echo "<tr><td>$num</td><td>$student[$i]</td><td>$email[$i]</td><td><button name='edit'>Edit</button></td></tr>"; 
	# code...
}
?>
</table>

</body>
</html>