<?php
require('creddb.php');
$msg="hii";
if (isset($_POST['uname']) && isset($_POST['pswd'])){
   
    $hashd = md5( rand(0,1000) );
    $username = mysqli_real_escape_string($conn, $_POST['uname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pswd']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpswd']);
    $slquery = "SELECT 1 FROM rusers WHERE email = '$email'";
    $plen =strlen("$password");
    $selectresult = mysqli_query($conn,$slquery);
    if($plen < 8)
    {
        $msg="password is too short";
        
    }
    elseif($password != $cpassword){
         $msg = "passwords doesn't match";
    }
    elseif(mysqli_num_rows($selectresult)>0){
         $msg = 'email already exists';
    }
    else{
        $sql = "INSERT INTO `rusers` (ip,username, password, email,hash) VALUES 
          ('". mysqli_escape_string($conn,$username) ."', '". mysqli_escape_string($conn,$username) ."', '". mysqli_escape_string($conn,$password) ."', '". mysqli_escape_string($conn,$email) ."', '". mysqli_escape_string($conn,$hashd) ."')";
         $result = mysqli_query($conn,$sql);
         
         $to = "jayakumar2001mhk@gmail.com";
         $subject = "Good day ";
         
         $message = 
         "

    <!DOCTYPE html>
    <html lang='en' dir='ltr'>
      <head>
        <meta charset='utf-8'>
        <title></title>
       
      </head>
      <body>
      
    <div class='print_hidden'>





        
      <h4> Dear <b>jai</b>, </h4>
<p>This is an acknowledgement mail from Protrainy that your application form with Enrolment no. <b>98484</b> and Successful Order ID <b>jjj</b> for the IndustryReady Certification Course October 2020 has been Successfully Completed and Submitted . Please keep this receipt for future reference.
</p>
<p>
You have successfully registered for these IndustryReady Certification Course:
<b> longcou </b> 
</p>

<p>
The IndustryReady Certification Course is scheduled from October 12<sup>th</sup>,2020 for <b>E-Tabs</b> and will be conducted through live video conferencing applications <b>(details will be sent to you in subsequent mails)</b>. The individual session details and of the expert will be mailed individually to you by <b>11.10.2020</b>.
</p>

<p>
For ETABS Software Installation (CSI Trial Version), click the following link:
<a target='_blank' href='https://youtu.be/rswFg9HLK_0'>https://youtu.be/rswFg9HLK_0</a> <br>
For any kind of queries/doubts regarding installation, contact:<br>
Phone:
<a href='tel:8967036657'> +91-8967036657</a><br>
WhatsApp:
<a target='_blank' href='https://wa.me/+918967036657'>+91-8967036657</a>

<p>
Meanwhile you are governed by the <a href='https://protrainy.com/tnc/ir-assessment_2020'>Terms & Conditions</a> agreed in the signing up. In case of any further information/clarification required, you may reach us at: <br>
<a href='mailto:contact@protrainy.com'>contact@protrainy.com</a> <br>
<a href='tel:7205397106'> +91-7205397106</a><br>
<a href='tel:8617833413'> +91-8617833413</a><br>
</p>

        Acknowledgement Receipt
    

   

    
   </body>
   </html>

    ";
         
         
        
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Protrainy <no_reply@protrainy.com>' . "\r\n";

$headers .= 'Cc: mhkjaykumar@gmail.com' . "\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         /*$to = $email;
         $subject = "Good day ";
         
         $message = 
         "

    <!DOCTYPE html>
    <html lang='en' dir='ltr'>
      <head>
        <meta charset='utf-8'>
        <title></title>
       
      </head>
      <body>
      
    <div class='print_hidden'>





        
      <h4> Dear <b>jai</b>, </h4>


<p>
For ETABS Software Installation (CSI Trial Version), click the following link:
<a target='_blank' href='https://youtu.be/rswFg9HLK_0'>https://youtu.be/rswFg9HLK_0</a> <br>
For any kind of queries/doubts regarding installation, contact:<br>
Phone:
<a href='tel:8967036657'> +91-8967036657</a><br>
WhatsApp:
<a target='_blank' href='https://wa.me/+918967036657'>+91-8967036657</a>

<p>
Meanwhile you are governed by the <a href='https://protrainy.com/tnc/ir-assessment_2020'>Terms & Conditions</a> agreed in the signing up. In case of any further information/clarification required, you may reach us at: <br>
<a href='mailto:contact@protrainy.com'>contact@protrainy.com</a> <br>
<a href='tel:7205397106'> +91-7205397106</a><br>
<a href='tel:8617833413'> +91-8617833413</a><br>
</p>

        Acknowledgement Receipt
    

   

    
   </body>
   </html>

    ";
         
         
        
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Protrainy <no_reply@protrainy.com>' . "\r\n";

$headers .= 'bcc: mhkjaykumar@gmail.com' . "\r\n";
         
         $retval = mail($to,$subject,$message,$header);*/
         
         /*if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
     
         
         
         $to      = $email; // Send email to our user
$subject = 'Signup | Verification'; // Give the email a subject 
$message = '
  
Thanks for signing up!
Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
  
------------------------
Username: '.$username.'
Password: '.$password.'
------------------------
  
Please click this link to activate your account:
https://zennp.000webhostapp.com/log.php?email='.$email.'&hash='.$hashd.'
  
'; // Our message above including the link
                      
$headers = 'From:noreply@zennp.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers);*/
          
          if($result){
             $msg = "User Created Successfully.";
          }
    }
   }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&amp;display=swap" rel="stylesheet">
    <style>
        .pad{
            padding: 1em;
        
        }
        </style>
</head>
<body style="background-color: rgb(125, 243, 243);">
    <div id="head"></div>

   <?php 
   if (isset($_POST['uname']))
   {
       ?>
        <div class="container-fluid">
      <div class="row pad">
        <div class=" col-md-6 col-sm-4 col-xs-4 text-center mx-auto alert alert-success" role="alert">
          <?php echo $msg; ?> 
        </div>
      </div>
    </div>
    
    <?php
   }
  ?>
<div class="container-fluid ">
    <div class="row pad">
      
        <div class=" card col-md-6 col-sm-4 col-xs-4  mx-auto pad">
            <h5 class="card-title text-center">Register</h5>
            <h6 class="card-subtitle mb-2 text-center text-muted">One Step closer to be a warrior!</h6>
            <form action=" " method="POST" class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Name</label>
                    <input type="text" class="form-control" name="uname" id="validationCustom01"  required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control"name="email" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
               
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom014">Password</label>
                      <input type="password" class="form-control" name="pswd" id="validationCustom014"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom015">Confirm Password</label>
                      <input type="password" class="form-control" name="cpswd" id="validationCustom015"  required>
                      <div class="valid-feedback">
                        Looks good!
                      </div>
                    </div>
                  </div>
               
                   
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
              </form>
        </div>
    </div>
</div>
   



      
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 
        <script>
            $(function () {
                $("#head").load("head.html");
                $("#foot").load("favt.html");
            })
        </script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>