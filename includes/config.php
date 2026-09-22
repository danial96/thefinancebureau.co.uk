<?php
// Update SITE_URL to the live domain before launch.
if (!defined('SITE_URL')) {
    define('SITE_URL', 'https://thefinancebureau.co.uk');
}
// Business inbox that receives quote/enquiry notifications.
if (!defined('NOTIFY_EMAIL')) {
    define('NOTIFY_EMAIL', 'info@thefinancebureau.co.uk');
}
// WhatsApp/phone contact number — digits only (no +, spaces) for wa.me links.
if (!defined('WHATSAPP_NUMBER')) {
    define('WHATSAPP_NUMBER', '447308504426');
}
