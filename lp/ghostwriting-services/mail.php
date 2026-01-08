<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_POST){
  
  include('../../mail-smtp.php');
  
  $location = "https://www.atlaspublishinggroup.com/lp/ghostwriting-services/thank-you";

    $mail->addAddress('ppc@iceanimations.com', 'Inquiry');
    $mail->addAddress('ppc.cd@letusproceed.com', 'Inquiry');
    $mail->addAddress('ali.haider@canvasdigital.org', 'Developer');
    
  $mail->Subject = 'Atlas Publishing Group | LP - Ghostwriting Services';
	
  if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } 
  else {
    header("Location: $location");
  }
}

?>