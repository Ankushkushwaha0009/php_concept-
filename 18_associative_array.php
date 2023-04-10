<?php

//key : values .. 
echo "Welcome to Associative array </br> " ; 

// //basic arrays .....
// $arr = array('this' , 'that' , 'what');
// echo  $arr[0]."<br>"; 
// echo $arr[1]."<br>" ; 


//associative array ... 
$favCol = array(

    'shubham' => 'red' , 
    'rohan' => 'green' ,
    'Ankush' => 'yellow',
     889 => 'this' 

) ;

//accessing the associative array .... 

// echo $favCol['Ankush'] ; 
// echo "<br>" ;
// echo $favCol['rohan'] ; 

// echo "<br>" ; 
// echo  $favCol[889] ;

foreach($favCol as $i => $j){
   
    echo "$i --> $j <br> " ; 

}













?>