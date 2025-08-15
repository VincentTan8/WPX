<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>


<?php

$currency = $_GET['currency'];
$page_location = $_SESSION['active_page'];
$_SESSION['currency'] = $currency;

//might need to change to BASE_URL
$my_page = "../" . $page_location;

echo "<script>window.location = '" . $my_page . "'</script>";


?>