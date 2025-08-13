<?php
if (!isset($_SESSION)) {
  session_start();
  ob_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="news-details.css">
<?php

$category = '';
$main_menu = 'LINGUISTICS';


include "../includes/menu_bar_reset.php";
$menu_bar5 = "active";

$_SESSION['active_page'] = 'news-details';

include "../includes/header.php";
include "../connections/dbname.php";


if (isset($_GET['id'])) {
  $_SESSION['news_id'] = $_GET['id'];
} else {
  //$_SESSION['news_id']=1;
}


$news_id = $_SESSION['news_id'];







$date_posted = '';

$ryesultctr667aa12 = mysqli_query($conn, "SELECT * 
FROM news_details 
WHERE id='" . $news_id . "' AND lang='" . $lang . "' LIMIT 1");
$my_total_records_check = mysqli_num_rows($ryesultctr667aa12);

// if ($my_total_records_check > 0) {

//   $ryow12aa12 = mysqli_fetch_assoc($ryesultctr667aa12);

//   $date_posted = $ryow12aa12['date'];
//   $title1 = $ryow12aa12['title1'];
//   $date1 = $ryow12aa12['date1'];
//   $details1 = $ryow12aa12['details1'];
//   $photo1 = $ryow12aa12['photo1'];
//   $photo_file1 = '../resources/img/news/' . $photo1;

//   $title2 = $ryow12aa12['title2'];
//   $date2 = $ryow12aa12['date2'];
//   $details2 = $ryow12aa12['details2'];
//   $photo2 = $ryow12aa12['photo2'];
//   $photo_file2 = '../resources/img/news/' . $photo2;

//   $title3 = $ryow12aa12['title3'];
//   $date3 = $ryow12aa12['date3'];
//   $details3 = $ryow12aa12['details3'];
//   $photo3 = $ryow12aa12['photo3'];
//   $photo_file3 = '../resources/img/news/' . $photo3;


//   $title4 = $ryow12aa12['title4'];
//   $date4 = $ryow12aa12['date4'];
//   $details4 = $ryow12aa12['details4'];
//   $photo4 = $ryow12aa12['photo4'];
//   $photo_file4 = '../resources/img/news/' . $photo4;


//   $title5 = $ryow12aa12['title5'];
//   $date5 = $ryow12aa12['date5'];
//   $details5 = $ryow12aa12['details5'];
//   $photo5 = $ryow12aa12['photo5'];
//   $photo_file5 = '../resources/img/news/' . $photo5;

//   $title6 = $ryow12aa12['title6'];
//   $date6 = $ryow12aa12['date6'];
//   $details6 = $ryow12aa12['details6'];
//   $photo6 = $ryow12aa12['photo6'];
//   $photo_file6 = '../resources/img/news/' . $photo6;

//   $title7 = $ryow12aa12['title7'];
//   $date7 = $ryow12aa12['date7'];
//   $details7 = $ryow12aa12['details7'];
//   $photo7 = $ryow12aa12['photo7'];
//   $photo_file7 = '../resources/img/news/' . $photo7;

//   $title8 = $ryow12aa12['title8'];
//   $date8 = $ryow12aa12['date8'];
//   $details8 = $ryow12aa12['details8'];
//   $photo8 = $ryow12aa12['photo8'];
//   $photo_file8 = '../resources/img/news/' . $photo8;

//   $title9 = $ryow12aa12['title9'];
//   $date9 = $ryow12aa12['date9'];
//   $details9 = $ryow12aa12['details9'];
//   $photo9 = $ryow12aa12['photo9'];
//   $photo_file9 = '../resources/img/news/' . $photo9;

//   $title10 = $ryow12aa12['title10'];
//   $date10 = $ryow12aa12['date10'];
//   $details10 = $ryow12aa12['details10'];
//   $photo10 = $ryow12aa12['photo10'];
//   $photo_file10 = '../resources/img/news/' . $photo10;

//   $title11 = $ryow12aa12['title11'];
//   $date11 = $ryow12aa12['date11'];
//   $details11 = $ryow12aa12['details11'];
//   $photo11 = $ryow12aa12['photo11'];
//   $photo_file11 = '../resources/img/news/' . $photo11;

//   $title12 = $ryow12aa12['title12'];
//   $date12 = $ryow12aa12['date12'];
//   $details12 = $ryow12aa12['details12'];
//   $photo12 = $ryow12aa12['photo12'];
//   $photo_file12 = '../resources/img/news/' . $photo12;

//   $title13 = $ryow12aa12['title13'];
//   $date13 = $ryow12aa12['date13'];
//   $details13 = $ryow12aa12['details13'];
//   $photo13 = $ryow12aa12['photo13'];
//   $photo_file13 = '../resources/img/news/' . $photo13;


//   $title14 = $ryow12aa12['title14'];
//   $date14 = $ryow12aa12['date14'];
//   $details14 = $ryow12aa12['details14'];
//   $photo14 = $ryow12aa12['photo14'];
//   $photo_file14 = '../resources/img/news/' . $photo14;

//   $title15 = $ryow12aa12['title15'];
//   $date15 = $ryow12aa12['date15'];
//   $details15 = $ryow12aa12['details15'];
//   $photo15 = $ryow12aa12['photo15'];
//   $photo_file15 = '../resources/img/news/' . $photo15;


// } else {

//   $my_page = "../news/";

//   echo "<script>window.location = '" . $my_page . "'</script>";

// }


?>


<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">
  <!-- Bootstrap Modal -->
  <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-fullscreen" role="document">
      <div class="modal-content modal-content-fullscreen">

        <div class="modal-body modal-body-fullscreen">
          <!-- Close button -->
          <button class="close-button" id="closeVideoModal">&times;</button>
          <!-- Video element -->
          <video id="videoPlayer" controls>
            <source id="videoSource" src="" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
  </div>
  <!--Banner sec Start curve-inside -->
  <section class="p-0 h-100" style="background-color:#F3F8FE;  ">


  </section>



  <?php
  for ($ctr = 1; $ctr <= 15; $ctr++) {


    $var_title = 'title' . $ctr;
    $var_details = 'details' . $ctr;
    $var_date = 'date' . $ctr;
    $var_photo = 'photo' . $ctr;
    $var_photo_file = 'photo_file' . $ctr;

    $title = $$var_title;
    $details = $$var_details;
    $date = $$var_date;
    $photo = $$var_photo;
    $photo_file = $$var_photo_file;


    if ($details == '') {
      continue;
    }


    $news_details = $title . ' 
            <p>' . $date . '</p><hr>
          <h4>' . $details . '</h4>';

    $news_photo = $photo;


    ?>


    <!--Delicious Food-->
    <section id="food">
      <!--class="container"  -->
      <div class="container">


        <?php
        $mustup = '';
        if ($title != '') {
          ?>
          <div class="row position-relative">

            <?php
            if ($ctr == 100) {
              /*  echo '<img src="../short-video/img/niao1_trans.png"   class="food-img-before wow rotateInDownLeft" data-wow-delay="300ms" alt="image">   
                 <img src="../short-video/img/niao2_trans.png" style="margin-top: -580px;" class="food-img-after wow rotateInDownRight" data-wow-delay="300ms" alt="image">'; */

            }
            $mustup1 = '';
            if ($ctr > 1) {
              $mustup1 = 'margin-top-up';
            }
            ?>


            <div class="col-lg-12 text-center mb-50" <?php echo $mustup1 ?>>
              <div class="zic-img">
                <?php
                if ($ctr == 1) {
                  echo '<div class="img-zic">
                                            <br><br>
                                          </div>';
                }

                ?>


                <h2 class="text-capitalize "><?php echo $title ?> </h2>

                <?php
                if ($ctr == 1) {

                  echo ' <h5 class="response my-3 mb-0">
                              <i class="fa fa-clock"></i>' . ' ' . date('F d, Y', strtotime($date_posted)) . '  </h5>';
                }


                ?>

              </div>
            </div>
          </div>

          <?php
        } else {
          $mustup = 'style="margin-top:-500px"';

        }

        $mustup = '';
        ?>

        <div class="row justify-content-center" <?php echo $mustup ?>>

          <div class="tabs">

            <?php
            $photomargin = '';
            if ($photo != '') {

              echo '<img src="' . $photo_file . '"  > ';
            } else {
              //  $photomargin="margin-top:-100px";
            }

            ?>
            <hr>




            <p <?php echo $photomargin ?>>
              <?php echo $details ?>
            </p>



          </div>



        </div>
      </div>

    </section>


    <?php
  }

  ?>

  <div class="container button-container">

    <?php

    if ($lang == '') {

      $next_news_query = mysqli_query($conn, "SELECT * FROM news_details WHERE id > '" . $news_id . "' AND lang='' AND MOD(id, 2) = 1 ORDER BY id ASC LIMIT 1");

      $prev_news_query = mysqli_query($conn, "SELECT * FROM news_details WHERE id < '" . $news_id . "' AND lang='' AND MOD(id, 2) = 1 ORDER BY id DESC LIMIT 1");
    } else {

      $next_news_query = mysqli_query($conn, "SELECT * FROM news_details WHERE id > '" . $news_id . "' AND lang='" . $lang . "' AND MOD(id, 2) = 0 ORDER BY id ASC LIMIT 1");

      $prev_news_query = mysqli_query($conn, "SELECT * FROM news_details WHERE id < '" . $news_id . "' AND lang='" . $lang . "' AND MOD(id, 2) = 0 ORDER BY id DESC LIMIT 1");
    }


    if (mysqli_num_rows($next_news_query) > 0) {
      $next_news = mysqli_fetch_assoc($next_news_query);
      $next_news_id = $next_news['id'];
      echo '<a href="index.php?id=' . $next_news_id . '" class="btn btn-primary btn-next" ><i class="fas fa-arrow-right"></i></a>';
    }


    if (mysqli_num_rows($prev_news_query) > 0) {
      $prev_news = mysqli_fetch_assoc($prev_news_query);
      $prev_news_id = $prev_news['id'];
      echo '<a href="index.php?id=' . $prev_news_id . '" class="btn btn-secondary btn-prev" ><i class="fas fa-arrow-left"></i>
</a>';
    }
    ?>

  </div>



  <!--End header-->





  <?php include "../includes/booking.php" ?>


  <?php include "../includes/address.php" ?>

  <?php //include "../includes/footer.php"; ?>

  <!--G0 Top-->

  <!--End Go Top-->

  </div>

  <!-- JavaScript -->
  <script src="../vendor/js/bundle.min.js"></script>
  <!-- Plugin Js -->
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
  <!-- REVOLUTION JS FILES -->
  <script src="../vendor/js/jquery.themepunch.tools.min.js"></script>
  <script src="../vendor/js/jquery.themepunch.revolution.min.js"></script>
  <!-- SLIDER REVOLUTION EXTENSIONS -->
  <script src="../vendor/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="../vendor/js/extensions/revolution.extension.video.min.js"></script>
  <!-- custom script -->
  <script src="http://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
  <script src="../resources/js/map.js"></script>
  <script src="../vendor/js/contact_us.js"></script>
  <script src="../resources/js/script.js"></script>




  <!-- Include Bootstrap JS at the end of the body -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function () {
      $('.videoLink').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior

        // Get the video path from the data attribute
        var videoPath = $(this).data('video-path');

        // Set the video source attribute to the video path
        $('#videoSource').attr('src', videoPath);
        $('#videoPlayer')[0].load(); // Reload the video player

        // Show the modal
        $('#videoModal').modal('show');
      });

      // Clear the video source when the modal is closed
      $('#videoModal').on('hidden.bs.modal', function () {
        $('#videoSource').attr('src', '');
        $('#videoPlayer')[0].load(); // Reload the video player
      });

      // Handle the close button click
      $('#closeVideoModal').on('click', function () {
        $('#videoModal').modal('hide');
      });
    });
  </script>

  <script>
    $(document).ready(function () {
      $('.slider_extra').slick({
        dots: false,
        infinite: true,
        speed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        adaptiveHeight: true,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
  </script>

</body>

</html>