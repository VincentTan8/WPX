<?php
if (!isset($_SESSION)) {
  session_start();
  ob_start();
}
if (isset($_SESSION['lang']) and $_SESSION['lang'] == 'CN') {
  $lang = '_cn';
} else {
  $_SESSION['lang'] = 'EN';
  $lang = '_en';
}

$ref = $_GET['ref'] ?? null;
if (!$ref) {
  echo "No news reference provided.";
  exit;
}

$main_menu = 'LINGUISTICS';
$menu_bar5 = "active";
$_SESSION['active_page'] = 'news-details?ref=' . $ref;

include "../includes/menu_bar_reset.php";
include "../includes/header.php";
include "../connections/dbname.php";

// Store the ref in session if needed later
$_SESSION['news_id'] = $ref; // 🔁 this assumes `ref` is used as `news_id` (if not, fix accordingly)

// Optional: Check if the ref exists in the DB — but this block doesn't do anything with the result
/*
$lang = '_en'; // Make sure this exists or is defined from user session or default
$result = mysqli_query($conn, "SELECT * FROM news_details WHERE id='" . $ref . "' AND lang='" . $lang . "' LIMIT 1");
if (mysqli_num_rows($result) === 0) {
    echo "No news found.";
    exit;
}
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>News Details</title>
  <link rel="stylesheet" href="news-details.css">
</head>

<body>

  <!-- Store language and reference info for JS -->
  <div id="page-data" data-lang="<?php echo $lang ?>" data-ref="<?php echo htmlspecialchars($ref); ?>"></div>

  <!-- Static News Info -->
  <section class="container" style="margin-top:5rem;">
    <!-- Title -->

    <h1 id="news-title" style="text-align:left; margin-bottom:1.5rem;"></h1>
    <!-- Date posted -->
    <p id="news-date-posted" style="text-align:left; margin-top:0.5rem; font-size:12px; color:#555;"></p>
    <!-- Thumbnail -->
    <!-- <div class="row">
      <div class="col-12">
        <img id="news-thumbnail" alt="News Thumbnail"
          style="width:500px;  height:400px; border-radius:10px; display:block; margin:0 auto; " />

      </div>
    </div> -->



    <!-- Description -->
    <!-- <p id="news-description" style="text-align:center; margin-top:1.5rem; font-size:30px;"></p> -->

    <!-- Extra date -->
    <p id="news-date" style="text-align:center;"></p>
  </section>


  <!-- <p id="news-category"></p> -->


  </section>

  <!-- Dynamic News Sections Render Here -->
  <div id="news-container"></div>




  <?php include "../includes/booking.php" ?>


  <?php include "../includes/address.php" ?>


  <!-- Scripts -->
  <script src="../vendor/js/bundle.min.js"></script>
  <script src="../vendor/js/jquery.fancybox.min.js"></script>
  <script src="../vendor/js/owl.carousel.min.js"></script>
  <script src="../vendor/js/swiper.min.js"></script>
  <script src="../vendor/js/jquery.cubeportfolio.min.js"></script>
  <script src="../vendor/js/jquery.appear.js"></script>
  <script src="../vendor/js/wow.min.js"></script>
  <script src="../vendor/js/flip.js"></script>
  <script src="../vendor/js/jquery-ui.bundle.js"></script>
  <script src="../vendor/js/select2.min.js"></script>
  <script src="../vendor/js/jquery.hoverdir.js"></script>
  <script src="../vendor/js/hover-item.js"></script>
  <script src="../vendor/js/slick.min.js"></script>
  <script src="../vendor/js/parallaxie.min.js"></script>

  <!-- Revolution Slider JS -->
  <script src="../vendor/js/jquery.themepunch.tools.min.js"></script>
  <script src="../vendor/js/jquery.themepunch.revolution.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.video.min.js"></script>

  <!-- Maps + Custom Scripts -->
  <script src="https://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
  <script src="../resources/js/map.js"></script>
  <script src="../vendor/js/contact_us.js"></script>
  <script src="../resources/js/script.js"></script>

  <!-- Your dynamic news script -->
  <script src="scripts/news.js"></script>

</body>

</html>