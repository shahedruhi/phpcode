<?php

echo "<pre>"; // This is for correct handling of newlines
$input_char = "*"; // take * 
$level = 5; // level of triangle
$level = $level * 2;
for($i = 1; $i <= $level; $i ++) 
    {    	
        if (!($i % 2) && $i != 1)
            continue;  
        print str_pad(str_repeat($input_char, $i),($level - 1) * strlen($input_char), " " , STR_PAD_BOTH);
        print PHP_EOL;
    } 
?>