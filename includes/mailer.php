<?php
/**
 * Wraps email body HTML in a branded shell (navy header/footer, matching
 * the site) and sends it via PHP's mail(). Table-based layout with inline
 * styles for email client compatibility.
 */
function renderEmailShell($bodyHtml) {
    return '<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin:0; padding:0; background:#F7F5F0;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#F7F5F0; padding:32px 16px;">
<tr><td align="center">
<table role="presentation" width="600" cellpadding="0" cellspacing="0" style="max-width:600px; width:100%; background:#FFFFFF; border-radius:16px; overflow:hidden; border:1px solid #E4E0D8;">
  <tr>
    <td style="background:#0B1E3D; padding:28px 32px;">
      <span style="font-family: Georgia, \'Times New Roman\', serif; font-size:20px; font-weight:bold; color:#FFFFFF;">The Finance <span style="color:#C9A24B;">Bureau</span></span>
    </td>
  </tr>
  <tr>
    <td style="padding:36px 32px; font-family: Arial, Helvetica, sans-serif; color:#16181D; font-size:15px; line-height:1.65;">
      ' . $bodyHtml . '
    </td>
  </tr>
  <tr>
    <td style="background:#0B1E3D; padding:20px 32px; font-family: Arial, Helvetica, sans-serif; font-size:12px; color:rgba(247,245,240,0.65);">
      The Finance Bureau &middot; ' . NOTIFY_EMAIL . ' &middot; London, United Kingdom
    </td>
  </tr>
</table>
</td></tr>
</table>
</body>
</html>';
}

/**
 * @param string $to
 * @param string $subject
 * @param string $bodyHtml Inner content only — renderEmailShell() wraps it.
 * @param string|null $replyTo
 * @param string|null $replyToName
 */
function sendBrandedEmail($to, $subject, $bodyHtml, $replyTo = null, $replyToName = null) {
    $html = renderEmailShell($bodyHtml);

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: The Finance Bureau <" . NOTIFY_EMAIL . ">\r\n";
    if ($replyTo) {
        $name = $replyToName ?: $replyTo;
        $headers .= "Reply-To: {$name} <{$replyTo}>\r\n";
    }

    return @mail($to, $subject, $html, $headers);
}
