<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
include "../../connections/dbname.php";

$news_ref_num = $_POST['news_ref_num'];
$language = $_POST['language'];


$section_title = "section_title" . $language;
$section_detail = "section_detail" . $language;


$photo_col = ($language === '_cn') ? 'photo_cn' : 'photo';


$tablename = $database . ".`wt_news_section`";


$sql = "SELECT `ref_num`, 
               `$section_title` AS `section_title`,  
               `$section_detail` AS `section_detail`, 
               `$photo_col` AS `photo`
        FROM $tablename
        WHERE `news_ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $news_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$sections = [];
while ($row = $result->fetch_assoc()) {
    $sections[] = $row;
}
echo json_encode($sections);
?>