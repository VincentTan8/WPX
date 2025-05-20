<?php
$lastRunFile = __DIR__ . '/getQuoteLastRun.txt';
$today = date('Y-m-d');

// Read last run date
$lastRunDate = file_exists($lastRunFile) ? trim(file_get_contents($lastRunFile)) : '';

// Run if not already run today
if ($lastRunDate !== $today) {
    // Database connection
    include "../config/conf.php";

    //get from quotes db
    $tablename = $database . ".`wt_quotes`";
    $sql = "SELECT `author`, `en`, `cn` FROM $tablename
            WHERE DATE(`quote_date`) = CURDATE()";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $author = $row['author'];
    $enQuote = $row['en'];
    $cnQuote = $row['cn'];

    $tablename = $database . ".`wt_translations`";
    //Update quote text body
    $ref_num = 'LS-QuoteBody';
    $sql = "UPDATE $tablename SET `en` = ?, `cn` = ? WHERE `ref_num` = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sss", $enQuote, $cnQuote, $ref_num);

    if (!$stmt->execute()) {
        echo "Failed to update quote body";
    }

    //Update quote author
    $ref_num = 'LS-QuoteAuthor';
    $sql = "UPDATE $tablename SET `en` = ?, `cn` = ? WHERE `ref_num` = ?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("sss", $author, $author, $ref_num);

    if (!$stmt->execute()) {
        echo "Failed to update quote author";
    }
    // Update last run date
    file_put_contents($lastRunFile, $today);
    echo 'executed for the first time today';
} else {
    echo 'already executed for today';
}