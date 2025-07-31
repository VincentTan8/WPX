<?php
if (!isset($_SESSION)) {
  session_start();
  ob_start();
}
?>

<?php
echo '<div class="column-container">';
$where = " AND UPPER(category)='" . $category . "'";
if ($category == '') {
  $where = '';
}

$query = "SELECT * FROM recorded_courses WHERE UPPER(main_menu)='" . $main_menu . "'" . $where;

$query = mysqli_query($db_connection, $query);
while ($company = mysqli_fetch_array($query)) {

  $thumbnails = $company['thumbnails'];
  $video_file = $company['video_file'];
  $details1 = $company['details1'];
  $details2 = $company['details2'];

  //  <img class="play-button" src="../resources/img/play.png">               

  echo '<div class="column-item">
          <a href="#" class="videoLink" data-video-path="videos/' . $video_file . '">
            <div class="thumbnail-container">
              <img class="thumbnail" src="../short-video/img/thumbnails/' . $thumbnails . '">
            </div>
            <p class="text-capitalize menu-heading mb-10">' . $details1 . '</p>
            <p class="mb-4">' . $details2 . '</p>
          </a>';
  include "../includes/tags.php";
  echo '</div>';
}

echo '</div>';
?>