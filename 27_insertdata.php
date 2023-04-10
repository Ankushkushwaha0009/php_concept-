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
   echo "connection was successfull !<br> " ; 
}

//variable to be inserted .....

$name = "Vikrant" ; 
$destination = "Russia" ; 

$sql = "INSERT INTO `trip` (`Name`, `Roll`, `Dest`) VALUES ('$name', '87', '$destination');" ; 
$result = mysqli_query($conn , $sql) ; 

if($result){
    echo "The Table was created successfully <br> " ; 
}
else{
    echo "The db was not created successfully becuase of this error " .
     mysqli_error($conn) ; 
}






?>