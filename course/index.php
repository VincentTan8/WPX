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
if (isset($_GET['mod'])) {
    $mod = $_GET['mod'];
} else {
    die;
}
if (isset($_SESSION['currency'])) {
    $currency = $_SESSION['currency'];
} else {
    $_SESSION['currency'] = 'PHP';
    $currency = 'PHP';
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
$category = '';
$main_menu = 'LINGUISTICS'; //to change

include "../includes/menu_bar_reset.php";
$menu_bar3 = "active";

$_SESSION['active_page'] = 'course?mod=' . $mod;

include "../includes/header.php";
include "../connections/dbname.php";

?>

<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">
    <div>
        <?php include "course_introduction.php" ?>
    </div>
    <?php include "../includes/address.php"; ?>
    <?php include "../includes/footer.php"; ?>
    <div id="page-data" data-page="course" data-lang="<?php echo $lang; ?>" data-currency="<?php echo $currency; ?>"
        data-mod="<?php echo htmlspecialchars($mod) ?>"></div>

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
    <script src="scripts/course.js"></script>

</body>

</html>