<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
header("Content-Type: application/json");

require_once __DIR__ . "/airwallex-functions.php";

include "../connections/dbname.php";

// Read JSON from frontend
$input = json_decode(file_get_contents("php://input"), true);

$course_name = $input["course_name"] ?? null;
$currency = $input["currency"] ?? null;
$email = $input["email"] ?? null;
$full_name = $input["full_name"] ?? null;
$mobile_number = $input["mobile_number"] ?? null;
$order_id = $input["merchant_order_id"] ?? uniqid("WeTalkOrder_"); //constructed like this to handle custom order ID's in the future

if (!$course_name || !$currency) {
    echo json_encode([
        "success" => false,
        "error" => "Missing course name or currency"
    ]);
    exit;
}

//Fetch amount based on currency and course selection
$tablename = $database . ".`wt_rates_prices`";
$sql = "SELECT `price` FROM $tablename
        WHERE `currency` = ? AND `course_name` = ? LIMIT 1";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $currency, $course_name);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$amount = $row['price'];

try {
    $res = createPaymentIntent($amount, $currency, $order_id, $course_name, $email, $full_name, $mobile_number);

    if ($res["status"] === 201) {
        echo json_encode([
            "success" => true,
            "body" => $res["body"]
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "error" => $res["body"]
        ]);
    }

} catch (Exception $e) {
    echo json_encode([
        "success" => false,
        "error" => $e->getMessage()
    ]);
}
