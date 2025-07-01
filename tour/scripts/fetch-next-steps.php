<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
include "../../connections/dbname.php";

$tour_details_ref_num = $_POST['tour_details_ref_num'];  //tour details ref_num
$language = $_POST['language'];  //_en, _cn, _kr, _jp

$info_1 = "info_1" . $language;
$info_2 = "info_2" . $language;
$info_3 = "info_3" . $language;
$info_4 = "info_4" . $language;
$info_5 = "info_5" . $language;
$info_6 = "info_6" . $language;

$tablename = $database . ".`wt_eductour_next_steps`";
$sql = "SELECT `ref_num`, `$info_1` AS `info_1`, `$info_2` AS `info_2`, `$info_3` AS `info_3`, `$info_4` AS `info_4`, `$info_5` AS `info_5`, `$info_6` AS `info_6` 
        FROM $tablename
        WHERE `tour_details_ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $tour_details_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$next_steps = [];
while ($row = $result->fetch_assoc()) {
    $next_steps[] = $row;
}
echo json_encode($next_steps);
?>