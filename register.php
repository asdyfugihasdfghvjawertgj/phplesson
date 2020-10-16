<?php
session_start();
	  $nameerror="";
	  $name="";
	  $emailerror="";
	  $email="";
	  $phoneerror="";
	  $phone="";
	  $passworderror="";
	  $password="";
	  $confirmerror="";
	  $confirm="";
	  if (isset($_POST['register1'])) {
	  	if (!empty($_POST['username'])) {
	  	$name=$_POST['username'];	
	  	}
	  	else{
	  		$nameerror="please enter username";
	  		//echo "$nameerror";
	  	}
	  	if (!empty($_POST['email'])) {
	  	$email=$_POST['email'];	
	  	}
	  	else{
	  		$emailerror="please enter email";
	  		//echo "$emailerror";
	  	}
	  	if (!empty($_POST['phone'])) {
	  	$phone=$_POST['phone'];
	  	}
	  	else{
	  		$phoneerror="please enter phone number";
	  		//echo "$phoneerror";
	  	}
	  	if (!empty($_POST['password'])) {
	  	$password=$_POST['password'];
	  	}
	  	else{
	  		$passworderror="please enter password";
	  		//echo "$passworderror";
	  	}
	  	if (!empty($_POST['confirm']) && $_POST['confirm']==$password ) {
	  		$confirm=$_POST['confirm'];
	  	}
	  	else{
	  		$confirmerror="please enter confirmpassword";
	  		//echo "$confirmerror";
	  	}
	  	
	  	
	  	
	  	
	  
	  	if (!empty($name)&& !empty($email) && !empty($phone) && !empty($password) && $confirm==$password) {
	  		
		$_SESSION['user']=$name;
	  	$_SESSION['ema']=$email;
	  	$_SESSION['ph']=$phone;
	  	$_SESSION['psw']=$password;
	  	$_SESSION['con']=$confirm;
	  	
		header('location:table.php');
	  		
	  	}
	  	
	  	
	  }
	  ?>
	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <title>Admin | Login</title>
    <link href="css/css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome.css" rel="stylesheet" />
    <link href="css/css/style.css" rel="stylesheet">
    <link href="css/css/style-responsive.css" rel="stylesheet">
  </head>

  <body>
	  <form action="" action="" method="POST">
	  	<input type="text" name="username" placeholder="username" value=<?php echo $name; ?> ><span><?php echo $nameerror; ?></span><br>
	  	<input type="text" name="email" placeholder="email" value=<?php echo $email; ?>><span><?php echo $emailerror; ?></span>
	  	<br>
	  	<input type="number" name="phone" placeholder="phone" value=<?php echo $phone; ?>><span><?php echo $phoneerror; ?></span><br>
	  	<input type="text" name="password" placeholder="password" value=<?php echo $password; ?>><span><?php echo $passworderror; ?></span><br>
	  	<input type="text" name="confirm" placeholder="confirm password"  value=<?php echo $confirm; ?>><span><?php echo $confirmerror; ?></span><br>
	  	
	  	<input type="submit" name="register1" placeholder="register" ><br>
	  </form>
	  
  </body>
</html>
