<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
include "../../connections/dbname.php";

$ref_num = $_POST['ref_num'];
$language = $_POST['language'];  //_en, _cn, _kr, _jp

$country_name = "country_name" . $language;
$header_text = "header_text" . $language;
$description = "description" . $language;

$tablename = $database . ".`wt_eductour_tour_details`";
$sql = "SELECT `country_img`, `$country_name` AS `country_name`, `$header_text` AS `header_text`, `$description` AS `description` FROM $tablename
        WHERE `ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $ref_num);
$stmt->execute();
$result = $stmt->get_result();

$tour_det = [];
while ($row = $result->fetch_assoc()) {
    $tour_det[] = $row;
}
echo json_encode($tour_det);
?>