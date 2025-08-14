<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
include "../../connections/dbname.php";

$language = $_POST['language']; //  _en, _cn, _kr, _jp

$news_title = "news_title_" . $language;
$news_description = "news_description_" . $language;

$tablename = $database . ".`wt_news`";
$sql = "SELECT 
            `ref_num`, 
            `news_category`, 
            `$news_title` AS `news_title`, 
            `$news_description` AS `news_description`,  
            `date_posted`, 
            `date`,
            `news_thumbnail`,
            `story_source`, 
            `video_file`, 
            `news_id`, 
            `news_lang`
        FROM $tablename
        ORDER BY ref_num DESC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

$news = [];
while ($row = $result->fetch_assoc()) {
    $news[] = $row;
}
echo json_encode($news);
?>