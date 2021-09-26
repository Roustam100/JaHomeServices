<?php

  $prenom = $_POST['Prenom'];
  $nom = $_POST['Nom'];
  $visitor_email = $_POST['Email'];
  $telephone = $_POST['Tel'];
  $objet = $_POST['Objet'];
  $message = $_POST['Message'];

  $to = "roustam.cent@gmail.com";

  $email_subject = "Devis de site";

  $email_body = "";

  $email_body .= "Prenom: ".$prenom. "\r\n";
  $email_body .= "Nom: ".$nom. "\r\n";
  $email_body .= "Email: ".$visitor_email. "\r\n";
  $email_body .= "Tel: ".$telephone. "\r\n";
  $email_body .= "Objet: ".$objet. "\r\n";
  $email_body .= "Message: ".$message. "\r\n";

  mail($to,$email_subject,$email_body);

  header("Location: index.html");


?>