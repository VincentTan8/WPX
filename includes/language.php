<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>


<?php

$lang = $_GET['lang'];
$page_location = $_SESSION['active_page'];
$_SESSION['lang'] = $lang;

//might need to change to BASE_URL
$my_page = "../" . $page_location;

echo "<script>window.location = '" . $my_page . "'</script>";





?>