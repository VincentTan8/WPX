<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
$hide_panda = (
    strpos($_SERVER['PHP_SELF'], '/cms/') !== false ||
    strpos($_SERVER['PHP_SELF'], '/educational-tour/') !== false ||
    strpos($_SERVER['PHP_SELF'], '/tour/') !== false
);

?>



<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">

    <meta meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Author -->
    <meta name="author" content="Wetalk">
    <!-- description -->
    <meta name="description" content="">
    <!-- keywords -->
    <meta name="keywords" content="">
    <!-- Page Title -->
    <title>WeTalk - WeTalk International Education Pte. Ltd.</title>

    <!-- Favicon -->
    <link rel="icon" href="../resources/img/favicon.ico">
    <!-- Bundle -->
    <link rel="stylesheet" href="../vendor/css/bundle.min.css">
    <!-- Plugin Css -->
    <link rel="stylesheet" href="../vendor/css/revolution-settings.min.css">
    <link rel="stylesheet" href="../vendor/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../vendor/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendor/css/swiper.min.css">
    <link rel="stylesheet" href="../vendor/css/cubeportfolio.min.css">
    <link rel="stylesheet" href="../vendor/css/LineIcons.min.css">
    <link rel="stylesheet" href="../vendor/css/jquery-ui.bundle.css">
    <link rel="stylesheet" href="../vendor/css/select2.min.css">
    <link rel="stylesheet" href="../vendor/css/slick-theme.css">
    <link rel="stylesheet" href="../vendor/css/slick.css">
    <link rel="stylesheet" href="../resources/css/panda.css">
    <!--    <link rel="stylesheet" href="vendor/css/animate.css">-->
    <!-- Style Sheet -->
    <link rel="stylesheet" href="../resources/css/style.css">

    <link rel="stylesheet" href="../resources/css/adds.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <script>
        $(document).ready(function () {
            // Enable Bootstrap dropdown hover effect
            $('.dropdown-toggle').dropdownHover();

            // Show/hide line on hover
            $('.dropdown-toggle').hover(
                function () {
                    $(this).siblings('.hover-line').fadeIn(200);
                },
                function () {
                    $(this).siblings('.hover-line').fadeOut(200);
                }
            );
        });
    </script>

    <?php
    include "../resources/js/adds.php";

    $lang = '';

    if (isset($_SESSION['lang']) and $_SESSION['lang'] == 'CN') {
        $lang = '_cn';
    } else {
        $_SESSION['lang'] = 'EN';
        $lang = '_en';
    }

    $m_home = 'Home';
    $m_wetalk_courses = 'WeTalk Courses';
    $m_intelligent = 'Intelligent Databases';
    $m_recording_course = 'Recording Course';
    $m_course = 'Course';
    $m_linguistic = 'Linguistics';
    $m_science = 'Science';
    $m_culture = 'Chinese Culture Learning';
    $m_teachers = 'Teachers';
    $m_news = 'News';
    $m_study_abroad = 'Study Abroad';
    $m_educational_tours = 'Educational Tours';
    $m_company = 'Company';
    $m_charity = 'Charity';
    $m_about_us = 'About Us';
    $m_campus = 'Campus';
    $m_sign_in = 'Sign In';
    $m_sigun_up = 'Sign Up';
    $m_taiwan = 'Taiwan';
    $m_china = 'China';
    $m_singapore = 'Singapore';
    $m_japan = 'Japan';
    $m_philippines = 'Philippines';



    if ($lang == '_cn') {
        $m_home = '首页';
        $m_wetalk_courses = '众语集';
        $m_intelligent = '智慧库';
        $m_recording_course = '录播课程';
        $m_course = '课程介绍';
        $m_linguistic = '言学';
        $m_science = '科学';
        $m_culture = '国学';
        $m_teachers = '进贤进能';
        $m_news = '温故知新';
        $m_study_abroad = '留学';
        $m_educational_tours = '游学团';
        $m_company = '公司介绍';
        $m_charity = '公益慈善';
        $m_about_us = '关于我们';
        $m_campus = '校区介绍';
        $m_sign_in = '登录';
        $m_sigun_up = '注册';
        $m_taiwan = '台湾';
        $m_china = '中国';
        $m_singapore = '新加坡';
        $m_japan = '日本';
        $m_philippines = '菲律宾';


    }


    ?>


    <style>
        /* Hide submenu by default */
        .submenu {
            display: none;
            position: absolute;
            list-style: none;
            padding: 0;
            margin: 0;
            background-color: #ffffff;
            /* Background color of the submenu */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Optional: shadow for submenu */
        }

        .navbar-top-default.center-logo .logo {
            left: 45%;
        }

        /* Show submenu on hover of the parent list item */
        .nav-item:hover .submenu {
            display: block;
        }

        /* Style submenu items */
        .submenu li {
            margin: 0;
        }

        /* Style submenu links */
        .submenu li a {
            display: block;
            padding: 10px 15px;
            color: #000000;
            /* Text color of the submenu links */
            text-decoration: none;
        }

        /* Hover effect for submenu links */
        .submenu li a:hover {
            background-color: #f8f9fa;
            /* Background color on hover */
            color: #000000;
            /* Text color on hover */
        }

        /* Position submenu correctly */
        .nav-item {
            position: relative;
        }

        /* Additional styling for the nav item */
        .nav-link {
            text-decoration: none;
            padding: 10px;
            color: #000000;
        }
    </style>

</head>
<!--Preloader-->

<!-- <div class="loader" id="loader-fade">
    <div class="loader-wrapper">
        <img src="../resources/img/loader.gif" alt="image">
    </div>
</div> -->

<!--End Preloader-->

<div class="wrapper">

    <!--Header Section-->
    <header class="header-with-topbar style-two">
        <div class="top-header-area d-none d-lg-inline-block transparent-bg center-logo">
            <div class="container">
                <div class="row">
                    <a href="../" class="logo link" title="logo">
                        <img src="../resources/img/logo.png" alt="logo" title="Logo" class="logo-default">
                    </a>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-top-default navbar-expand-lg full-nav center-logo nav-line">
            <div class="container">
                <a class="logo link" href="javascript:void(0)" style="margin-top: -10px;">
                    <img src="../resources/img/logo.png" alt="logo" title="Logo" class="logo-default d-lg-none">
                    <img src="../resources/img/logo.png" alt="logo" title="Logo" class="logo-scrolled">
                </a>

                <div class="collapse navbar-collapse d-none d-lg-block">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link link " href="../index/main-page.php"><?php echo $m_home ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo $menu_bar2 ?>" href="#" id="navbarDropdown1"
                                role="button">
                                <?php echo $m_wetalk_courses ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="../short-video/"><i class="fas fa-lightbulb"></i>
                                    &nbsp;&nbsp;<?php echo $m_intelligent ?></a>
                                <a class="dropdown-item" href="../recorded-courses/"><i
                                        class="fas fa-file-video"></i>&nbsp;&nbsp;<?php echo $m_recording_course ?></a>
                                <!-- Nested submenu starts here -->

                                <!--   <div class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><i class="fas fa-video"></i>&nbsp;&nbsp;Online Course<span style="padding-right: 60px;">&nbsp;</span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Linguistics</a>
                                    <a class="dropdown-item" href="#advanced2">Chinese Culture Learning</a>
                                    <a class="dropdown-item" href="#advanced2">Science</a>
                                </div>
                            </div> -->

                                <div class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#"><i
                                            class="fas fa-book"></i>&nbsp;&nbsp;<?php echo $m_course ?> <span
                                            style="padding-right: 115px;">&nbsp;</span></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="../chinese/"><?php echo $m_linguistic ?></a>
                                        <a class="dropdown-item" href="../sinology/"><?php echo $m_culture ?></a>
                                        <a class="dropdown-item" href="../science/"><?php echo $m_science ?></a>
                                    </div>
                                </div>
                                <!-- Nested submenu ends here -->
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link link <?php echo $menu_bar3 ?>"
                                href="../linguistic/"><?php echo $m_linguistic ?></a>



                        </li>
                        <li class="nav-item">
                            <a class="nav-link link  <?php echo $menu_bar4 ?>"
                                href="../teacher/"><?php echo $m_teachers ?></a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link link  <?php echo $menu_bar5 ?>" href="../news/"><?php echo $m_news ?></a>
                        </li>

                    </ul>
                    <ul class="nav navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link link  <?php echo $menu_bar6 ?>"
                                href="../study-abroad/"><?php echo $m_study_abroad ?></a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle   <?php echo $menu_bar9 ?>" href="../educational-tour/"
                                id="navbarDropdown2" role="button">
                                <?php echo $m_educational_tours ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="../tour/?dest=SG"><?php echo $m_singapore ?></a>

                                <a class="dropdown-item" href="../tour/?dest=CN"><?php echo $m_china ?></a>

                                <a class="dropdown-item" href="../tour/?dest=JP"><?php echo $m_japan ?></a>
                                <a class="dropdown-item" href="../tour/?dest=PH"><?php echo $m_philippines ?></a>
                                <a class="dropdown-item" href="../tour/?dest=TW"><?php echo $m_taiwan ?></a>
                            </div>
                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  <?php echo $menu_bar7 ?>" href="#" id="navbarDropdown2"
                                role="button">
                                <?php echo $m_company ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="../charity/"><?php echo $m_charity ?></a>
                                <a class="dropdown-item" href="../about-us/"><?php echo $m_about_us ?></a>
                                <a class="dropdown-item" href="../campus-philippines/"><?php echo $m_campus ?></a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="scroll nav-link link" href="#blog"><i class="fas fa-search"></i></a>
                        </li>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  <?php echo $menu_bar8 ?>" href="#" id="navbarDropdown2"
                                role="button">
                                <i class="fas fa-globe"></i>
                            </a>


                            <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="../includes/language.php?lang=EN">
                                    <img src="../resources/img/en.png" alt="English Flag"
                                        style="width: 20px; height: 20px; margin-right: 8px;">
                                    EN
                                </a>
                                <a class="dropdown-item" href="../includes/language.php?lang=CN">
                                    <img src="../resources/img/cn.png" alt="Chinese Flag"
                                        style="width: 20px; height: 20px; margin-right: 8px;">
                                    CN
                                </a>
                            </div>



                        </li>



                        <li class="nav-item">
                            <a class="nav-link link" href="../signin/" target="_blank"><?php echo $m_sign_in ?></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link link" href="../signup/" target="_blank"><?php echo $m_sigun_up ?></a>
                        </li>



                    </ul>
                    <!-- Add custom CSS for the nested submenu -->


                </div>

                <!--  <div class="social_icons">
                <ul>
                    <li><a href="#." class="facebook-bg-hvr"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="twitter-bg-hvr"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="linkedin-bg-hvr"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
                    <li><a href="#." class="instagram-bg-hvr"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
                </ul>
            </div> -->

                <div class="side-nav-btn" id="sidemenu_toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>

        <!-- Side Menu -->
        <div class="side-menu dnone">
            <div class="inner-wrapper nav-icon">



                <span class="btn-close link" id="btn_sideNavClose"></span>
                <nav class="side-nav w-100">
                    <div class="navbar-nav">

                        <nav class="side-nav w-100">

                            <?php include "sidemenu.php" ?>

                        </nav>
                    </div>
                </nav>

                <div align="center" style="margin-top: -50px;" class=" side-footer text-white w-100">

                    <img src="../resources/img/stroy-logo.png ">


                    <p class="text-black"> Copyright &copy; WeTalk International Education Pte. Ltd. 众语国际教育咨询有限公司 2024
                    </p>

                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!--Side Menu-->



    </header>
    <?php if (!$hide_panda): ?>
        <div class="panda-wrapper">
            <img src="../resources/img/Panda.png" alt="Panda" class="panda-img" />
            <div class="chat-bubble">
                <button class="close-bubble" id="close-bubble">&times;</button>
                <h3 class="quote-title" id="hm-quote-title">Quote of the Day</h3>
                <p class="quote-text" id="hm-quote-text">“Education is the most powerful weapon which you can use to change
                    the
                    world.”</p>
                <p class="quote-author" id="hm-quote-author">– Nelson Mandela</p>
            </div>
        </div>
    <?php endif; ?>
    <script type="module" src="../index/scripts/panda.js"></script>
    <script type="module" src="../index/scripts/translate.js"></script>
    <?php
    function getWords($sentence)
    {
        // Use preg_match_all to find all words in the sentence
        preg_match_all('/\b\w+\b/', $sentence, $matches);
        // Return the matched words
    

        return $matches[0];
    }


    function base64_encode_image($imagePath)
    {
        $imageType = pathinfo($imagePath, PATHINFO_EXTENSION);
        $imageData = file_get_contents($imagePath);
        $base64 = 'data:image/' . $imageType . ';base64,' . base64_encode($imageData);
        return $base64;
    }

    ?>