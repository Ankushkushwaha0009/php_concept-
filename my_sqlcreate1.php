<?php

echo "for the connection of sql <br> ";

$s  = "localhost" ; 
$p = "" ; 
$u = "root";

$conn = mysqli_connect($s , $u , $p);

if($conn){
    echo "Connection is successful <br> ";
}
else{
    die("Sorry we Failed to connect " . mysqli_connect_error($conn)) ; 
}

$create_db = "CREATE DATABASE db_Ankush223" ; 

$res = mysqli_query($conn , $create_db ) ; 

if($res){
    echo "your database is created successfully <br> ";
}
else{
    echo "your database is not craeted successfully <br> ";
}

?>