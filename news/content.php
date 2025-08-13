<?php
if (!isset($_SESSION)) {
  session_start();
  ob_start();
}
?>

<style>
  @media (min-width: 768px) {
    #newsCarousel {
      display: none;
    }
  }

  @media (max-width: 767px) {
    .column-container {
      display: none;
    }
  }

  .thumbnail_news {
    width: 250px;
    height: 250px;
    object-fit: cover;
    border-radius: 15px;
    margin: 0 auto;
  }
</style>

<?php
echo '<div class="column-container">';
$where = " AND SUBSTRING_INDEX(UPPER(category),' ',1)='" . $category . "'";
if ($category == '') {
  $where = '';
}

$query = "SELECT * FROM news_details WHERE title1!='' AND lang='" . $lang . "' " . $where . " 
          ORDER BY date DESC ";

$result = mysqli_query($db_connection, $query);
while ($company = mysqli_fetch_array($result)) {
  $thumbnails = $company['thumbnails'];
  $details1 = $company['news_title'];
  $details2 = $company['brief_description'];
  $date_posted = $company['date_posted'];
  $video_file = $company['video_file'];
  $id = $company['id'];

  if ($video_file != '') {
    echo '<div class="column-item">
            <a href="#" class="videoLink" data-video-path="../resources/img/news/videos/' . $video_file . '">
              <div class="thumbnail-container">
                <img class="thumbnail" style="height:300px" src="../news/img/thumbnails/' . $thumbnails . '">
                <img class="play-button" src="../resources/img/play.png"> 
              </div>
              <p class="text-capitalize menu-heading mb-10">' . $details1 . '</p>
              <p class="mb-4">' . $details2 . '</p>
            </a>
          </div>';
  } else {
    echo '<div class="column-item">
            <a href="../news-details/index.php?id=' . $id . '">
              <div class="thumbnail-container">
                <img class="thumbnail" style="height:300px" src="../news/img/thumbnails/' . $thumbnails . '">
              </div>
              <p class="text-capitalize menu-heading mb-10">' . $details1 . '</p>
              <p class="mb-4">' . $details2 . '</p>
            </a>
          </div>';
  }
}
echo '</div>';
?>

<!-- Mobile Carousel -->
<div id="newsCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php
    mysqli_data_seek($result, 0);
    $i = 0;
    while (mysqli_fetch_array($result)) {
      $active = ($i === 0) ? 'class="active"' : '';
      echo '<li data-target="#newsCarousel" data-slide-to="' . $i . '" ' . $active . '></li>';
      $i++;
    }
    mysqli_data_seek($result, 0);
    ?>
  </ol>

  <div class="carousel-inner"
    style="box-shadow:0 0 10px rgba(0, 0, 0, 0.1); border:1px solid #ddd; padding:20px; width:90vw; height:55vh;">
    <?php
    $i = 0;
    while ($company = mysqli_fetch_array($result)) {
      $thumbnails = $company['thumbnails'];
      $details1 = $company['news_title'];
      $details2 = $company['brief_description'];
      $video_file = $company['video_file'];
      $id = $company['id'];
      $active = ($i === 0) ? 'active' : '';

      echo '<div class="carousel-item ' . $active . '">';
      if ($video_file != '') {
        echo '<a href="#" class="videoLink" data-video-path="../resources/img/news/videos/' . $video_file . '">
                <img class="thumbnail_news d-block" src="../news/img/thumbnails/' . $thumbnails . '">
                <div class="carousel-caption" style="position:relative; right:0; left:0; bottom:0;">
                  <h5>' . $details1 . '</h5>
                  <p>' . $details2 . '</p>
                </div>
              </a>';
      } else {
        echo '<a href="../news-details/index.php?id=' . $id . '">
                <img class="thumbnail_news d-block" src="../news/img/thumbnails/' . $thumbnails . '">
                <div class="carousel-caption" style="position:relative; right:0; left:0; bottom:0;">
                  <h5>' . $details1 . '</h5>
                  <p>' . $details2 . '</p>
                </div>
              </a>';
      }
      echo '</div>';
      $i++;
    }
    ?>
  </div>
</div>