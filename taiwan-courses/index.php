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

$_SESSION['active_page'] = 'taiwan-courses';

include "../includes/header.php";
include "../connections/dbname.php";

?>

<link rel="stylesheet" href="style.css" />

<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">
    <!-- Static Hero Section with separated gradient -->
    <div id="hero-section">
    </div>

    <!-- Hero Text Content -->
    <div class="hero-text">
        <h1 id="hero-title">Taiwan English Programs</h1>
        <p id="hero-subtitle-1">Our English programmes are designed to support learners at different stages of their
            language journey.</p>
        <p id="hero-subtitle-2">Please select a programme below to complete enrolment and payment. Once payment is
            received, our team will be in touch to confirm schedules and further details.</p>
    </div>

    <!-- Begin white container for main content -->
    <div class="content-wrapper">
        <?php include "content.php"; ?>
    </div>
    <!-- End white container -->
    <?php include "../includes/address.php"; ?>
    <?php include "../includes/footer.php"; ?>

    <div id="page-data" data-page="taiwan-courses" data-lang="<?php echo $lang ?>"></div>

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

    <!-- Custom Scripts -->
    <script src="../resources/js/map.js"></script>
    <script src="../vendor/js/contact_us.js"></script>
    <script src="../resources/js/script.js"></script>
    <script src="scripts/taiwan-courses.js"></script>

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