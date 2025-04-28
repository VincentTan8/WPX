<?php
// Fetch all text given a language
// todo fetch only for a given page
include "../config/conf.php";

$language = $_POST['language'];  //en, cn, kr, jp

$tablename = $database . ".`translations`";
$sql = "SELECT `id`, `web_page`, `element_id`, `$language` FROM $tablename";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

$text = [];
while ($row = $result->fetch_assoc()) {
    $text[] = [
        'id' => $row['id'],
        'web_page' => $row['web_page'],
        'element_id' => $row['element_id'],
        'text' => $row[$language]
    ];
}
echo json_encode($text);
?>