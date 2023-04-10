<?php

$a  = 190 ; 
$b = 199 ; 

if($a > $b){
     echo " $a is greater than $b " . "<br>"   ; 
}
else{
    echo " $b is greater than $a " . "<br>"   ; 
}



echo "for loop " . "<br>" ;   

$a = 0 ;
for(  ;  $a < 10  ;  ){
      echo $a . " " ; 
      $a++  ; 
}

echo "<br>" ; 





echo "while loop" . "<br>" ;  
$i = 0 ;
while($i < 5){
      echo ($i)." "  ;  
      $i++ ; 
}

echo "<br> " ; 






// echo "a + b is  : " .($a + $b) . "<br>" ; 
// echo $a + $b . "<br>" ; 

//logical opeartors 

$m = true ; 
$n = false;

echo var_dump($m and $n) ; 



?>