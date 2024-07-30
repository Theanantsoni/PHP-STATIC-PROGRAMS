<?php   //PHP constant : - 
	//define...
	define("MESSAGE_1","Hello JavaTpoint PHP folder"); echo '<br>';
	echo MESSAGE_1;	echo '<br><br>';

	//case-insensitive - true...
	define("MESSAGE_2","Hello JavaTpoint PHP",true);//not case sensitive
	echo MESSAGE_2,"</br>";
	echo message_2;	echo '<br><br>';

	//case-sensitive - false...
	define("MESSAGE_3","Hello JavaTpoint PHP file",false);//case sensitive
	echo MESSAGE_3, "<br><br>";
	//echo message_3;

	//const keyword...
	const MESSAGE_4="Hello const by JavaTpoint PHP";
	echo MESSAGE_4, "<br><br>";

	//constant() function ... 
	define("MESSAGE_5", "JavaTpoint");
	echo MESSAGE_5, "</br>";
	echo constant("MESSAGE_5");
	//both are similar

?>