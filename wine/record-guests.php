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

$intent_id = $input["intent"] ?? null;
$guests = $input["guests"] ?? null;

$tablename = $database . ".`wt_wine_guest`";

foreach ($guests as $guest) {
    $sql = "INSERT INTO $tablename (`intent_id`, `full_name`) 
            VALUES ('$intent_id', '$guest');";

    if (!$conn->query($sql)) {
        echo "Guest [$guest] not saved";
    }
}