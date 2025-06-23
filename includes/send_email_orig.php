<?php
if(!isset($_SESSION)){
ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 365);	
session_start();
ob_start();
}
?>


<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require '../PHPMailer/src/Exception.php'; 
require '../PHPMailer/src/PHPMailer.php'; 
require '../PHPMailer/src/SMTP.php'; 
 $mail = new  PHPMailer();

 //smtp.office365.com
 //STARTTLS
 //BMBE@dti.gov.ph
 //DTI2022!
 
 
  
 
/*$mail->isSMTP();                     
$mail->Host = 'smtp.gmail.com';       
$mail->Port =587;                    
 $mail->SMTPAuth = true;          
 $mail->SMTPSecure = 'tsl';           
  $mail->Username = 'bmbenoreply@gmail.com';   
 $mail->Password = 'vdmbomszxzcapnmn';*/
 
/*
  $mail->isSMTP();                     
$mail->Host = 'smtp.gmail.com';       
$mail->Port =587;                    
 $mail->SMTPAuth = true;          
 $mail->SMTPSecure = 'tsl';           
  $mail->Username = 'm.onesolutions.noreply@gmail.com';   
 $mail->Password = 'cuny wkza bghv ipqx';   */
 
 
 $mail->isSMTP();                     
$mail->Host = 'smtp.office365.com';       
$mail->Port =587;                    
$mail->SMTPAuth = true;          
 $mail->SMTPSecure = 'tsl';           
  $mail->Username = 'no-reply@wetalk.com';   
 $mail->Password = 'T%048848824367ata'; 

 
 

//PHPMailer::ENCRYPTION_STARTTLS

//$mail->SMTPDebug = 3;

 
 //echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";
// Sender info 
//$mail->SMTPKeepAlive = true;
$mail->setFrom('no-reply@wetalk.com', 'WETALK-ONLINE'); 
$mail->addReplyTo('no-reply@wetalk.com', 'WETALK-ONLINE'); 
 
//$_SESSION['your_email']='contact@wetalk.com';
 
$customer=$_SESSION['customer'];

$receiver='contact@wetalk.com';


//$receiver='shef735@gmail.com';
// Add a recipient 
$mail->addAddress($receiver,'WETALK-CONTACT'); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
 
 $subject= 'New Customer Inquiry'; 
// Mail subject 

 $otp_number='';
 

if(!isset($bodyContent)) {
	$bodyContent='';
}


 
/////////////////////////////////////////////


$_SESSION['thank_you_email']=' 
							<p>Should you have any concerns, please contact / visit our website (<a href="https://wetalk.com">https://wetalk.com</a>) or email contact@wetalk.com.
							</p> <p>Thank you.</p> ';


 
// Mail body content 
$bodyContent = '<h1>NEW CUSTOMER INQUIRY</h1>'; 
$bodyContent .= '<p> <b> Email : </b> </p>'.$_SESSION['your_email'];
$bodyContent .= '<p> <b> Name : </b> </p>'.$_SESSION['customer'];
$bodyContent .= '<p> <b> Contact : </b> </p>'.$_SESSION['contact'];					
$bodyContent .= '<p> <b> Course : </b> </p>'.$_SESSION['course'];		
$bodyContent .= '<p> <b> Message : </b> </p>'.$_SESSION['message'].'</br></br><hr>';	

/////////////////////////////////////////


$mail->Subject = $subject;					
$mail->Body = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
  //echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
 //echo 'Message has been sent.'; 
} 

$mail->clearAddresses();
    $mail->clearAttachments();
 
?>