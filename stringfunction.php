<?php

$name  = " Harry is a good boy " ; 
echo $name ; 
echo "<br> " ;

echo strlen($name) ; 
echo "<br> " ;
echo "The length of " . " my string is " . strlen($name) ;  // joining two string with dot operator 

echo "<br> " ;
echo str_word_count($name)   ; 

echo "<br> " ;
echo strrev($name) ;  // for reversing  the string for the given variable 

echo "<br> " ;
echo strpos($name , "Harry") ; 

echo "<br> " ;
echo str_replace("Harry" , "Ankush" , $name) ;  // replacing harry with ankush

$modi = str_replace("Harry" , "Ankush" , $name) ; 

echo "<br> " ;
echo str_repeat($modi , 3) ; 

echo "<br>" ;


echo "<pre>"; 
echo rtrim("   Ankush Kushwaha    ") ; //right trim it will remove the space form the right hand side of your string 

echo "<br>" ;
echo  ltrim("   Vishal Kushwaha   ") ; 

echo "</pre>" ; 

?>