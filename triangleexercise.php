<?php

echo "<pre>"; // This is for correct handling of newlines
$input_char = "*"; // take * 
$level = 5; // level of triangle
$level = $level * 2; // 10
for($i = 1; $i <= $level; $i ++) 
    {    	
        if (!($i % 2) && $i != 1) // conditions to enter if only odd number
            continue; 
        //echo $i; print the odd number: debugging     
        print str_pad(str_repeat($input_char, $i),($level - 1) * strlen($input_char), " " , STR_PAD_BOTH);
        //echo strlen($input_char);
        /* 
		for i = 1: str_pad("*", 9, " ", STR_PAD_BOTH)         =      *
        for i = 3: str_pad("***", 9, " ", STR_PAD_BOTH)       =     ***     
        for i = 5: str_pad("*****", 9, " ", STR_PAD_BOTH)     =    *****   
        for i = 7: str_pad("*******", 9, " ", STR_PAD_BOTH)   =   *******      
        for i = 9: str_pad("*********", 9, " ", STR_PAD_BOTH) =  *********   
        */

        print PHP_EOL; // for create new line 
    } 
?>