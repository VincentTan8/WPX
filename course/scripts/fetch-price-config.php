<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
//Fetch available selections for config
include "../../connections/dbname.php";

$age_group = $_POST['age_group'];
$course_type = $_POST['course_type'];
$lang = $_POST['language']; // _en, _cn

$display_name = "display_name" . $lang;

$tablename = $database . ".`wt_rates_prices`";
$sessiontable = $database . ".`wt_rates_session_types`";

$sql = "SELECT DISTINCT(rst.ref_num), rst.$display_name AS `display_name` FROM $sessiontable rst
        JOIN $tablename t ON t.session_type_ref_num = rst.ref_num
        WHERE t.course_category = ? AND t.age_group = ? ORDER BY rst.ref_num DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $course_type, $age_group);
$stmt->execute();
$result = $stmt->get_result();

$session_types = [];
while ($row = $result->fetch_assoc()) {
    $session_types[] = $row;
}

$sql = "SELECT DISTINCT(`num_sessions`) FROM $tablename
        WHERE `course_category` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $course_type);
$stmt->execute();
$result = $stmt->get_result();

$num_sessions = [];
while ($row = $result->fetch_assoc()) {
    $num_sessions[] = $row;
}

$config['session_types'] = $session_types;
$config['num_sessions'] = $num_sessions;
echo json_encode($config);
?>