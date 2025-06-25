<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
include "../../connections/dbname.php";

$dest_ref_num = $_POST['destination_ref_num'];
$language = $_POST['language'];  //_en, _cn, _kr, _jp

$country_name = "country_name" . $language;
$card_header_text = "card_header_text" . $language;
$card_description = "card_description" . $language;

$tablename = $database . ".`wt_eductour_destinations`";
$sql = "SELECT `ref_num`, `country_img`, `$country_name` AS `country_name`, `$card_header_text` AS `card_header_text`, `$card_description` AS `card_description` FROM $tablename
        WHERE `ref_num` != ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $dest_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$dest = [];
while ($row = $result->fetch_assoc()) {
    $dest[] = $row;
}
echo json_encode($dest);
?>