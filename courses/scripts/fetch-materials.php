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

$material = "material" . $language;

$tablename = $database . ".`wt_course_materials`";
$sql = "SELECT `ref_num`, `$material` AS `material` 
        FROM $tablename
        WHERE `courses_ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $courses_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$materials = [];
while ($row = $result->fetch_assoc()) {
    $materials[] = $row;
}
echo json_encode($materials);
?>