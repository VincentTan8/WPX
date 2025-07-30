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
$main_menu = 'LINGUISTICS'; //to change

include "../includes/menu_bar_reset.php";
$menu_bar3 = "active";

$_SESSION['active_page'] = 'e-sim';

include "../includes/header.php";
include "../connections/dbname.php";


?>
<style>
    span {
        display: inline;
    }

    .hero-section {
        position: absolute;
        top: -62px;
        height: 100vh;
        width: 100%;
        background-image: url('../resources/img/e-sim/e-sim_bg.png');
        background-size: cover;
        background-position: center top;
    }

    .hero-content {
        text-align: center;
        z-index: 2;
        position: relative;
        padding-top: 250px;
        width: 1036px;
        margin: 0 auto;
    }

    .hero-content h1 {
        font-size: 50px;
        font-weight: 700;
        color: #18181B;
        font-family: 'Poppins', sans-serif;
    }

    .hero-content p {
        font-size: 20px;
        font-weight: 400;
        color: #000;
        font-family: 'Poppins', sans-serif;
        margin-top: 32px;
    }

    .course-tour-wrapper {
        position: relative;
        margin-top: 150px;
        display: flex;
        justify-content: center;
    }

    @media (max-width: 767px) {
        .hero-content {
            width: 90%;
            padding-top: 150px;
            text-align: justify;
        }

        .hero-content h1 {
            font-size: 28px;
            line-height: 1.4;
            text-align: justify;
        }

        .hero-content p {
            font-size: 15px;
            margin-top: 20px;
            text-align: justify;
        }

        .course-tour-wrapper {
            margin-top: 0;
        }

    }
</style>

<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">

    <!-- Static Hero Section with separated gradient -->
    <!-- Hero Background -->
    <div class="hero-section"></div>

    <!-- Hero Content -->
    <div class="hero-content">
        <h1>
            <span id="hero-header">
                <span>Arrive. Connect. Explore - with</span><span style="color:#F2AE14;"> WeTalks's </span><span> eSIM
                    Guide</span>
            </span>
        </h1>
        <p>
            No roaming fees. No airport queues. Get your eSIM ready before landing and stay connected from the moment
            you touch down.
        </p>
    </div>


    <!-- Begin white container for main content -->
    <div class="course-tour-wrapper">
        <?php include "course_introduction.php"; ?>
    </div>



    <?php include "../includes/address.php"; ?>
    <?php include "../includes/footer.php"; ?>
    <!-- End white container -->


    <div id="page-data" data-page="e-sim" data-lang="<?php echo $lang ?>"></div>
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
    <script src="scripts/destinations.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>