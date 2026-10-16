<?php
header('Content-Type: text/plain; charset=UTF-8');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
  http_response_code(405);
  echo 'Method not allowed';
  exit;
}

$name = isset($_POST['name']) ? trim((string) $_POST['name']) : '';
$email = isset($_POST['email']) ? trim((string) $_POST['email']) : '';
$service = isset($_POST['service']) ? trim((string) $_POST['service']) : '';

$allowedServices = [
  'HOUSE CLEANING',
  'OFFICE CLEANING',
  'STEAM CLEANING',
];

if ($name === '' || strlen($name) > 120 || preg_match('/[\r\n]/', $name)) {
  http_response_code(400);
  echo 'Invalid name';
  exit;
}

if (
  $email === '' ||
  strlen($email) > 254 ||
  preg_match('/[\r\n]/', $email) ||
  !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
  http_response_code(400);
  echo 'Invalid email';
  exit;
}

if (!in_array($service, $allowedServices, true)) {
  http_response_code(400);
  echo 'Invalid service';
  exit;
}

$toEmail = 'jimmy@onemorecleaner.com';
$safeName = htmlspecialchars($name, ENT_QUOTES | ENT_HTML5, 'UTF-8');
$safeEmail = htmlspecialchars($email, ENT_QUOTES | ENT_HTML5, 'UTF-8');
$safeService = htmlspecialchars($service, ENT_QUOTES | ENT_HTML5, 'UTF-8');

$body = 'User contacted you with the following details.<br />';
$body .= 'Name: ' . $safeName . '<br />';
$body .= 'Email: ' . $safeEmail . '<br />';
$body .= 'Service: ' . $safeService . '<br />';

$mailHeaders = "From: jimmy@onemorecleaner.com\r\n";
$mailHeaders .= 'Reply-To: ' . $email . "\r\n";
$mailHeaders .= "MIME-Version: 1.0\r\n";
$mailHeaders .= "Content-type: text/html; charset=UTF-8\r\n";

if (!mail($toEmail, 'New Quote', $body, $mailHeaders)) {
  http_response_code(500);
  echo 'Send failed';
  exit;
}

echo 'OK';
