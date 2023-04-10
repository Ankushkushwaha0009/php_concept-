<?php
$servername = "localhost" ; 
$password = "" ; 
$username = "root";
$db  = "ankushkushwaha" ; 

$conn = mysqli_connect($servername , $username ,  $password , $db) ; 

if($conn){
    echo "connection is successfull <br> " ;
}
else{
   echo "connection is not successful <br> " ; 
}

// $sql =  "CREATE TABLE  `ankushkushwaha`.`my_trip_states` 
// ( `Sr.No` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(12) 
// NOT NULL , `Roll` INT(6) NOT NULL , `Dest` VARCHAR(20) NOT NULL , 
// `states` VARCHAR(20) NOT NULL  , `age` INT(4) NOT NULL  , PRIMARY KEY (`Sr.No`)) ;  " ; 

//inserting the data ....

$name = "Ramesh" ; 
$destination = "London" ; 
$states = "washington" ; 

$sql = "INSERT INTO `my_trip_states` (`Name`, `Roll`, `Dest` , `states`) 
 VALUES ('$name', '87', '$destination' , '$states' );" ; 

$res = mysqli_query($conn , $sql ) ;

if($res){
    echo "table is created successfully ! <br> " ;  
}
else {
    # code... 
    echo "Table is Not Created due to some reason <br> " ; 
}







?>

