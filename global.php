<?php

        echo "welcome to scope of the variable  <br> ";

        $a = 10    ;  // global variable  ( Iska scope function ke bahar hi rahega )
        function print1(){
            $a  = 11 ; // local variable$b - $a
            echo "Inside the bracket  : $a"."<br>" ;  // 11  --> local  variable 
           
        } 

        echo "outside the bracket : $a"."<br>" ;  // 10 --> global variable 
        print1() ; 


        function print2(){
               global $a ; //now I can access variable a by using this ... 
               $a = 14 ; 
               echo " global variable Inside the bracket :  $a <br>  "; // it will throw an error .. . (  as a undefined variable ... )
        }

        echo $a."<br>" ; 

        // echo var_dump($GLOBALS) ; //it will print the all global variable .. 

        print2() ; 

        echo var_dump($GLOBALS['a']) ; // (int)14
        echo "<br>" ; 

        echo var_dump($GLOBALS['a']) ; 


?>

