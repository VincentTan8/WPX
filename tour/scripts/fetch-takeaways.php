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

$takeaway = "takeaway" . $language;

$tablename = $database . ".`wt_eductour_takeaway`";
$sql = "SELECT `ref_num`, `$takeaway` AS `takeaway` FROM $tablename
        WHERE `tour_details_ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $tour_details_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$takeaways = [];
while ($row = $result->fetch_assoc()) {
    $takeaways[] = $row;
}
echo json_encode($takeaways);
?>