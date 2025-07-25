<?php
// Database connection
include "../connections/dbname.php";
include 'generateRefNum.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $web_page = $_POST['web_page'];
    $element_id = $_POST['element_id'];
    $en = $_POST['en'];
    $cn = $_POST['cn'];
    $kr = $_POST['kr'];
    $jp = $_POST['jp'];

    $tablename = $database . ".`wt_translations`";

    //Language set reference num generate
    //LS-{count}
    $ref_num_prefix = 'LS-';
    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

    $sql = "INSERT INTO $tablename (`ref_num`, `web_page`, `element_id`, `en`, `cn`, `kr`, `jp`) 
            VALUES (?, ?, ?, ?, ?, ?, ?);";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $new_ref_num, $web_page, $element_id, $en, $cn, $kr, $jp);

    if ($stmt->execute()) {
        echo "success|$new_ref_num";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}
?>