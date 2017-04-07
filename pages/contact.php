<?php
$username=isset($_POST['username'])? $_POST['username'] : "";
$mail=isset($_POST['mail'])? $_POST['mail'] : "";
$phone=isset($_POST['phone'])? $_POST['phone'] : "";
$message= isset($_POST['message'])? $_POST['message'] : "";

$subject = "Test mail";
    $message = "Hello! This is a simple email message.";
     $message = wordwrap($message, 100, "\n");
    // $from = "my_address@domain.com";
    // $headers = "From:" . $from;
$res=mail('francoisandrze@gmail.com', $subject, '$message');
echo (int)$res;
echo 'Le message a bien été envoyé';

 ?>
