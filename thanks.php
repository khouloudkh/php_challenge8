<?php

$user_name = $_POST["user_name"];
$user_lastName = $_POST["user_lastName"];
$user_mail = $_POST["user_mail"];
$user_phone = $_POST["user_phone"];
$subject = $_POST["subject"];
$user_message = $_POST["user_message"];

echo nl2br ("Merci $user_name $user_lastName de nous avoir contacté à propos de $subject.

Un de nos conseiller vous contactera soit à l’adresse $user_mail ou par téléphone 
au $user_phone dans les plus brefs délais pour traiter votre demande : 

$user_message\n");

?>
