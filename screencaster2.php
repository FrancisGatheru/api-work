<?php
function multi($num1,$num2,$to_words = NULL){
$a=$num1;
$b=$num1;
$state=$to_words;

for($i=0;$i<=$num2-2;$i++){
  $ans=$b+$a;
}
echo $b;

//echo $state;
if ($state=="true"){

  $f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
  echo $f->format($b);

}

}


multi(1,3,'true');



 ?>