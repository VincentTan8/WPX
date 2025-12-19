<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
//Fetches a specific news article based on a ref_num
include "../../connections/dbname.php";

$news_ref_num = $_POST['news_ref_num'];
$language = $_POST['language'];  //_en, _cn, _kr, _jp


$news_title = "news_title" . $language;
$news_title_complete = "news_title_complete" . $language;
$news_description = "news_description" . $language;

$tablename = $database . ".`wt_news`";

$sql = "SELECT `ref_num`, 
            `news_category`, 
            `$news_title` AS `news_title`, 
             
            `$news_description` AS `news_description`, 
            `date_posted`, 
            `date`, 
            `news_thumbnail`, 
            `story_source`, 
            `video_file`, 
            `news_id`, 
            `news_lang`,
            `$news_title_complete` AS `news_title_complete`
        FROM $tablename
        WHERE `ref_num` = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $news_ref_num);
$stmt->execute();
$result = $stmt->get_result();

$news = [];
while ($row = $result->fetch_assoc()) {
    $news[] = $row;
}
echo json_encode($news);
?>