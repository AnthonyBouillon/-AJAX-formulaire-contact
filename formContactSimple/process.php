<?php
if(!empty($_POST["surnameC"])) {

    $to = 'anthony-bouillon@outlook.fr';
    $subject = 'Message via le formulaire de contact reçu !';
    $message = 'Expéditeur : ' . "\n";
    $message .= htmlspecialchars($_POST["nameC"]) . ' ' . htmlspecialchars($_POST["surnameC"]) . "\n" . "\n";
    $message .= 'Adresse mail : ' . "\n";
    $message .= htmlspecialchars($_POST["emailC"]) . "\n" . "\n";
    $message .= 'Message : ' . "\n";
    $message .= htmlspecialchars($_POST["messageC"]);

    $success = mail($to, $subject, $message);
}
?>