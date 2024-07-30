<?php

	//check Positive, Negative or zero number..
	$no=-18;
	if($no%2>0) echo "Number is Positive";
	else if ($no<0) echo "Number is Negative";
	else echo "Number is Zero";

	//result...
	echo "<br><br>"; $per=80;
	if($per>=85 && $per<=100) echo "Distinction";
	else if($per>=70 && $per<85) echo "First Class";
	else if($per>=65 && $per<70) echo "Second Class";
	else if($per>=50 && $per<65) echo "Third Class";
	else echo "Fail";

	//Check Age...
	echo "<br><br>"; $age=101;
	if($age>1 && $age<=14) echo "Children Age";
	else if($age>14 && $age<=24) echo "Teenager Age";
	else if($age>24 && $age<=40) echo "Younger Age";
	else if($age>40 && $age<=60) echo "Middle Age";
	else if($age>60 && $age<=100) echo "Citizen Age";
	else echo "Invalid Age";

	//Check number...
	echo "<br><br>"; $No=55;
	if($No>0 && $No<=20) echo "Number between 1 to 20";
	else if($No>20 && $No<=40) echo "Number between 21 to 40";
	else if ($No>40 && $No<=60) echo "Number between 41 to 60";
	else if($No>60 && $No<=80) echo "Number between 61 to 80";
	else if($No>80 && $No<=100) echo "Number between 81 to 100";
	else echo "Invalid Number";

?>