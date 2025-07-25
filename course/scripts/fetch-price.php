<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
//Fetch price of given config
include "../../connections/dbname.php";

$age_group = $_POST['age_group'];
$course_type = $_POST['course_type'];
$session_type = $_POST['session_type_ref_num'];
$num_sessions = $_POST['num_sessions'];
$currency = $_POST['currency'];

$tablename = $database . ".`wt_rates_prices`";

$sql = "SELECT * FROM $tablename
        WHERE `course_category` = ? AND `age_group` = ? AND
              `session_type_ref_num` = ? AND `num_sessions` = ? AND
              `currency` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssis", $course_type, $age_group, $session_type, $num_sessions, $currency);
$stmt->execute();
$result = $stmt->get_result();

$price = [];
while ($row = $result->fetch_assoc()) {
    $price[] = $row;
}
echo json_encode($price);
?>