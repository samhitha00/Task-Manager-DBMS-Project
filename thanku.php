




<?php

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$em=$_POST['email'];
$mb=$_POST['mb'];
$pd=$_POST['pd'];
// Create connection
$conn = mysqli_connect("localhost", "id13886614_jay", "jacklopP09#2", "id13886614_moltres");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (firstname, lastname, email,pasword,mobile)
VALUES ('$fn','$ln','$em','$pd','$mb')";

if ($conn->query($sql) === TRUE) {
  ?>

 



<html>
    <head>
        <title>
            MOLTRES 
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" width="50 rem" height="50 rem" alt="" loading="lazy">
          </a>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                
                
              </ul>
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="login.php">Login</a>
                </li>
                
              </ul>
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="register.php">Register</a>
                </li>
                
              </ul>
              
            </div>
          </nav>
          
          <img src="images//suc.jpg" style="width: 30rem; height: 28rem;" class="rounded mx-auto d-block" alt="...">
          <blockquote class="blockquote text-center">
            <p class="mb-0"></p>
            <h1>ThankYou for registering</h1>
            <footer class="blockquote-footer"> <cite title="Source Title"></cite> welcome to moltres family!</footer>
        </blockquote>
                    


    </body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>
<?php
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
