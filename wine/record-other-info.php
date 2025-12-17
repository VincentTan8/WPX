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
$kid_number = $input["kid_number"] ?? null;
$dietary = $input["dietary"] ?? null;

$tablename = $database . ".`wt_wine_other_info`";

$sql = "INSERT INTO $tablename (`intent_id`, `kid_number`, `dietary`) 
            VALUES (?, ?, ?);";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $intent_id, $kid_number, $dietary);
if (!$stmt->execute()) {
    echo "Info [$intent_id] not saved";
}

$stmt->close();