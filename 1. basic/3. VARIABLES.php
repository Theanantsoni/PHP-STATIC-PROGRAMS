<?php
	//Local variable Syntax...
	function local_var()
	{
		$num=45; //local variable
		echo "Local variable function number is : " .$num;
	}
	local_var();

	//Global variable Syntax...
	$name="ANANT"; //global variable...
	function global_var()
	{
		global $name;	echo "</br><br>";
		echo "Global variable function number is : " .$name;
		echo "<br><br>";
	}
	global_var();
	echo "Global variable number is : " .$name; echo "<br><br>";

	//Sums of two global numbers...
	$no1=50;	$no2=60;
	function sum_var()
	{
		$ans=$GLOBALS['no1'] + $GLOBALS['no2'];
		echo "Two Global numbers ans is : " .$ans;
	}
	sum_var();

	//Static variable syntax...
	function static_var()
	{
		static $num11=3; //static variable
		$num12=6; //non-static variable

		$num11++; echo '<br>';
		$num12++;

		echo " Number 11 is : " .$num11;
		echo " Number 12 is : " .$num12;
	}				echo '<br>';
	static_var();	echo '<br>';
	static_var();	echo '<br>';
	static_var();	echo '<br><br>';

	//$ and $$ variables Example-1...
	$x = "abc";
	$$x = 200;

	echo $x."<br><br>";
	echo $$x."<br><br>";
	echo $abc; echo'<br><br>';

	//$ and $$ variables Example-3...
	$x="U.P";
	$$x="Lucknow";

	echo $x. "<br><br>";
	echo $$x. "<br><br>";
	echo "Capital of $x is " .$$x; echo '<br><br>';

	//$ and $$ variables Example-3...
	$name="Anant";
	${$name}="Dhruv";
	${${$name}}="Kenil";

	echo $name. "<br><br>";
	echo ${$name}. "<br><br>";
	echo $Anant. "<br><br>";
	echo ${${$name}}. "<br><br>";
	echo $Dhruv. "<br>";
?>