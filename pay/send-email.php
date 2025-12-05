<?php
if (!isset($_SESSION)) {
    ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 365);
    session_start();
    ob_start();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$input = json_decode(file_get_contents("php://input"), true);

$course_name = $input["coursePaid"] ?? null;
$amount = $input["amount"] ?? null;
$currency = $input["currency"] ?? null;
$email = $input["email"] ?? null;
$full_name = $input["fullName"] ?? null;
$mobile_number = $input["mobileNumber"] ?? null;
$order_id = $input["orderID"] ?? null;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../resources/PHPMailer/src/Exception.php';
require '../resources/PHPMailer/src/PHPMailer.php';
require '../resources/PHPMailer/src/SMTP.php';
$mail = new PHPMailer();
//PHPMailer setup
$mail->isSMTP();
$mail->Host = 'smtp.office365.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tsl';
$mail->Username = 'no-reply@wetalk.com';
$mail->Password = 'T%048848824367ata';

//send email to customer
$mail->setFrom('no-reply@wetalk.com', 'WeTalk Educational Corp');
$mail->addReplyTo('no-reply@wetalk.com', 'WeTalk Educational Corp');
$mail->addAddress($email);
$mail->isHTML(true);
$subject = "Payment Confirmation";

$bodyContent = "
    <p>Your payment of <strong>$currency $amount</strong> for <strong>$course_name</strong> has been processed.</p>
    <p>Your Order ID is <strong>$order_id</strong></p>

    <br><br>
";
$mail->Subject = $subject;
$mail->Body = $bodyContent;
$mail->send();
$mail->clearAddresses();
$mail->clearAttachments();