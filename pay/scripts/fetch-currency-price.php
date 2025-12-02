<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
include "../../connections/dbname.php";

$tablename = $database . ".`wt_rates_prices`";

$currency = $_GET['currency'] ?? '';
$course_name = $_GET['course_name'] ?? '';

$sql = "SELECT `price` FROM $tablename
        WHERE `currency` = ? AND `course_name` = ? LIMIT 1";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $currency, $course_name);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

echo json_encode([
    "price" => $row['price'] ?? null
]);
?>