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
$guests = $input["guests"] ?? null;
$referred_by = $input["referred_by"] ?? null;
$order_id = $input["orderID"] ?? null;

$tablename = $database . ".`wt_wine_guest`";

if (!$order_id) {
    $sql = "INSERT INTO $tablename (`intent_id`, `full_name`, `referred_by`) 
            VALUES (?, ?, ?);";
    $stmt = $conn->prepare($sql);

    foreach ($guests as $guest) {
        $stmt->bind_param("sss", $intent_id, $guest, $referred_by);
        if (!$stmt->execute()) {
            echo "Guest [$guest] not saved";
        }
    }

    $stmt->close();
} else {
    $sql = "UPDATE $tablename
            SET `order_id` = ?
            WHERE `intent_id` = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $order_id, $intent_id);

    if (!$stmt->execute()) {
        echo "Order ID [$order_id] not updated";
    }
}