<?php
session_start();

if (isset($_POST['dataLang'])) {
    $lang = $_POST['dataLang'];
    $_SESSION['dataLang'] = $lang;
}
?>