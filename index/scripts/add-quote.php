<?php
// Database connection
include "../config/conf.php";
include 'generateRefNum.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $quote_date = $_POST['quote_date'];
    $author = $_POST['author'];
    $en = trim($_POST['en']);
    $cn = trim($_POST['cn']);

    $errors = [];

    if (mb_strlen($en) > 180) {
        $errors['en'] = "Quote must not exceed 180 characters.";
    }

    if (mb_strlen($cn) > 180) {
        $errors['cn'] = "引用不得超过180个字符。";
    }

    if (!empty($errors)) {
        echo "error|" . json_encode($errors);
        exit;
    }



    $tablename = $database . ".`wt_quotes`";

    // Language set reference num generate
    $ref_num_prefix = 'QD-';
    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

    $sql = "INSERT INTO $tablename (`ref_num`, `quote_date`, `author`, `en`, `cn`) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $new_ref_num, $quote_date, $author, $en, $cn);

    if ($stmt->execute()) {
        echo "success|$new_ref_num";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}
?>