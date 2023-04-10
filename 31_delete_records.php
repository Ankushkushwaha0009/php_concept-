<?php

$servername = "localhost" ;
$username = "root" ;
$password = ""  ; 
$database = "ankushkushwaha" ;

$conn = mysqli_connect($servername , $username , $password , $database) ; 

if(!$conn){
  die ("Sorry we failed to connect :". mysqli_connect_error) ; 
}
else{
   echo "Connection was Successfull !<br> " ; 
}

//limit command 

//SELECT * FROM `trip` LIMIT 3;

$sql = "DELETE FROM `trip` WHERE `trip`.`Dest` = 'Russia' LIMIT 5 " ;  //it will show the 5 result of dest --> Russia 

$result = mysqli_query($conn , $sql) ; 

$aff = mysqli_affected_rows($conn) ; 
echo "No of effected rows Is  : $aff <br> " ; 

if($result){
    echo " Deleted  successfully <br>" ; 
}
else{
    $err = mysqli_error($conn) ; 
    echo " We are not able to delete the record due to this error   --> $err<br> " ; 
}


?>