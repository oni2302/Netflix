<?php
require _ROOT . '/PHPMailer-master/src/Exception.php';
require _ROOT . '/PHPMailer-master/src/PHPMailer.php';
require _ROOT . '/PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;

class MailCore
{
    private $mail;
    public function __construct()
    {
        $this->mail = new PHPMailer();                                   //Send using SMTP
        $this->mail->Host       = 'smtp.gmail.com';
        $this->mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $this->mail->Username   = 'phuongtky2003@gmail.com';              //SMTP username
        $this->mail->Password   = 'P@ssd2302';                               //SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $this->mail->Port       = 587;
        $this->mail->CharSet = "UTF-8";
    }
    public function sendEmail($to, $subject, $message)
    {
        // Set the recipient, subject, and message body
        $this->mail->setFrom('phuongtky2003@gmail.com', 'Your Name');
        $this->mail->addAddress($to);
        $this->mail->Subject = $subject;
        $this->mail->Body = $message;

        // Send the email
        if ($this->mail->send()) {
            return true; // Email sent successfully
        } else {
            return $this->mail->ErrorInfo; // Error message if email sending fails
        }
    }
    public function sendSubscriptionEmail($recipientName, $planName, $price,$recipientMail)
    {
        $emailContent = file_get_contents('notifyMail.html');

        // Replace placeholders with actual data
        $emailContent = str_replace('[Customer Name]', $recipientName, $emailContent);
        $emailContent = str_replace('[Plan Name]', $planName, $emailContent);
        $emailContent = str_replace('[Price]', $price, $emailContent);

        $this->mail->setFrom('phuongtky2003@gmail.com', 'Netflix');
        $this->mail->addAddress($recipientMail); // Change to the recipient's email address
        $this->mail->Subject = 'Xác nhận đăng kí gói dịch vụ';
        $this->mail->isHTML(true);
        $this->mail->Body = $emailContent;

        if ($this->mail->send()) {
            echo 'Subscription confirmation email sent successfully!';
        } else {
            echo 'Email could not be sent. Error: ' . $this->mail->ErrorInfo;
        }
    }
}
