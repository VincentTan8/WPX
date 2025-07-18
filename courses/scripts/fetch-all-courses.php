<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
include "../../connections/dbname.php";

$language = $_POST['language']; //  _en, _cn, _kr, _jp


$course_short_title = "course_short_title" . $language;
$course_description = "course_description" . $language;
$thumbnail_tag = "thumbnail_tag" . $language;


$tablename = $database . ".`wt_courses`";
$sql = "SELECT 
            `ref_num`, 
            `course_img`, 
            `course_list_img`, 
            `$course_short_title` AS `course_short_title`, 
            `$thumbnail_tag` AS `thumbnail_tag`, 
            `$course_description` AS `course_description`, 
            `course_type` 
        FROM $tablename";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

$courses = [];
while ($row = $result->fetch_assoc()) {
    $courses[] = $row;
}
echo json_encode($courses);
?>