<?php
// Database connection
include "../config/conf.php";
include 'generateRefNum.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quote_date = $_POST['quote_date'];
    $author = "- " + $_POST['author'];
    $en = $_POST['en'];
    $cn = $_POST['cn'];

    $tablename = $database . ".`wt_quotes`";

    //Language set reference num generate
    //LS-{count}
    $ref_num_prefix = 'QD-';
    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

    $sql = "INSERT INTO $tablename (`ref_num`, `quote_date`, `author`, `en`, `cn`) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $new_ref_num, $quote_date, $author, $en, $cn);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<p>Quote added! Ref#: $new_ref_num</p>";
}
?>