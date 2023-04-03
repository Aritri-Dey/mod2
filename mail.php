<?php
  //Load Composer's autoloader
  require 'vendor/autoload.php';
  //Import PHPMailer classes into the global namespace
  //These must be at the top of your script, not inside a function
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  //Create an instance; passing `true` enables exceptions 
  $mail = new PHPMailer(TRUE);

  include "pInfo.php";
  $objPrivate = new pInfo();
  $username = $objPrivate->sendName();
  $password = $objPrivate->sendPassword();

  try {
    //Server settings.
    //Enable verbose debug output.
    //Send using SMTP.                  
    $mail->isSMTP();         
    //Set the SMTP server to send through.                                  
    $mail->Host       = 'smtp.gmail.com';            
    //Enable SMTP authentication.     
    $mail->SMTPAuth   = TRUE;                  
    //SMTP username                 
    $mail->Username   = $username;             
    //SMTP password        
    $mail->Password   = $password;   
    //Enable implicit TLS encryption.                         
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->SMTPSecure = 'tls';
    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS.
    $mail->Port       = 587;                                    
    /* port 465 can also be used insted of 587, but it is less secure.*/ 
                                      
    //Recipients
    $mail->setFrom('aritri.dey@innoraft.com', 'Aritri Dey');
    //Add a recipient.
    $mail->addAddress('shuva.mallick@innoraft.com ');        

    //Content
    $mail->isHTML(TRUE);   
    //Set email format to HTML.                               
    $mail->Subject = 'Welcome mail';
    $mail->Body    = 'Name- '.$_SESSION['infoname'].'<br> Email- '.$_SESSION['infoemail'].'<br>Phone Number- '.$_SESSION['infophone'];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo '<br>A mail has been sent to the ID- shuva.mallick@innoraft.com.';
    session_unset();
    session_destroy();
  } 
  catch (Exception $e) {
    echo "<br>Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
?>

