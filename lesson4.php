<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form>
<input type="text"name="num1" placeholder="enter num1">
<input type="text" name="num2" placeholder="enter num2">
<select name="select">
	<option value="+">+</option>
	<option value="-">-</option>
	<option value="*">*</option>
	<option value="/">/</option>
</select>
<button name="submit">Submit</button>
</form>
<?php

if (isset($_GET['submit'])) {
	$num1=$_GET['num1'];
	$num2=$_GET['num2'];
	if ($_GET['select']=='+') {
		echo ($num1+$num2);
		# code...
	}
	elseif ($_GET['select']=='-') {
			echo ($num1-$num2);
	}
	elseif ($_GET['select']=='*') {
			echo ($num1*$num2);
	}
	if ($_GET['select']=='/') {
		echo ($num1/$num2);
		# code...
	}

}
?>
</body>
</html>