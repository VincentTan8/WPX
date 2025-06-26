<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
include "../../connections/dbname.php";

$tour_details_ref_num = $_POST['tour_details_ref_num']; // tour details ref_num
$language = $_POST['language'];  //_en, _cn, _kr, _jp

$title = "title" . $language;
$description = "description" . $language;

$tablename = $database . ".`wt_eductour_program_details`";
$sql = "SELECT `program_img`, `$title` AS `title`, `$description` AS `description` FROM $tablename
        WHERE `tour_details_ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $tour_details_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$prog_det = [];
while ($row = $result->fetch_assoc()) {
    $prog_det[] = $row;
}
echo json_encode($prog_det);
?>