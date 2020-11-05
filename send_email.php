<?php
$toEmail = "imhassan66@gmail.com";
//$toEmail = "info@onemorecleaner.com";


$mailHeaders = "From:info@onemorecleaner.com\r\n";
$mailHeaders .= "MIME-Version: 1.0\r\n";
$mailHeaders .= "Content-type: text/html\r\n";

$body = " User contacted you with following details.<br />";
$body .=  "Name " . $_POST["name"] . "<br />";
$body .=  "Email " . $_POST["email"]  . "<br />";
$body .=  "Service " . $_POST["service"]  . "<br />";
//$body .=  "Message " . $_POST["message"]  . "<br />";

$output = mail($toEmail, "New Quote", $body, $mailHeaders);
if ($output) {
  echo "OK";
}

var_dump($output);
