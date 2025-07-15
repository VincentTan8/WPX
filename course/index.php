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

$_SESSION['active_page'] = 'courses';

include "../includes/header.php";
include "../connections/dbname.php";


?>

<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">
    <div>
        <?php include "course_introduction.php" ?>
    </div>
    <?php include "../includes/address.php"; ?>
    <?php include "../includes/footer.php"; ?>
</body>

</html>