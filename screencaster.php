<?php
function multiply($a,$b,$to_words = NULL){

	if($b==0)
		return 0;

	if($b > 0 ) 
    return ($a + multiply($a,  
                          $b - 1)); 
$ans=$a+$b;
 
} 
  
$to_words = new NumberFormatter("en", NumberFormatter::SPELLOUT);

echo multiply(7, 12); 


  
?> 

