<?php
// Database connection
include "../config/conf.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ref_num = $_POST['ref_num'];
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

    $sql = "UPDATE $tablename SET `quote_date` = ?, `author` = ?, `en` = ?, `cn` = ? WHERE `ref_num` = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $quote_date, $author, $en, $cn, $ref_num);

    if ($stmt->execute()) {
        echo "success|$ref_num";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}
?>