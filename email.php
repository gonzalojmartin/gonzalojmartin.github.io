<?php
$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$subject = "Mensaje desde la Web";
$message = wordwrap(htmlentities($_POST['message'])." \n\n\nAtte.\n".$_POST['name']."\n".$_POST['email'], 70);

// send mail
$success = mail("contacto@gonzalojmartin.com",$subject,$message,"From: $name <$email>\n");

echo $success;
?>