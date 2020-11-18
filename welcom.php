
<?php session_start();


$em=$_POST['email'];
$pd=$_POST['psd'];

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
              
              
            </div>
          </nav>
<?php
          $con = mysqli_connect("localhost", "id13886614_jay", "jacklopP09#2", "id13886614_moltres");
$sql= "SELECT * FROM users WHERE email = '$em' AND pasword= '$pd' ";
$result = mysqli_query($con,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
?>
  

  <br>
          <br>
          <br>
          <br>

                            
                            <img src="images/sitting-4.svg" class="rounded float-right" alt="...">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="card mx-auto bg-danger" style="width: 23rem;" >
                                  <div class="card-body ">
                                    <h5 class="card-title">IMPORTANT AND URGENT</h5>
                                    
                               <br>
                                    <div class="card-footer bg-transparent border-light">
                                     
                                          <form action="task.php" method="POST">
                  
                                        <input type="hidden" name="lv" value="1">
                                        <input type="hidden" name="em" value='<?php echo "$em";?>'>
                                        <button class="btn btn-primary" type="submit"> GO!</button>
                                        </form>  </div>

                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="card bg-success" style="width: 23rem;">
                                  <div class="card-body">
                                    <h5 class="card-title">IMPORTANT NOT URGENT</h5>
                                    <br>
                                    <div class="card-footer bg-transparent border-light">
                                     
                                      <form action="task.php" method="POST">
              
                                      <input type="hidden" name="lv" value="2">
                                        <input type="hidden" name="em" value='<?php echo "$em";?>'>
                                    <button class="btn btn-primary" type="submit"> GO!</button>
                                    </form>  </div>

                                  </div>
                                </div>
                              </div>
                            </div>                 
<br>
<div class="row">
  <div class="col-sm-6">
    <div class="card mx-auto bg-warning" style="width: 23rem;" >
      <div class="card-body ">
        <h5 class="card-title"> URGENT NOT IMPORTANT</h5>
        <br>
        <div class="card-footer bg-transparent border-light">
                                     
          <form action="task.php" method="POST">

          <input type="hidden" name="lv" value="3">
        <input type="hidden" name="em" value='<?php echo "$em";?>'>
        <button class="btn btn-primary" type="submit"> GO!</button>
        </form>  </div>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card bg-info" style="width: 23rem;">
      <div class="card-body">
        <h5 class="card-title">NOT IMPORTANT NOT URGENT</h5>
        <br>
        <div class="card-footer bg-transparent border-light">
                                     
          <form action="task.php" method="POST">

          <input type="hidden" name="lv" value="4">
          <input type="hidden" name="em" value='<?php echo "$em";?>'>
        <button class="btn btn-primary" type="submit"> GO!</button>
        </form>  </div>

      </div>
    </div>
  </div>
</div> 



<?php

}else{
?>
<br>
          
          <div class="col">
            <div class="card bg-light mx-auto " style="width: 23rem;">
              <div class="card-body ">
                <h5 class="card-title "></h5>
                <svg class="bi bi-exclamation-circle-fill" width="20em" height="10em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
                <br>
                <br>
                <div class="card-footer bg-transparent border-danger">
                 <h2>Incorrect details entered!</h2>
                    </div>

              </div>
            </div>
          </div>
        </div>
        <?php
  


}

?>

      


    </body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>