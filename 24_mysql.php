<?php

echo " Welcome to stage where we are ready to get connected to database <br> " ; 

//ways to connect to mysql 

// 1.mysqli extension
//    i)procedural
//    ii)object oriented 
// 2.PDO  --> php data Object 

//conecting to the database 

$servername = "localhost";
$username = "root";
$password = "" ; 

//creating a connection a oBject
$conn = mysqli_connect($servername , $username , $password) ; 

//Die if connection was not successfull ... 
if($conn){
       echo "connection was successfull !" ; 
}
else{
  die("Sorry we failed to connect :". mysqli_connect_error) ; 
}


?>
