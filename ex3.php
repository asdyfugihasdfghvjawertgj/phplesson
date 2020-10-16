<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
<table>
<tr>
	<th>No</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Email</th>
	<th>Actions</th>
</tr>
<?php
$first= array("Mg","Aye","Su"); 
$last= array("Mg","Aye","Su"); 
$email = array("mg@gmail.com","aye@gmail.com","su@gmail.com");
for ($i=0; $i <count($first) ; $i++) {
$num=$i+1;
echo "<tr><td>$num</td><td>$first[$i]</td><td>$last[$i]</td><td>$email[$i]</td><td><a class='btn'><i class='fas fa-eye'></i></a><a class='btn'><i class='fas fa-edit'></i></a><a class='btn'><i class='fas fa-trash'></i></a></td></tr>"; 
	# code...
}
?>
</table>

</body>
</html>