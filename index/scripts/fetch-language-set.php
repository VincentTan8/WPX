<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
// Fetch all text given a language and webpage
include "../config/conf.php";

$language = $_POST['language'];  //en, cn, kr, jp
$page = $_POST['page'];

$_SESSION['lang'] = strtoupper($language);   //format is coz of current translation implementation in the main website

$tablename = $database . ".`translations`";
$sql = "SELECT `id`, `web_page`, `element_id`, `$language` FROM $tablename
        WHERE `web_page` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $page);
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