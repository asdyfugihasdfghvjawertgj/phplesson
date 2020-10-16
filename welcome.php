<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Admin | Login</title>
    <link href="css/css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet" />
    <link href="css/css/style.css" rel="stylesheet">
    <link href="css/css/style-responsive.css" rel="stylesheet">
  </head>
  <body>
  	<div class="container">
  		<div class="alert alert-danger">
  		<?php
		if (isset($_POST['username']) && isset($_POST['password'])) {
			if($_POST['username']=="admin" && $_POST['password']=="test@123"){
			echo "your login is successfully";	
			}


		}
		?>	
  		</div>
  	</div>

</body>
</html>