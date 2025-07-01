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
$menu_bar6 = "active";

$_SESSION['active_page'] = 'educational-tour';

include "../includes/header.php";
include "../connections/dbname.php";

$imgDir = "../resources/img/educational-tour/";
?>
<style>
    html {
        scroll-behavior: smooth;
    }

    span {
        display: inline;
    }

    .hero-section {
        position: absolute;
        top: 0;
        height: 100vh;
        width: 100%;
        background-image: url('../resources/img/educational-tour/et-bg.png');
        background-size: cover;
        background-position: center top;
    }

    .hero-content {
        text-align: center;
        z-index: 2;
        position: relative;
        padding-top: 200px;
        width: 1036px;
        margin: 0 auto;
    }

    .hero-content h1 {
        font-size: 50px;
        font-weight: 700;
        color: black;
        font-family: 'Poppins', sans-serif;
    }

    .hero-content p {
        font-size: 20px;
        font-weight: 400;
        color: black;
        font-family: 'Poppins', sans-serif;
        margin-top: 32px;
    }

    .hero-buttons {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin-top: 50px;
        flex-wrap: wrap;
        z-index: 2;
        position: relative;
    }

    .hero-button {
        border-radius: 25px;
        width: 350px;
        height: 80px;
        padding: 25px 19px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 400;
        cursor: pointer;
        gap: 15px;
    }

    .hero-button.green {
        background: #09CA91;
        color: white;
    }

    .hero-button.white {
        background: #fff;
        color: black;
        border: 1px solid #ccc;
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

        @media (max-width: 767px) {
            .hero-buttons {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 20px;
                margin-top: 30px;
            }

            .hero-button {
                width: 100%;
                max-width: 300px;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 12px;
                padding: 14px 20px;
                border-radius: 20px;
                font-size: 16px;
                text-align: center;
            }

            .hero-button span {
                flex: 1;
                text-align: center;
            }

            .hero-button svg {
                width: 22px;
                height: 22px;
            }
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
                <span id="hero-header-yellow" style="color:#F2AE14;"></span> <span id="hero-header-main"></span>
            </span>
        </h1>
        <p id="hero-subtitle"></p>
    </div>

    <!-- Hero Buttons -->
    <div class="hero-buttons">
        <a href="#carousel-anchor" class="hero-button green">
            <span id="hero-button-1"></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none">
                <path d="M14 1L21 8M21 8L14 15M21 8H1" stroke="white" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </a>

        <a href="your-journey-video-url" class="hero-button white">
            <span id="hero-button-2"></span>
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="black">
                <path d="M8 5v14l11-7z" />
            </svg>
        </a>

    </div>



    <!-- Begin white container for main content -->
    <div class="course-tour-wrapper">
        <?php include "course_introduction.php"; ?>
    </div>



    <?php include "../includes/address.php"; ?>
    <?php include "../includes/footer.php"; ?>
    <!-- End white container -->


    <div id="page-data" data-page="educ-tour" data-lang="<?php echo $lang ?>"></div>
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