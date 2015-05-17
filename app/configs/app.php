<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 17/05/15
 * Time: 00:40
 */

/*
|--------------------------------------------------------------------------
| Application app
|--------------------------------------------------------------------------
|
| Here global configuration of the BB-MVC such us email or database
| configurations...
|
*/

/**
 * Email settings (Example gmail SMTP server access credentials)
 */
// SMTP host ex : smtp.gmail.com
define("SMTP_HOST","");
// SMTP user ex : example@gmail.com
define("SMTP_USER","");
// SMTP password ex : gmailpassword
define("SMTP_PASS","");
// SMTP from, when sending email, the from email
define("SMTP_FROM","");
// Use html in core of email, default sets as false
define("SMTP_HTML",false);
// SMTP secure, default sets as tls
define("SMTP_SECURE","tls");
// SMTP default port sets as 587
define("SMTP_PORT",587);


/**
 * Database settings (Example MySQL server)
 */
// Database server host address
define("DB_HOST","");
// Database name
define("DB_NAME","");
// Database user name
define("DB_USER","");
// Database user password
define("DB_PASS","");
