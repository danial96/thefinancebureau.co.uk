<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/mailer.php';

const LEADS_LOG = __DIR__ . '/../leads.csv';

function clean($value) {
    return trim(preg_replace('/[\r\n]+/', ' ', (string) $value));
}

function backToForm($status) {
    $redirect = '../contact?' . $status;
    header('Location: ' . $redirect);
    exit;
}

function toThankYou($name) {
    $redirect = '../thank-you?name=' . urlencode($name);
    header('Location: ' . $redirect);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    backToForm('error=1');
}

// Spam defence: honeypot field bots tend to auto-fill, and a minimum
// fill time (real people take at least a couple of seconds). Both
// checks fail silently — pretend success so bots don't adapt.
$honeypot = trim((string) ($_POST['company_website'] ?? ''));
$submittedAt = (int) ($_POST['ts'] ?? 0);
$elapsed = time() - $submittedAt;
if ($honeypot !== '' || $submittedAt === 0 || $elapsed < 3) {
    toThankYou(clean($_POST['name'] ?? ''));
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

$firstName = explode(' ', $name)[0];
$safeName = htmlspecialchars($name);
$safeEmail = htmlspecialchars($email);
$safePhone = htmlspecialchars($phone !== '' ? $phone : 'Not provided');
$safeService = htmlspecialchars($service);
$safeMessage = $message !== '' ? nl2br(htmlspecialchars($message)) : '<em style="color:#5B6472;">No message provided.</em>';

// Notify the business
$staffSubject = 'New enquiry: ' . $service;
$staffBody = '
  <h2 style="margin:0 0 16px; font-family: Georgia, serif; color:#0B1E3D; font-size:20px;">New website enquiry</h2>
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:14px; margin-bottom:20px;">
    <tr><td style="padding:6px 0; color:#5B6472; width:110px;">Name</td><td style="padding:6px 0; font-weight:bold;">' . $safeName . '</td></tr>
    <tr><td style="padding:6px 0; color:#5B6472;">Email</td><td style="padding:6px 0;"><a href="mailto:' . $safeEmail . '" style="color:#0B1E3D;">' . $safeEmail . '</a></td></tr>
    <tr><td style="padding:6px 0; color:#5B6472;">Phone</td><td style="padding:6px 0;">' . $safePhone . '</td></tr>
    <tr><td style="padding:6px 0; color:#5B6472;">Service</td><td style="padding:6px 0;">' . $safeService . '</td></tr>
  </table>
  <p style="margin:0 0 8px; color:#5B6472; font-size:13px; text-transform:uppercase; letter-spacing:0.05em;">Message</p>
  <p style="margin:0; padding:16px; background:#F7F5F0; border-radius:8px;">' . $safeMessage . '</p>
';
sendBrandedEmail(NOTIFY_EMAIL, $staffSubject, $staffBody, $email, $name);

// Confirm receipt with the customer
$customerSubject = 'Thanks for reaching out to The Finance Bureau';
$customerBody = '
  <h2 style="margin:0 0 16px; font-family: Georgia, serif; color:#0B1E3D; font-size:20px;">Thanks, ' . htmlspecialchars($firstName) . '.</h2>
  <p>We\'ve received your enquiry about <strong>' . $safeService . '</strong> and our team will be in touch shortly, most clients hear back within minutes during business hours.</p>
  <p style="margin:0 0 8px; color:#5B6472; font-size:13px; text-transform:uppercase; letter-spacing:0.05em;">What you told us</p>
  <p style="margin:0 0 20px; padding:16px; background:#F7F5F0; border-radius:8px;">' . $safeMessage . '</p>
  <p style="margin:0;">If anything changes or you\'d like to add more detail, just reply directly to this email.</p>
  <p style="margin:24px 0 0;">Best,<br>The Finance Bureau Team</p>
';
sendBrandedEmail($email, $customerSubject, $customerBody);

toThankYou($name);
