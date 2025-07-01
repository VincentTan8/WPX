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

if (isset($_GET['dest'])) {
    $dest = $_GET['dest'];
} else {
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<?php
$category = '';
$main_menu = 'LINGUISTICS';

include "../includes/menu_bar_reset.php";
$menu_bar6 = "active";

$_SESSION['active_page'] = 'tour?dest=' . $dest;

include "../includes/header.php";
include "../connections/dbname.php";

$imgDir = "../resources/img/educational-tour/";
?>
<style>
    .course-tour-wrapper {
        position: relative;
        margin-top: 150px;
        display: flex;
        justify-content: center;
    }

    .hero-text {
        text-align: center;
        z-index: 2;
        position: relative;
        padding-top: 300px;
        padding-left: 20px;
        padding-right: 20px;
    }

    .hero-text h1 {
        font-size: 50px;
        font-weight: 700;
        color: black;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
    }

    .hero-text .highlight {
        color: #F2AE14;
    }

    .hero-text p {
        font-size: 20px;
        font-weight: 700;
        color: black;
        font-family: 'Poppins', sans-serif;
    }



    @media (max-width: 767px) {
        .course-tour-wrapper {
            margin-top: 0;
        }

        .hero-text {
            padding-top: 180px;
        }

        .hero-text h1 {
            font-size: 32px;
            line-height: 1.3;
        }

        .hero-text p {
            font-size: 16px;
        }

    }
</style>

<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">

    <!-- Static Hero Section with separated gradient -->
    <div id="hero-section"
        style="position: absolute; top:0%; height: 100vh; width: 100%; background-image: url(''); background-size: cover;background-position: center -60px;">
    </div>

    <!-- Hero Text Content -->
    <div class="hero-text">
        <h1 id="hero-title"></h1>
        <p id="hero-subtitle"></p>
    </div>

    <!-- Begin white container for main content -->
    <div class="course-tour-wrapper">
        <?php include "course_introduction.php"; ?>
    </div>
    <!-- End white container -->
    <?php include "../includes/address.php"; ?>
    <?php include "../includes/footer.php"; ?>

    <div id="page-data" data-page="tour" data-lang="<?php echo $lang ?>"
        data-dest="<?php echo htmlspecialchars($dest) ?>"></div>
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

    <!-- Custom Scripts -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="../resources/js/map.js"></script>
    <script src="../vendor/js/contact_us.js"></script>
    <script src="../resources/js/script.js"></script>
    <script src="scripts/tour.js"></script>

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