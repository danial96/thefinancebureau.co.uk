<?php
// Destination inbox for quote requests — update to the real business inbox before launch.
const NOTIFY_EMAIL = 'info@thefinancebureau.co.uk';
const LEADS_LOG     = __DIR__ . '/../leads.csv';

function clean($value) {
    return trim(preg_replace('/[\r\n]+/', ' ', (string) $value));
}

function backToForm($status) {
    $redirect = '../contact.php?' . $status;
    header('Location: ' . $redirect);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    backToForm('error=1');
}

$name    = clean($_POST['name'] ?? '');
$email   = clean($_POST['email'] ?? '');
$phone   = clean($_POST['phone'] ?? '');
$service = clean($_POST['service'] ?? 'General enquiry');
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || $email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    backToForm('error=1');
}

$row = [date('Y-m-d H:i:s'), $name, $email, $phone, $service, str_replace(["\r", "\n"], ' ', $message)];
$isNewFile = !file_exists(LEADS_LOG);
$fh = fopen(LEADS_LOG, 'a');
if ($fh) {
    if ($isNewFile) {
        fputcsv($fh, ['Submitted At', 'Name', 'Email', 'Phone', 'Service', 'Message']);
    }
    fputcsv($fh, $row);
    fclose($fh);
}

$subject = 'New enquiry: ' . $service;
$body  = "New enquiry from The Finance Bureau website\n\n";
$body .= "Name: {$name}\n";
$body .= "Email: {$email}\n";
$body .= "Phone: {$phone}\n";
$body .= "Service: {$service}\n\n";
$body .= "Message:\n{$message}\n";

$headers = "From: The Finance Bureau Website <" . NOTIFY_EMAIL . ">\r\n";
$headers .= "Reply-To: {$name} <{$email}>\r\n";

@mail(NOTIFY_EMAIL, $subject, $body, $headers);

backToForm('sent=1');
