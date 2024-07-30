<?php
	
	//only use echo for printing...
	echo "DISPLAY BY ECHO...";
	echo "hello php by echo...";
	echo "hello php world by echo";

	//use <br> tag for new line...
	echo '<br>',"good",'<br>';
	echo "morning",'<br>';

	//take a variables int,double,string...
	$string_value="red,yellow,purple";
	$integer_value="123321";
	$double_value=123.321;

	//printing a variable by echo...
	echo '<br>',"string_value is : " .$string_value ,'<br>';
	echo "integer_value is : " .$integer_value ,'<br>';
	echo "double_value is : " .$double_value ,'<br>';	echo "<br>"; 

	//printing multi line string by echo...
	echo "Hello
	good morning	
	PHP server
	";			echo '<br><br>';

	//printing escaping characters by echo...
	echo "Soni \"Anant\" Rajeshkumar";		echo '<br><br><br>';

	//only use print...
	print "DISPLAY BY PRINT...";
	print "hello php by print";
	print("hello php world by print");

	//use <br> tag for new line...
	print '<br>';	print "good";
	print "<br>";	print("morning");
	
	//printing a variable by print...
	print "<br><br>";
	print "string_value is : " .$string_value;		print "<br>";
	print 'integer_value is : ' .$integer_value;	print "<br>";
	print("double_value is : " .$double_value);		print "<br><br>";

	//printing multi-line String by print...
	print 'hello
	good morning
	php server
	';	print '<br><br>';

	//printing escaping characters by print...
	print "Soni \"Anant\" Rajeshkumar";

	//check multiple argument...
	$val1="hello";
	$val2="Hypertext pre-processor";

	echo "<br><br>","multiple argument is : ".$val1.$val2;

?> 