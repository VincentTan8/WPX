<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
//Fetch course names for unified payment page
include "../../connections/dbname.php";

$tablename = $database . ".`wt_rates_prices`";

$sql = "SELECT DISTINCT `course_name` FROM $tablename
        WHERE `course_name` IS NOT NULL AND TRIM(`course_name`) <> ''";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

$course_packages = [];
while ($row = $result->fetch_assoc()) {
    $course_packages[] = $row;
}
echo json_encode($course_packages);
?>