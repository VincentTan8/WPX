<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<!-- todo modify to not all tours -->
<!-- Not being used yet -->
<?php
include "../../connections/dbname.php";

$tablename = $database . ".`wt_eductour_tour_details`";
$sql = "SELECT `ref_num`, `destination_ref_num` FROM $tablename";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

$tour_list = [];
while ($row = $result->fetch_assoc()) {
    $tour_list[] = $row;
}
echo json_encode($tour_list);
?>