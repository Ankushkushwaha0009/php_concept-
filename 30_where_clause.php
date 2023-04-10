<?php

$servername = "localhost" ;
$username = "root";
$password = "" ; 
$database = "ankushkushwaha" ;

$conn = mysqli_connect($servername , $username , $password , $database) ; 

if(!$conn){
  die ("Sorry we failed to connect :". mysqli_connect_error) ; 
}
else{
   echo "Connection was Successfull !<br> " ; 
}

$sql = "SELECT * FROM `trip` WHERE `Dest` = 'Bihar';" ; 
$result = mysqli_query($conn , $sql) ; 




//usage of WHERE clause to fecth the data from the database 
$num =  mysqli_num_rows($result) ; 

echo "Records found in the database is : $num <br><br>" ;
$i = 1 ;  
if($num > 0){

    //$num is holding the number of columns 
    while( $row = mysqli_fetch_assoc($result)){
        echo $i . ".  Hello " .$row['Name']."  Welcome to  ".$row['Dest'];  // printing the each row of the table 
        echo "<br>" ; 
        $i += 1; 
    }

}

//usage of where clause to update the data 
$sql = "UPDATE `trip` SET `Dest` = 'England_update' WHERE `trip`.`Sr.No` = 3;";

$result = mysqli_query($conn , $sql) ; 
// echo var_dump($result) ; // bool return karega 

$aff = mysqli_affected_rows($conn) ; 

echo "No of effected rows Is  : $aff <br> " ; 


if($result){
  echo " We updated the record successfully <br>" ; 
}
else{
    echo " We are able to update the record successfully <br> " ; 
}
  


?>