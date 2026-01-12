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

// $bodyContent = "<div style='font-size: 16px'>
//     <p>Thank you for your payment, $full_name</p>
//     <p style='margin-left: 15px'><strong>Order ID:</strong> $order_id</p>
//     <p style='margin-left: 15px'><strong>Course:</strong> $course_name</p>
//     <p style='margin-left: 15px'><strong>Amount Paid:</strong> $currency $amount</p>

//     <p style='margin-top: 20px; margin-bottom: 10px'>For assistance, please contact WeTalk Support. Details below.</p>
//     <span>Singapore: +65 9758 - 2288</span>
//     <br>
//     <span>Philippines: +63 9171 - 6816 - 80</span>
//     <br>
//     <span>China: +86 1816 - 5370 - 116</span>
//     </div>

//     <br><br>
// ";

$supportText = "For assistance, please contact WeTalk Support. Details below.<br><br>

                <strong>Singapore:</strong> +65 9758-2288<br>
                <strong>Philippines:</strong> +63 9171-6816-80<br>
                <strong>China:</strong> +86 1816-5370-116";

if (
  $course_name === "English Immersion Course" ||
  $course_name === "Private English Course"
) {
  $supportText = "Our Team will contact you to arrange class schedules and next steps.<br>
                  If you have any questions, please contact us directly +886227518111<br>";
}

$bodyContent = '
<table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4;padding:30px 0;">
  <tr>
    <td align="center">

      <!-- Receipt Card -->
      <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:12px;padding:40px 30px;font-family:Arial,Helvetica,sans-serif;text-align:center;">

        <!-- Icon -->
        <tr>
          <td style="padding-bottom:30px;">
            <img src="https://wetalk.com/pay/assets/payment-icon.png" width="100" alt="Success" style="display:block;margin:auto;">
          </td>
        </tr>

        <!-- Title -->
        <tr>
          <td style="font-size:35px;font-weight:bold;color:#ffb100;padding-bottom:20px;">
            Payment Successful!
          </td>
        </tr>

        <!-- Subtitle -->
        <tr>
          <td style="font-size:17px;color:#666;padding-bottom:25px;">
            Hi ' . $full_name . ', <br>
            Thank you for your purchase.
          </td>
        </tr>

        <!-- Details -->
        <tr>
          <td align="center">
            <table cellpadding="5" cellspacing="0" style="font-size:18px;color:#333;text-align:left;line-height:1.8;">
              <tr>
                <td style="padding-right:10px;"><strong>Order ID:</strong></td>
                <td>' . $order_id . '</td>
              </tr>
              <tr>
                <td><strong>Course:</strong></td>
                <td>' . $course_name . '</td>
              </tr>
              <tr>
                <td><strong>Amount Paid:</strong></td>
                <td>' . $currency . ' ' . $amount . '</td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- Support Text -->
        <tr>
          <td style="font-size:17px;color:#777;padding-top:35px;line-height:1.6;">
            ' . $supportText . '
          </td>
        </tr>

      </table>

    </td>
  </tr>
</table>
';
$mail->Subject = $subject;
$mail->Body = $bodyContent;
if (!$mail->send()) {
  echo $mail->ErrorInfo;
}
$mail->clearAddresses();
$mail->clearAttachments();