<?php
cal();
$GLOBALS['x']=10;
$GLOBALS['y']=10;
$addition=calculate($GLOBALS['x'],$GLOBALS['y']);
echo "$addition";
function cal()
{
global $num1;
$num1=10;
global $num2;
$num2=10;
echo $result=$num1+$num2;
}
function calculate($x,$y){
	$result=$x+$y;
	echo "$result";
	return $result; 
}
?>