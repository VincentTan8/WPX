<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
include "../../connections/dbname.php";

$language = $_POST['language'];  //_en, _cn, _kr, _jp
$lang_filter = $_POST['lang_filter'];
$package_filter = $_POST['package_filter'];
$age_filter = $_POST['age_filter'];
$type_filter = $_POST['type_filter'];

$course_title = "course_title" . $language;
$course_short_title = "course_short_title" . $language;
$course_subtitle = "course_subtitle" . $language;
$course_description = "course_description" . $language;
$thumbnail_tag = "thumbnail_tag" . $language;
$suitable_for = "suitable_for" . $language;
$course_start_date = "course_start_date" . $language;

$tablename = $database . ".`wt_courses`";
$sql = "SELECT `ref_num`, `course_img`, `age_group`, `language`, `class_hours`, `course_package`, `course_type`,
               `$course_title` AS `course_title`, `$course_short_title` AS `course_short_title`, 
               `$course_subtitle` AS `course_subtitle`, `$course_description` AS `course_description`, 
               `$thumbnail_tag` AS `thumbnail_tag`, `$suitable_for` AS `suitable_for`,
               `$course_start_date` AS `course_start_date`
        FROM $tablename
        WHERE `some filter` = ?";   //todo

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $courses_ref_num); //todo update to whatever
$stmt->execute();
$result = $stmt->get_result();

$courses = [];
while ($row = $result->fetch_assoc()) {
    $courses[] = $row;
}
echo json_encode($courses);
?>