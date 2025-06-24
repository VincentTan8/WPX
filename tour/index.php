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
?>

<!DOCTYPE html>
<html lang="en">

<?php
$category = '';
$main_menu = 'LINGUISTICS';

include "../includes/menu_bar_reset.php";
$menu_bar6 = "active";

include "../includes/header.php";
include "../connections/dbname.php";
?>

<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">

    <!-- Static Hero Section with separated gradient -->
    <div
        style="position: relative; top:-10%;height: 95vh; background-image: url('img/taiwan-bg.png'); background-size: cover;background-position: center top -60px; ">

        <!-- Hero Text Content -->
        <div style="text-align: center; z-index: 2; position: relative; padding-top:300px;  ">
            <h1 style="font-size: 50px; font-weight:700; color:black; font-family:'Poppins', sans-serif;">WeTalk <span
                    style="color:#F2AE14;">Taiwan</span>
                Study Tour</h1>
            <p style="font-size: 20px; font-weight:700; color:black; font-family:'Poppins', sans-serif;">Mandarin
                Meets Culture in Every Corner</p>
        </div>
    </div>

    <!-- Begin white container for main content -->
    <div
        style="background-color: white; margin: -220px 130px 0 130px; position: absolute; z-index: 10; border-radius: 15px; width:87%;">
        <div style="position:relative; margin-top: 300px;">
            <?php include "course_introduction.php"; ?>
            <?php include "../includes/address.php"; ?>
            <?php include "../includes/footer.php"; ?>
        </div>
    </div>
    <!-- End white container -->


    <div id="page-data" data-page="study-abroad" data-lang="<?php echo $lang ?>" data-dest="<?php echo $dest ?>"></div>
    <script>console.log('<?php echo $lang . " is the lang"; ?>')</script>

    <!-- JavaScript -->
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

    <!-- Revolution Slider Scripts -->
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

    <!-- Custom Scripts -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="../resources/js/map.js"></script>
    <script src="../vendor/js/contact_us.js"></script>
    <script src="../resources/js/script.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.slider_extra').slick({
                dots: false,
                infinite: true,
                speed: 5000,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });
    </script>
</body>

</html>