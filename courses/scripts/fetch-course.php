<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
//Fetches a specific course based on a ref_num
include "../../connections/dbname.php";

$courses_ref_num = $_POST['courses_ref_num'];
$language = $_POST['language'];  //_en, _cn, _kr, _jp

$course_title = "course_title" . $language;
$course_short_title = "course_short_title" . $language;
$course_subtitle = "course_subtitle" . $language;
$course_description = "course_description" . $language;
$thumbnail_tag = "thumbnail_tag" . $language;
$suitable_for = "suitable_for" . $language;
$course_start_date = "course_start_date" . $language;
$class_hours = "class_hours" . $language;

$tablename = $database . ".`wt_courses`";

$sql = "SELECT `ref_num`, `course_img`, `age_group`, `language`, `course_package`, `course_type`,
               `$course_title` AS `course_title`, `$course_short_title` AS `course_short_title`, 
               `$course_subtitle` AS `course_subtitle`, `$course_description` AS `course_description`, 
               `$thumbnail_tag` AS `thumbnail_tag`, `$suitable_for` AS `suitable_for`,
               `$course_start_date` AS `course_start_date`, `$class_hours` AS `class_hours`
        FROM $tablename
        WHERE `courses_ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $courses_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$course = [];
while ($row = $result->fetch_assoc()) {
    $course[] = $row;
}
echo json_encode($course);
?>