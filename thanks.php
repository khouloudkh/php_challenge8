<?php
//All fields are required
if (empty($_POST["user_name"]) || empty($_POST["user_lastName"]) || empty($_POST["user_mail"]) || empty($_POST["user_phone"]) || empty($_POST["user_message"]))
{
    echo nl2br ("ERREUR : tous les champs n'ont pas ete renseignés.\n");
}
//PHP - Validate Name
if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["user_name"])) {
    echo nl2br("Only letters and white space allowed for name\n");
} 
//PHP - Validate lastName
if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["user_lastName"])) {
    echo nl2br("Only letters and white space allowed for last name\n");
}
//PHP - Validate E-mail
if (!filter_var($_POST["user_mail"], FILTER_VALIDATE_EMAIL)) {
    echo nl2br("Invalid email format\n");
} 
//PHP - Validate phone
if(!preg_match('/^[0-9]{10}+$/', $_POST["user_phone"])) {
    echo nl2br("Invalid Phone Number\n");
}
//PHP - Validate msg
if (empty($_POST['user_message'])) {
    echo nl2br("Please add your message \n");
}
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
