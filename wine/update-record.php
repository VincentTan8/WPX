<?php
if (!isset($_SESSION)) {
    ini_set('session.gc_maxlifetime', 60 * 60 * 24 * 365);
    session_start();
    ob_start();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../connections/dbname.php";

$input = json_decode(file_get_contents("php://input"), true);

$intent_id = $input["intent_id"] ?? null;
$course_name = $input["coursePaid"] ?? null;
$currency = $input["currency"] ?? null;
$amount = $input["amount"] ?? null;
$full_name = $input["fullName"] ?? null;
$email = $input["email"] ?? null;
$mobile_number = $input["mobileNumber"] ?? null;
$order_id = $input["orderID"] ?? null;
$status = $input["status"] ?? null;
$sqlDatetime = $input["dateTime"] ?? null;

$tablename = $database . ".`wt_payment_records`";
$sql = "INSERT INTO $tablename (`intent_id`, `course_name`, `currency`, `amount`, `full_name`, `email`, `mobile_number`, `order_id`, `status`, `transaction_date`) 
        VALUES ('$intent_id', '$course_name', '$currency', '$amount', '$full_name', '$email', '$mobile_number', '$order_id', '$status', '$sqlDatetime');";

if (!$conn->query($sql)) {
    echo "Record not saved";
}


// for reference only
// $stmt = $conn->prepare($sql);
// $stmt->bind_param("ss", $currency, $course_name);
// $stmt->execute();
// $result = $stmt->get_result();
// $row = $result->fetch_assoc();
// $amount = $row['price'];