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

$description = "description" . $language;

$tablename = $database . ".`wt_eductour_itineraries`";
$sql = "SELECT `ref_num`, `day_no`, `$description` AS `description` FROM $tablename
        WHERE `tour_details_ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $tour_details_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$tour_det = [];
while ($row = $result->fetch_assoc()) {
    $tour_det[] = $row;
}
echo json_encode($tour_det);
?>