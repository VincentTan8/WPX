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

$chessPath = __DIR__ . '/';
?>

<!DOCTYPE html>
<html lang="en">

<?php
$category = '';
$main_menu = '';

include $chessPath . "../../includes/menu_bar_reset.php";
$menu_bar1 = "active";

$_SESSION['active_page'] = 'chess';

include $chessPath . "../../includes/header.php";
include $chessPath . "../../connections/dbname.php";

?>

<!-- JavaScript -->
<script src="<?php echo BASE_URL; ?>vendor/js/bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/jquery.fancybox.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/owl.carousel.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/swiper.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/jquery.cubeportfolio.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/jquery.appear.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/flip.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/jquery-ui.bundle.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/select2.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/jquery.hoverdir.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/hover-item.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/slick.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/parallaxie.min.js"></script>

<!-- Custom Scripts -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
<script src="<?php echo BASE_URL; ?>resources/js/map.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/contact_us.js"></script>
<script src="<?php echo BASE_URL; ?>resources/js/script.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html,
    body {
        min-height: 100%;
        overflow-x: hidden;
        background-color: #f0f0f0;
    }

    .responsive-img {
        display: block;
        margin: 0 auto;
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 767px) {
        .responsive-img.mt-100 {
            margin-top: 100px;
        }
    }
</style>

<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">
    <div class="image-container">
        <a href="https://wa.me/6597582288?text=Hi%20WeTalk%2C%20I%27d%20like%20to%20book%20a%20call%20with%20your%20team."
            target="_blank">
            <img src="image-1.png" alt="Loading.." loading="lazy" class="responsive-img mt-100">
        </a>
        <a href="https://wa.me/6597582288?text=Hi%20WeTalk%2C%20I%27d%20like%20to%20book%20a%20call%20with%20your%20team."
            target="_blank">
            <img src="image-2.png" alt="Loading.." loading="lazy" class="responsive-img">
        </a>
        <a href="https://wa.me/6597582288?text=Hi%20WeTalk%2C%20I%27d%20like%20to%20book%20a%20call%20with%20your%20team."
            target="_blank">
            <img src="image-3.png" alt="Loading.." loading="lazy" class="responsive-img">
        </a>
        <a href="https://wa.me/6597582288?text=Hi%20WeTalk%2C%20I%27d%20like%20to%20book%20a%20call%20with%20your%20team."
            target="_blank">
            <img src="image-4.png" alt="Loading.." loading="lazy" class="responsive-img">
        </a>
        <a href="https://wa.me/6597582288?text=Hi%20WeTalk%2C%20I%27d%20like%20to%20book%20a%20call%20with%20your%20team."
            target="_blank">
            <img src="image-5.png" alt="Loading.." loading="lazy" class="responsive-img">
        </a>
    </div>

    <?php include $chessPath . "../../includes/address.php"; ?>
    <?php include $chessPath . "../../includes/footer.php"; ?>
    <div id="page-data" data-page="chess" data-lang="<?php echo $lang; ?>"></div>
</body>

</html>