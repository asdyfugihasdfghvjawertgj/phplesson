<!DOCTYPE html>
<html>
<head>
	<title>PHP form</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
	
<table border="1" cellspacing="0" cellpadding="10">
	<thead>
		<tr>
			<th>name</th>
			<th>email</th>
			<th>phone</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
		<?php
		session_start();
		echo "<tr><td>".$_SESSION['user']."</td><td>".$_SESSION['ema']."</td><td>".$_SESSION['ph']."</td><td><a class='btn'><i class='fas fa-eye'></i></a><a class='btn'><i class='fas fa-edit'></i></a><a class='btn'><i class='fas fa-trash'></i></a></td></tr>";
		//echo "<tr><</tr>"; 


		?>

	</tbody>
</table>

</body>
</html>