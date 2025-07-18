<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
include "../../connections/dbname.php";

$courses_ref_num = $_POST['courses_ref_num'];
$language = $_POST['language'];  //_en, _cn, _kr, _jp

$feature = "feature" . $language;
$feature_bold = "feature_bold" . $language;

$tablename = $database . ".`wt_course_features`";
$sql = "SELECT `ref_num`, `$feature` AS `feature`, `$feature_bold` AS `feature_bold`
        FROM $tablename
        WHERE `courses_ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $courses_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$features = [];
while ($row = $result->fetch_assoc()) {
    $features[] = $row;
}
echo json_encode($features);
?>