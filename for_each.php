<?php

$arr = array("bananas" , "apples"  , "Harpic" , "bread") ; 

echo "array is : <br> " ; 

for($i = 0 ;  $i < count($arr) ; $i++){

    echo "Fruits is : " , $arr[$i]."<br>" ; 

}

echo "using for each loop <br> " ; 
foreach($arr as $_){
      echo $_." "  ; 
}



?>