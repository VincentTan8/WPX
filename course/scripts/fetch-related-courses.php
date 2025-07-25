<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
//Fetches all courses based on whatever filter is present or fetches all courses if no filters are set
//Not all details are selected here to avoid long loading times
include "../../connections/dbname.php";

$language = $_POST['language'];  //_en, _cn, _kr, _jp
$lang_filter = $_POST['lang_filter'];
$package_filter = $_POST['package_filter'];
$age_filter = $_POST['age_filter'];
$type_filter = $_POST['type_filter'];

$course_short_title = "course_short_title" . $language;
$course_description = "course_description" . $language;
$thumbnail_tag = "thumbnail_tag" . $language;

$tablename = $database . ".`wt_courses`";

// Initialize query and parameters
$where_clauses = [];
$params = [];
$types = ""; // For prepared statements (e.g., "sss")
//check which filters are set
if (!empty($lang_filter)) {
    $where_clauses[] = "`language` = ?";
    $params[] = $lang_filter;
    $types .= "s";
}
if (!empty($package_filter)) {
    $where_clauses[] = "`course_package` = ?";
    $params[] = $package_filter;
    $types .= "s";
}
if (!empty($age_filter)) {
    $where_clauses[] = "`age_group` = ?";
    $params[] = $age_filter;
    $types .= "s";
}
if (!empty($type_filter)) {
    $where_clauses[] = "`course_type` = ?";
    $params[] = $type_filter;
    $types .= "s";
}

$where_sql = "";
if (!empty($where_clauses)) {
    $where_sql = "WHERE " . implode(" AND ", $where_clauses);
}

$sql = "SELECT `ref_num`, `course_img`, `age_group`, `language`, `course_package`, `course_type`,
               `$course_short_title` AS `course_short_title`, 
               `$course_description` AS `course_description`, 
               `$thumbnail_tag` AS `thumbnail_tag`
        FROM $tablename
        $where_sql";

$stmt = $conn->prepare($sql);
if (!empty($params)) {
    $stmt->bind_param($types, ...$params);
}
$stmt->execute();
$result = $stmt->get_result();

$courses = [];
while ($row = $result->fetch_assoc()) {
    $courses[] = $row;
}
echo json_encode($courses);
?>