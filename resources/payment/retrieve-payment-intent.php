<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
header("Content-Type: application/json");

require_once __DIR__ . "/airwallex-functions.php";

$intent_id = $_GET['intent_id'];

try {
    $res = retrievePaymentIntent($intent_id);

    if ($res["status"] === 200) {
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
