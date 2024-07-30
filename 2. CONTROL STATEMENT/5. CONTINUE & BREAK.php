<?php
	//Continue...
	for ($i=1; $i<=5; $i++) 
	{ 
		for ($j=1; $j<=5; $j++) 
		{ 
			if (!($i==$j)) 
			{
				continue;
			}
			echo $i.$j;
			echo '<br>';
		}
	}
	//even number between 1 to 20...
	echo '<br>';
	echo "Even numbers between 1 to 20 : <br>";  
    $i = 1;  
    while ($i<=20) 
    {  
        if ($i %2 == 1) 
        {  
            $i++;  
            continue; //here it will skip rest of statements  
        }  
        echo $i;  
        echo "</br>";  
        $i++;  
    } 

    //Break statement inside loop... 
    echo '<br>',"Break Statement inside loop : ".'<br>';
    for ($i=1; $i<=10 ; $i++) 
    { 
    	echo "$i<br>";
    	if($i==5)
    	{
    		break;
    	}
    }

    //Break statement inside inner loop...
    echo '<br>',"Break Statement inside inner loop : ".'<br>';
    for($i=1;$i<=3;$i++)
    {    
 		for($j=1;$j<=3;$j++)
 		{    
  			echo "$i   $j<br/>";    
  			if($i==2 && $j==2)
  			{    
   				break;    
  			}    
 		}    
	}  
?>