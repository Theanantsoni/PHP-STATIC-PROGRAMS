<?php
	//__LINE__
	echo "Line number is : ".__LINE__."<br><br>";	
	
	//__FILE__
	echo "Fie path is : ".__FILE__."<br><br>";

	//__DIR__
	echo "File directory is : ".__DIR__."<br><br>";

	//__FUNCTION
	function test()
	{
		echo "The function name is : ".__FUNCTION__."<br><br>";
	}
	test();

	//__CLASS__
	//IN CASE OF SINGLE CLASS : 
	class JTP
	{
		public function __construct() 
		{
			echo "";
		}
		function getClassName()
		{
			//print name of the class JTP.
			echo __CLASS__ . "<br><br>";
		}
	}
	$t = new JTP;
	$t->getClassName();

	//IN CASE OF MULTIPLE CLASS :
	class sub 	//class first
	{
		function test_first()
		{
			echo __CLASS__."<br>";
		}
	}
	class base extends sub 	//class second
	{
		function test_second()
		{
			//will always print parent class which is base here.
			echo __CLASS__."<br>";
		}
	}
	class child extends base 	//class third
	{
		public function __construct() 
		{
			echo "";
		}
	}

	$s = new base;
	$s->test_first();

	$t = new child;
	$t->test_second(); echo "<br>";

	//__TRAIT	__
	trait created_trait 
	{
		function jtp()
		{
			//will print name of the trait i.e; created_trait
			echo "TRAIT name is : ".__TRAIT__;
		}
	}	
	class Company 
	{
		use created_trait;
	}
	$a = new Company;
	$a->jtp(); echo "<br><br>";

	//__METHOD__
	class method 
	{
		public function __construct() 
		{
			//print method::__construct
			echo "Method is : ".__METHOD__ . "<br>";
		}
		public function meth_fun()
		{
			//print method::meth_fun
			echo "Method name is : ".__METHOD__;
		}
	}
	$a = new method;
	$a->meth_fun(); echo "<br><br>";

	//__NAMESPACE__
	class class_name 
	{
		public function __construct() 
		{
			echo 'This line will print on calling namespace.';
		}
	}
	$class_name = __NAMESPACE__ .'\name';
	$a = new class_name;
	echo '<br><br>'."Technical_Portal\javatpoint"

	/*//ClassName::class
	namespace Technical_Portal;

	class javatpoint 
	{
	}
	echo javatpoint::class; //ClassName::class*/
?>