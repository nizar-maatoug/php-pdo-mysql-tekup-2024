<?php

ini_set("SMTP","localhost");
ini_set("smtp_port","25");

$to= "nizar.maatoug@hotmail.com";
$subject = "Email de test";
$text= "this is test email from PHP";

$headers = "From: webmaster@tekup.tn" . "\r\n";
$headers .= "CC: somebodyelse@example.com";


mail($to,$subject,$text,$headers);