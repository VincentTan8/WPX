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

$learning_goal = "learning_goal" . $language;

$tablename = $database . ".`wt_course_learning_goals`";
$sql = "SELECT `ref_num`, `$learning_goal` AS `learning_goal` 
        FROM $tablename
        WHERE `courses_ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $courses_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$learning_goals = [];
while ($row = $result->fetch_assoc()) {
    $learning_goals[] = $row;
}
echo json_encode($learning_goals);
?>