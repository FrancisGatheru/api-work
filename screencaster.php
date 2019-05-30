<?php
function multiply($num1,$num2,$to_words = NULL){
$a=$num1;
$b=$num2;
	if($b==0)
		return 0;

	if($b > 0 ) 
    return ($a + multiply($a,  
                          $b - 1)); 

 
} 
  
$to_words = new NumberFormatter("en", NumberFormatter::SPELLOUT);

echo multiply(7, 12); 


  
?> 

