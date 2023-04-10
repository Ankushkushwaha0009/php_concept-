<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get/post</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ank/21_getpost.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $name  = $_POST['name'] ; 
        $email = $_POST['email'];
        $concern  = $_POST['concern'] ;
        $address = $_POST['address'] ; 
        
        //connecting to a database ...

        $servername = "localhost" ;
        $username  = "root";
        $password = "" ; 
        $database = "forms 11" ;


        $conn = mysqli_connect($servername , $username , $password , $database) ; 

        if(!$conn){
        die ("Sorry we failed to connect :". mysqli_connect_error) ; 
        }
        else{
            

            //submit these to database ...
            // current_timestamp()
            $sql = "INSERT INTO `forms_student` (  `Name`, `Email` , `concern` ,  `address` ) 
            VALUES ('$name', '$email', '$concern',  '$address');" ; 


            $result = mysqli_query($conn , $sql) ; 

            if($result){
              
                echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong>Sucess</strong> your entry has been submiteed successfully .
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>' ;
          
            }
            else{

                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error</strong>We are facing some technical issues Your entry Not has been submiteed successfully! . 
                We regret the inconvenince cause . 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>' ;
            }
        }
  }

//submitting to the data base 
?>

<div class="container">
    <h1>Contact us for your concern </h1>
      <form action="/ank/28_forms1.php" method="post">


        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name ='name' class="form-control" id="name" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your Name with anyone else.</div>
        </div>

        <div class="mb-3" >
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name ='email' class="form-control" id="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div >

        <div class="mb-3">
            <label for="concern" class="form-label">Concern</label>
            <input type="text" name ='concern' class="form-control" id="concern" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your description  with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address   </label>
            <input type="text" name ='address' class="form-control" id="address" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your Address  with anyone else.</div>
        </div>



        <button type="submit" class="btn btn-primary">Submit</button>

      </form>



</div>


   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>


<!-- 
  
if($_SERVER['REQUEST_METHOR'] == 'POST'){
  
  $email = $_POST['emaiil'] ;
  $password = $_POST['pass'];
  echo "password is ".$password."and email is" .$email. "<br>"  ;  



}


 -->

<?php








?>
