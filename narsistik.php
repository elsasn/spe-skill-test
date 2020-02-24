<?php

function narcissistic($number){
	$sum = 0;
	$x = $number;
	while($x != 0)
	{
		$a = $x % 10;
		$sum = $sum + $a*$a*$a;
		$x = $x / 10;
	}

	if ($number == $sum)
		return 1;

	return 0;
}

$number = 153;
$number2 = 111;
$flag = narcissistic($number);
if ($flag == 1)
	echo "narcissistic(153) // this will return true";
else
	echo "narcissistic(111) // this will return false";
$flag = narcissistic($number2);
echo "<br>";
if ($flag == 1)
	echo "narcissistic(153) // this will return true";
else
	echo "narcissistic(111) // this will return false"
?>