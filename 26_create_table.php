<?php
 
$servername = "localhost";
$username = "root";
$password = "" ; 
$database = "db_Ankush" ; //it means that I'm working with these database only ... 

$conn = mysqli_connect($servername , $username , $password , $database) ; 

if(!$conn){
  die ("Sorry we failed to connect :". mysqli_connect_error) ; 
}
else{
   echo "connection was successfull ! <br> " ; 
}


$sql = "CREATE TABLE  `db_Ankush`.`my_trip_states` 
( `Sr.No` INT(6) NOT NULL AUTO_INCREMENT , `Name` VARCHAR(12) 
NOT NULL , `Roll` INT(6) NOT NULL , `Dest` VARCHAR(20) NOT NULL , 
`states` VARCHAR(20) NOT NULL  , PRIMARY KEY (`Sr.No`)) ; " ; 

$result = mysqli_query($conn , $sql) ; 

// check for the table creation success .. . 


if($result){
    echo "The Table was created successfully <br> " ; 
}
else{
    echo "The db was not created successfully becuase of this error " .
     mysqli_error($conn) ; 
}




?>