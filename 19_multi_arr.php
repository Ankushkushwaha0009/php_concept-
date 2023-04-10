<?php

    echo "Welcome to multi dimensional arrays <br> " ; 
    
    $arr = array(
         array(1,2,3),
         array(4,5,6),
         array(7,8,9)
    );

    // echo $arr[2][1] ; 

    //echo var_dump($arr) ;  // var_dump -> type batayega ... 
    


    for($i = 0 ; $i < count($arr) ; $i++){
          for($j = 0 ; $j < count($arr[$i]) ; $j++){
                    echo $arr[$i][$j]."   " ; 
          }
          echo "<br>" ; 
    }

?>


