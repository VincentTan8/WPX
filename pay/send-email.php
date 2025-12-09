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
$subject = "WeTalk - Payment Successful";

$bodyContent = "<div style='font-size: 16px'>
    <p>Thank you for your payment, $full_name</p>
    <p style='margin-left: 15px'><strong>Order ID:</strong> $order_id</p>
    <p style='margin-left: 15px'><strong>Course:</strong> $course_name</p>
    <p style='margin-left: 15px'><strong>Amount Paid:</strong> $currency $amount</p>
    
    <p style='margin-top: 20px; margin-bottom: 10px'>For assistance, please contact WeTalk Support. Details below.</p>
    <span>Singapore: +65 9758 - 2288</span>
    <br>
    <span>Philippines: +63 9171 - 6816 - 80</span>
    <br>
    <span>China: +86 1816 - 5370 - 116</span>
    </div>

    <br><br>
";
$mail->Subject = $subject;
$mail->Body = $bodyContent;
$mail->send();
$mail->clearAddresses();
$mail->clearAttachments();