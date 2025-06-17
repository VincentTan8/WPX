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

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WeTalk - More than Language</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="../jquery.js"></script>

    <link rel="icon" href="../resources/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="styles/style.css">

    <style>
        html,
        body {
            overscroll-behavior: none;
        }

        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/materialicons/v41/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format('woff2');
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: inherit;
            display: inline-block;
            vertical-align: top;
            line-height: inherit;
            font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>

<body>


    <!-- for passing page data -->
    <div id="page-data" data-page="educ-tour" data-lang="<?php echo $lang ?>"></div>
    <script type="text/javascript" src="assets/warning.js"></script>
</body>

</html>