<?php
$username=isset($_POST['username'])? $_POST['username'] : "";
$mail=isset($_POST['mail'])? $_POST['mail'] : "";
$phone=isset($_POST['phone'])? $_POST['phone'] : "";
$message= isset($_POST['message'])? $_POST['message'] : "";
$subject =isset($_POST['sujet'])? $_POST['sujet'] : "";

     $message = wordwrap($message, 100, "\n");
     $headers= 'From: ' .$username. "\r\n" .
          'mail: '.$mail . "\r\n" .
          'telephone: '.$phone. phpversion();
    // $from = "my_address@domain.com";
    // $headers = "From:" . $from;
$res=mail('francoisandrze@gmail.com', $subject, $message, $headers);
echo (int)$res;
echo 'Le message a bien été envoyé';

 ?>
