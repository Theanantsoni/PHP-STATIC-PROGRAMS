<?php
	
	//SUMS : add, sub, mul, div...
	$no1=100; $no2=200;
	$no3=300; $no4=400;

	$add=$no1+$no2;
	echo "Addition is : " .$add;  echo "<br>";

	$sub=$no3-$no2;
	echo "Subtraction is : " .$sub;  echo "<br>";

	$mul=$no3*$no4;
	echo "Multiplication is : " .$mul;  echo "<br>";

	$div=$no4/$no2;
	echo "Division is : " .$div;  echo "<br><br>";

	//Result for 5 subjects...
	$c=91; $cpp=93; $java=95;
	$php=97; $unix=99;

	echo "C language marks is : " .$c;		 echo "<br>";				
	echo "Cpp language marks is : " .$cpp;	 echo "<br>";		
	echo "java language marks is : " .$java; echo "<br>";
	echo "php language marks is : " .$php;	 echo "<br>";
	echo "unix language marks is : " .$unix; echo "<br><br>";

	$total=$c+$cpp+$java+$php+$unix;
	echo "Total marks is : " .$total;

	$percentage=$total/5;   echo '<br>';
	echo "percentage is : " .$percentage;

?>