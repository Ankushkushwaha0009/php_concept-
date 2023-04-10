<?php
 
$servername = "localhost";
$username = "root";
$password = "" ; 

$conn = mysqli_connect($servername , $username , $password) ; 

if(!$conn){
  die ("Sorry we failed to connect :". mysqli_connect_error) ; 
}
else{
   echo "connection was successfull ! <br> " ; 
}


//create a db

$sql = "CREATE DATABASE db_Ankush" ; 
$result = mysqli_query($conn , $sql) ; 

//check for the database creation 
if($result){
    echo "The db was created successfully <br> " ; 
}
else{
    echo "The db was not created successfully becuase of this error " . mysqli_error($conn) ; 
}




?> -->