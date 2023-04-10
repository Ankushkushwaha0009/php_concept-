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

$sql = "SELECT * FROM `trip`" ; 
$result = mysqli_query($conn , $sql) ; 

//find the number of records return ..

$num =  mysqli_num_rows($result) ; 

echo "Records found in the database is : $num <br><br>" ; 
//display the rows returned by the sql query ...

 
if($num > 0){

    //$num is holding the number of columns 
    while( $row = mysqli_fetch_assoc($result)){
              
        echo $row['Sr.No'] . ".  Hello " .$row['Name']."  Welcome to  ".$row['Dest'];  // printing the each row of the table 
        echo "<br>" ; 
               

    }

}





?>