<?php
/**
 * Created by PhpStorm.
 * User: Brah
 * Date: 11/05/15
 * Time: 12:17
 */

/*
|--------------------------------------------------------------------------
| Application Mail Helper
|--------------------------------------------------------------------------
|
| The Mail class is a helper to  handle sending email from the classic
| email sending library for PHP (PHPMailer)
|
*/

/**
 * Class Mail
 */
class Mail {

    /**
     * Disallow creating a new object of the class with new Mail()
     */
    private function __construct() {}

    /**
     * Disallow cloning the class
     */
    private function __clone() {}

    /**
     * Send an email
     *
     * @param string $name     Name
     * @param string $email    Email address
     * @param string $subject  Subject
     * @param string $body     Body
     *
     * @return boolean         true if the email was sent successfully, false otherwise
     */
    public static function send($name, $email, $subject, $body)
    {
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = SMTP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMTP_USER;
        $mail->Password = SMTP_PASS;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port = SMTP_PORT;
        $mail->From = SMTP_FROM;
        $mail->isHTML(SMTP_HTML);
        $mail->addAddress($email, $name);
        $mail->Subject = $subject;
        $mail->Body = $body;

        if (!$mail->send())
        {
            //error_log($mail->ErrorInfo);
            return false;
        }
        else
        {
            return true;
        }
    }

}
