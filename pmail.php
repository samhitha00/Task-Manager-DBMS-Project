<html>
   
   <head>
      <title>MOLTRES MAIL</title>
   </head>
   
   <body>
      
      <?php
         $to = "jayakumar2001mhk@gmail.com";
         $subject = "Good day ";
         
         $message = 
         "

    <!DOCTYPE html>
    <html lang='en' dir='ltr'>
      <head>
        <meta charset='utf-8'>
        <title></title>
        <style>
        @media print {
          .print_hidden{display: none;}
        }
          table{width: 600px; border: solid 1px; padding: 24px;margin: auto;}
          .bottom_solid{border-top: solid 1px; height: 30px}
          .right{text-align: right;}
          .dashed_bottom{border-bottom: dashed 1px;}
        </style>
      </head>
      <body>
      
    <div class='print_hidden'>

jiiii



        Acknowledgement Receipt
    

   

    
   </body>
   </html>

    ";
         
         
        
//$headers = "MIME-Version: 1.0" . "\r\n";
//$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers = "From: Protrainy <no_reply@protrainy.com>" ;


         
         $retval = mail($to,$subject,$message,$headers);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>