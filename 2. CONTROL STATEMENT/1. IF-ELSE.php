<?php 
//Voting...
	$no1=20;
	if($no1>=18)
	{
		echo "You are eligible for vote";
	}
	else
	{
		echo "You are not eligible for vote";
	}	echo '<br><br>';

//Even or Odd...
	$no2=19;
	if($no2%2==0)
	{
		echo $no2," Number is even";
	}
	else
	{
		echo $no2," Number is Odd";
	}	echo "<br><br>";

//Equal or does not Equal Number...
	$no3=16; $no4=16;

	if($no3==$no4)	echo "Both number are same";
	else echo "both number are does not same";

//Given Number is divisible with 5 & 11 both ? ...
	$val=20;	echo "<br><br>";

	if($val%5==0 && $val%11==0) echo "Given number is divisible with 5 & 11.";
	else echo "Given number is not divisible with 5 & 11.";
?>