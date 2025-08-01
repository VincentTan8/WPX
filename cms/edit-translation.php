<?php
// Database connection
include "../connections/dbname.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ref_num = $_POST['ref_num'];
    $web_page = $_POST['web_page'];
    $element_id = $_POST['element_id'];
    $en = trim($_POST['en']);
    $cn = trim($_POST['cn']);
    $kr = trim($_POST['kr']);
    $jp = trim($_POST['jp']);

    $tablename = $database . ".`wt_translations`";

    $sql = "UPDATE $tablename SET `web_page` = ?, `element_id` = ?, `en` = ?, `cn` = ?, `kr` = ?, `jp` = ? WHERE `ref_num` = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $web_page, $element_id, $en, $cn, $kr, $jp, $ref_num);

    if ($stmt->execute()) {
        echo "success|$ref_num";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}
?>