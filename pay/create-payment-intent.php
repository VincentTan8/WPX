<?php
header("Content-Type: application/json");

require_once __DIR__ . "/airwallex_functions.php";

// Read JSON from frontend
$input = json_decode(file_get_contents("php://input"), true);

$amount = $input["amount"] ?? null;
$currency = $input["currency"] ?? null;
$order_id = $input["merchant_order_id"] ?? uniqid("OrderID_"); //constructed like this to handle custom order ID's in the future

if (!$amount || !$currency) {
    echo json_encode([
        "success" => false,
        "error" => "Missing amount or currency"
    ]);
    exit;
}

//todo Fetch amount based on currency and course selection

try {
    $res = createPaymentIntent($amount, $currency, $order_id);

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
