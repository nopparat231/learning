<?php
 
  include('conn.php');
  $checkemail = "SELECT Userlevel,email FROM user WHERE Userlevel = 'M'";
  $resultemail = mysqli_query($con,$checkemail);

  $numemail = mysqli_num_rows($resultemail);



    $bcc = "oiru6699@gmail.com;23.noop@gmail.com";
  
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "sharelea@sharelearningmedia.com";
    $to = "23.noop@gmail.com";
    
    $subject = "testMail";
    $message = "testMailOK";
    $headers = "From:" . $from . "\r\n";
    $headers .= "Bcc:" . $bcc . "\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";
    $mailsend = mail($to,$subject,$message, $headers);

    if($mailsend){
echo "OK";
    
    }else{
      echo "Error";
    }

   
   
    
?>