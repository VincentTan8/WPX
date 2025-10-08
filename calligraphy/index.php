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

$_SESSION['active_page'] = 'calligraphy';

include "../includes/header.php";
include "../connections/dbname.php";

?>

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

<style>
    a {
        text-decoration: none;
        color: white;
    }

    .main-container {
        display: flex;
        gap: 169px;
        padding: 30px 0;
        margin-left: 240px;
        margin-right: 240px;
    }

    .left-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 50px;
        width: 800px;
        justify-content: space-between;
    }

    .left-header-wrap {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        width: 100%;
    }

    .calligraphy-left-title {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: 700;
        width: 622px;
        text-align: left;
    }

    .left-rating {
        width: 212px;
        height: 21px;
        display: flex;
        align-items: center;
        gap: 6px;
        justify-content: flex-end;
    }

    .left-rating-star {
        color: #FF9415;
        font-size: 18px;
        line-height: 1;
    }

    .left-rating-text {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #6E6C6C;
        line-height: 1;
    }

    .calligraphy-left-image-wrapper {
        position: relative;
        width: 100%;
    }

    .calligraphy-left-image {
        width: 100%;
        border-radius: 10px;
        display: block;
    }


    .calligraphy-left-description {
        font-size: 18px;
        line-height: 1.6;
        text-align: left;


    }

    .section-left-description {
        font-size: 18px;
        line-height: 1.6;
        text-align: left;
        font-weight: 700;
        margin-left: 15px;
        margin-bottom: 10px;
    }

    .details-section {
        margin-top: 20px;
    }

    .details-section h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 22px;
        text-align: left;
        font-weight: 700;
    }

    .section-item {
        display: flex;
        align-items: flex-start;
        gap: 30px;
        margin-bottom: 10px;
        margin-left: 30px;

    }

    .section-item img {
        width: 20px;
        height: 20px;
        margin-top: 4px;
    }

    .right-container {
        width: 472px;
        height: 709px;
        flex-shrink: 0;
    }

    .tab-toggle {
        display: flex;
        justify-content: space-between;
        position: relative;
        margin-bottom: 20px;
        height: 60px;
        z-index: 2;
    }

    .toggle-button {
        flex: 1;
        padding: 15px 0;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: 700;
        background-color: transparent;
        border: none;
        cursor: pointer;
        opacity: 0.25;
        color: #2D2B32;
        z-index: 2;
        position: relative;
    }

    .toggle-button.active {
        color: white;
        opacity: 1;
    }

    .toggle-button.disabled {
        pointer-events: none;

        cursor: not-allowed;

        opacity: 0;

    }

    .tab-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 191px;
        z-index: 1;
        overflow: hidden;
        pointer-events: none;
    }

    .tab-bg svg {
        width: 100%;
        height: 100%;
        display: none;
        object-fit: cover;
    }

    .tab-bg svg.active {
        display: block;
    }

    .tab-content {
        background: #fff;
        box-shadow: 0px 0px 26px 0px rgba(0, 51, 102, 0.25);
        border-radius: 10px;
        padding: 30px;
        margin-top: -30px;
        position: relative;
        z-index: 10;
    }

    .section-label {
        font-weight: 600;
        margin-bottom: 10px;

    }

    .option-group {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-bottom: 30px;
    }

    .option {
        padding: 10px 20px;
        border-radius: 30px;
        border: 1px solid #ccc;
        text-align: center;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 500;
    }

    .option.selected {
        background: #FFE9A1;
        border: none;
    }

    .total {
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .price-total {
        color: red;
    }

    .try-now {
        background: #FFB800;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        padding: 15px 0;
        width: 100%;
        border-radius: 10px;
        cursor: pointer;
    }

    .mobile-only {
        display: none;
    }

    .footer-left {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .dollar-box {
        width: 22px;
        height: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        stroke-width: 2px;
        stroke: #2D2B32;
    }

    .currency-label {
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        font-weight: 600;
        color: #2D2B32;
    }

    .currency-popup {
        display: none;
    }

    .pricing-modal {
        display: none;
    }

    .pricing-modal.active {
        display: flex;
    }

    .equal-img {
        height: 500px;
        width: 100%;
        object-fit: cover;
        border-radius: 8px;
    }

    @media (max-width: 1710px) {
        .main-container {
            margin-left: 120px;
            margin-right: 120px;
        }
    }


    @media (max-width: 768px) {
        .main-container {
            flex-direction: column;
            gap: 30px;
            margin: 0;
            padding: 20px;
        }

        .mobile-only {
            display: flex;
        }

        .left-container {
            width: 100%;
            gap: 30px;
        }

        .right-container {
            display: none;
        }

        .footer-fixed {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: white;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            display: flex;
            gap: 1rem;
            justify-content: space-between;
            align-items: center;
            z-index: 998;
        }

        .try-now-mobile {
            background: #FFB800;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            width: 325px;
            border-radius: 5px;
        }

        .pricing-modal {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #fff;
            box-shadow: 0 -2px 30px rgba(0, 0, 0, 0.3);
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            padding: 40px 20px 65px 20px;
            display: none;
            flex-direction: column;
            gap: 20px;
        }

        .pricing-modal .modal-inner {
            position: relative;
        }

        .pricing-modal.active {
            display: flex;
        }

        .pricing-close {
            position: absolute;
            top: -30px;
            right: 20px;
            font-size: 20px;
            font-weight: bold;
            background: none;
            border: none;
            cursor: pointer;
            color: #2D2B32;
        }

        .pricing-modal .option-group {
            flex-direction: row;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: flex-start;
        }

        .pricing-modal .calligraphy-type-option {
            flex: 1 1 calc(33.333% - 10px);
            background: white;
            color: #2D2B32;
            border: 1px solid #ccc;
            text-align: center;
        }


        .pricing-modal .calligraphy-type-option.selected {
            background: #4170FE;
            color: white;
            border: none;
        }

        .pricing-modal .option-group .option {
            flex: 1 1 calc(33.333% - 10px);

            text-align: center;
        }

        .pricing-modal .option-group[data-group="teaching"] .option {
            flex: 1 1 calc(50% - 10px);

        }

        .pricing-modal .option-group[data-group="calligraphy-type"] .option.selected {
            background: #4170FE;
            color: white;
            border: none;
        }

        .pricing-modal .sessions-group .option {
            flex: 1 1 calc(50% - 10px);
            max-width: calc(50% - 10px);
            text-align: center;
        }

        .section-label {
            text-align: left;
        }

        .section-item div {
            text-align: left;
        }

        .left-header-wrap {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .calligraphy-left-title {
            width: 100%;
        }

        .left-rating {
            justify-content: flex-start;
            width: 100%;
        }

        .currency-popup {
            position: fixed;
            bottom: 80px;
            left: 20px;
            background: white;
            box-shadow: 0px 4px 19px 0px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            z-index: 3000;

            width: 116px;
            display: none;
            flex-direction: column;
            gap: 12px;
        }


        .currency-popup.active {
            display: flex;
        }

        .currency-popup-inner {
            position: relative;
        }

        .close-currency {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #2D2B32;
            color: white;
            border: none;
            font-size: 16px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            cursor: pointer;
        }

        .currency-title {
            font-size: 16px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
        }

        .currency-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .currency-option {
            padding: 10px 15px;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            cursor: pointer;
            transition: 0.2s;
        }
    }
</style>

<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">
    <div class="" style="margin-top:10em;">
        <div class="col-md-12   ">
            <div class="main-container">
                <div class="left-container">
                    <div class="left-header-wrap">
                        <div id="calligraphy-title" class="calligraphy-left-title">
                            书法
                        </div>
                        <div class="left-rating">
                            <span class="left-rating-star">★★★★★</span>
                            <span class="left-rating-text">5.0 (20)</span>
                        </div>
                    </div>

                    <div class="calligraphy-left-image-wrapper">
                        <img src="../resources/img/calligraphy/calligraphy-thumbnail.png" alt="calligraphy"
                            class="calligraphy-left-image">
                    </div>

                    <div id="calligraphy-description" class="calligraphy-left-description">
                        在新加坡城市中心，习得中华书法之美；一笔一画，修心养性
                    </div>

                    <div class="details-section">
                        <h3 id="section-1-title">为什么学书法？</h3>
                        <div id="section-1-description" class="section-left-description">
                            中国书法不仅仅是书写，更是一种生活方式。每一笔都体现着耐心、平衡与和谐。在WeTalk，我们的书法课程帮助学生：</div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-1-item-1">创意表达 - 将墨水转化为流动的艺术</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-1-item-2">专注静心 - 培养专注力和内心的平静</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-1-item-3">文化传承 - 体验中华传统智慧</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-1-item-4">品格养成 - 书法培养纪律、毅力和尊重</div>
                        </div>
                    </div>

                    <div class="details-section">
                        <h3 id="section-2-title">课程体系</h3>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-2-item-1">初级 - 握笔、备墨、基本笔画、简笔字</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-2-item-2">中级 - 字体样式（楷书、行书）、临摹母版、表达和结构</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-2-item-3">高级 - 自由创作、大型作品、展览及比赛</div>
                        </div>
                    </div>

                    <div class="details-section">
                        <h3 id="section-3-title">师资团队</h3>
                        <div id="section-3-desc-1" class="section-left-description">
                            米兰老师
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-3-1-1">巴黎和东京青年设计师奖得主</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-3-1-2">20+年教学经验（前华中教师）</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-3-1-3">2018年陈志祖博士书法奖（一等奖）</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-3-1-4">精通毛笔书法，懂得将中国文化智慧融入课堂</div>
                        </div>
                        <!-- <img src="test-profile.jpg" height="500px" width="500px"> -->
                        <div class="row text-center">
                            <div class="col-md-4 col-sm-12 mb-3">
                                <img src="ms_1.jpg" class="img-fluid equal-img" alt="Image 1">
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <img src="ms_2.jpg" class="img-fluid equal-img" alt="Image 2">
                            </div>
                            <div class="col-md-4 col-sm-12 mb-3">
                                <img src="ms_3.jpg" class="img-fluid equal-img" alt="Image 3">
                            </div>
                        </div>

                        <div id="section-3-desc-2" class="section-left-description">
                            安春来老师
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-3-2-1">三届新加坡书法公开赛冠军（2013-2015）</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-3-2-2">2015年毛笔书法公开赛冠军</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-3-2-3">作品连续10年入选新加坡现代书法展（2014-2023）</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-3-2-4">荣获新加坡书法协会35周年纪念展特别奖（2021年）</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-3-2-5">新加坡书法协会会员、新加坡书法研究院院士</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-3-2-6">顶尖学校和教育部项目经验丰富的教育工作者，国家级竞赛评委</div>
                        </div>
                        <!-- <img src="test-profile.jpg" height="500px" width="500px"> -->
                        <div class="row text-center">
                            <div class="col-md-6 col-sm-12 mb-3">
                                <img src="mr_1.jpg" class="img-fluid equal-img" alt="Image 1">
                            </div>
                            <div class="col-md-6 col-sm-12 mb-3">
                                <img src="mr_2.png" class="img-fluid equal-img" alt="Image 2">
                            </div>
                        </div>
                    </div>

                    <div class="details-section">
                        <h3 id="section-4-title">学习风采</h3>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-4-item-1">在个人指导下进行实践</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-4-item-2">小班授课，最大程度关注</div>
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-4-item-3">学生的作品经常在 WeTalk 活动和展览中展出</div>
                        </div>
                    </div>

                    <div class="details-section">
                        <h3 id="section-5-title">常见问题</h3>
                        <div id="section-5-q-1" class="section-left-description">
                            1. 需要基础吗？
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-5-a-1">不需要，零基础可学。</div>
                        </div>
                        <div id="section-5-q-2" class="section-left-description">
                            2. 材料包含吗？
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-5-a-2">可购买入门套装。</div>
                        </div>

                        <div id="section-5-q-3" class="section-left-description">
                            3. 适合儿童吗？
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-5-a-3">4岁以上皆可参加。</div>
                        </div>

                        <div id="section-5-q-4" class="section-left-description">
                            4. 有成人课程吗？
                        </div>
                        <div class="section-item">
                            <img src="../resources/img/course/check-yellow-list.png" alt="check">
                            <div id="section-5-a-4">设青少年与成人分班。</div>
                        </div>
                    </div>
                    <div class="details-section">
                        <h3 id="section-6-title">观看书法课堂示范</h3>
                        <div class="video-container">
                            <video controls>
                                <source src="../resources/img/calligraphy/calligraphy.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

                <div class="right-container">
                    <div class="tab-toggle">
                        <button class="toggle-button disabled" onclick="setTab('online')">Online</button>
                        <button id="onsite" class="toggle-button active" onclick="setTab('onsite')">On-Site</button>
                        <button class="toggle-button disabled" onclick="setTab('tohome')">To-Home</button>
                        <div class="tab-bg">
                            <svg id="bg-online" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 472 191" fill="none">
                                <path
                                    d="M157.333 31C157.333 39.2843 164.049 46 172.333 46H457C465.284 46 472 52.7157 472 61V176C472 184.284 465.284 191 457 191H15C6.71572 191 0 184.284 0 176V15C0 6.71572 6.71573 0 15 0H142.333C150.617 0 157.333 6.71573 157.333 15V31Z"
                                    fill="#4170FE" />
                            </svg>
                            <svg id="bg-onsite" class="active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 472 191"
                                fill="none">
                                <path
                                    d="M314.333 31C314.333 39.2843 321.049 46 329.333 46H457C465.284 46 472 52.7157 472 61V176C472 184.284 465.284 191 457 191H15C6.71572 191 0 184.284 0 176V61C0 52.7157 6.71573 46 15 46H142C150.284 46 157 39.2843 157 31V15C157 6.71573 163.716 0 172 0H299.333C307.617 0 314.333 6.71573 314.333 15V31Z"
                                    fill="#4170FE" />
                            </svg>
                            <svg id="bg-tohome" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 473 191" fill="none">
                                <path
                                    d="M472.333 56.8335C472.333 56.9255 472.258 57 472.167 57C472.075 57 472 57.0745 472 57.1665V176C472 184.284 465.284 191 457 191H15C6.71572 191 0 184.284 0 176V61C0 52.7157 6.71573 46 15 46H300C308.284 46 315 39.2843 315 31V15C315 6.71573 321.716 0 330 0H457.333C465.617 0 472.333 6.71573 472.333 15V56.8335Z"
                                    fill="#4170FE" />
                            </svg>
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="calligraphy-setup" class="section-label">Way of Teaching:</div>
                        <div class="option-group">
                            <div id="1on1" class="option " data-group="teaching" data-value="solo">Solo (1on1)</div>
                            <div id="group" class="option selected" data-group="teaching" data-value="group">Group</div>
                        </div>
                        <div id="calligraphy-session-num" class="section-label">Number of Sessions:</div>
                        <div class="option-group">
                            <div id="10sessions" class="session-num option selected" data-group="sessions">10 Sessions
                            </div>
                        </div>
                        <div class="total">
                            <span id="calligraphy-total">Price:</span> <span class="price-total">$ 450.00</span>
                        </div>
                        <button class="try-now" id="try-button"><a id="try-link">Try Now</a></button>
                    </div>
                </div>
            </div>
            <div class="footer-fixed mobile-only">
                <div class="footer-left">
                    <div class="dollar-box">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
                            <path
                                d="M6.66683 5.23242L6.6295 5.09342C6.48775 4.56196 6.16061 4.09015 5.70006 3.75296C5.23952 3.41578 4.67198 3.23256 4.08763 3.23242H3.53083C3.07458 3.23255 2.63262 3.38161 2.28085 3.654C1.92908 3.92639 1.68946 4.30511 1.60314 4.72511C1.51682 5.14512 1.58919 5.58019 1.80782 5.95562C2.02645 6.33104 2.3777 6.62338 2.80123 6.78242L5.1991 7.68242C5.62263 7.84147 5.97387 8.1338 6.1925 8.50923C6.41113 8.88465 6.4835 9.31973 6.39718 9.73973C6.31086 10.1597 6.07124 10.5385 5.71947 10.8108C5.3677 11.0832 4.92574 11.2323 4.4695 11.2324H3.91376C3.32923 11.2325 2.76145 11.0494 2.30068 10.7122C1.83992 10.375 1.51262 9.90305 1.37083 9.37142L1.3335 9.23242M4.00016 1.23242V3.23242M4.00016 11.2324V13.2324"
                                stroke="#2D2B32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="currency-label" id="currency-text-mobile-1">Currency</div>
                </div>
                <button class="try-now-mobile" id="try-button-mobile-1" onclick="openPricingModal()"><a
                        id="try-link-mobile">Try Now</a></button>
            </div>

            <!-- Currency popup -->
            <div class="currency-popup" id="currencyPopup">
                <div class="currency-popup-inner">

                    <div class="currency-options">
                        <div class="currency-option">SGD</div>
                        <div class="currency-option">CNY</div>
                        <div class="currency-option">PHP</div>
                        <div class="currency-option">USD</div>
                    </div>
                </div>
            </div>

            <div class="pricing-modal" id="pricingModal">
                <div class="modal-inner">
                    <button class="pricing-close" onclick="closePricingModal()">×</button>
                    <div class="section-label"></div>
                    <div class="option-group">
                        <!-- <div class="option calligraphy-type-option" data-group="calligraphy-type">Online</div> -->
                        <div id="onsite-mobile" class="option calligraphy-type-option selected"
                            data-group="calligraphy-type">On-Site</div>
                        <!-- <div class="option calligraphy-type-option" data-group="calligraphy-type">To-Home</div> -->
                    </div>
                    <div id="calligraphy-setup-mobile" class="section-label">Way of teaching:</div>
                    <div class="option-group">
                        <div id="1on1-mobile" class="option" data-group="teaching" data-value="solo">Solo (1on1)</div>
                        <div id="group-mobile" class="option selected" data-group="teaching" data-value="group">Group
                        </div>
                    </div>
                    <div id="calligraphy-session-num-mobile" class="section-label">Number of Session:</div>
                    <div class="option-group sessions-group">
                        <div id="10sessions-mobile" class="session-num option selected" data-group="sessions">10
                            Sessions</div>
                    </div>
                    <div class="total">
                        <span id="calligraphy-total-mobile">Price:</span> <span class="price-total">$ 450.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../includes/address.php"; ?>
    <?php include "../includes/footer.php"; ?>

    <div id="page-data" data-page="calligraphy" data-lang="<?php echo $lang ?>"></div>

    <script>
        const pageData = document.getElementById("page-data");
        const pageLang = pageData.dataset.lang;

        function handleClick(event) {
            // event.preventDefault();
            // const popupMobile = document.getElementById("popupForm");
            // var companyId = this.getAttribute('data-id');
            // document.getElementById('course').value = companyId;
            // popupMobile.style.display = "block";
        }

        function setTab(tab) {
            document.querySelectorAll('.toggle-button').forEach(btn => btn.classList.remove('active'));
            document.querySelector(`.toggle-button[onclick="setTab('${tab}')"]`).classList.add('active');

            document.querySelectorAll('.tab-bg svg').forEach(svg => svg.classList.remove('active'));
            document.getElementById('bg-' + tab).classList.add('active');
        }

        function updateOptions(option) {
            const group = option.dataset.group;
            document.querySelectorAll(`.tab-content .option[data-group="${group}"]`).forEach(opt => {
                opt.classList.remove('selected');
            });
            option.classList.add('selected');

            if (group === "teaching") {
                const totalPrice = document.querySelector(".total .price-total");
                const sessionNum = document.querySelector(".session-num");
                const tryLink = document.getElementById("try-link");

                if (option.dataset.value === "solo") {
                    if (pageLang == "_en") {
                        sessionNum.textContent = "Private sessions available upon request";
                        totalPrice.textContent = "Varies";
                        tryLink.textContent = "Contact Us";
                    }
                    if (pageLang == "_cn") {
                        sessionNum.textContent = "可应要求提供私人课程";
                        totalPrice.innerHTML = "各不相同";
                        tryLink.textContent = "联系我们";
                    }
                    tryLink.href = "https://api.whatsapp.com/send?phone=6597582288";
                    tryLink.target = "_blank";
                } else if (option.dataset.value === "group") {
                    if (pageLang == "_en") {
                        sessionNum.textContent = "10 Sessions";
                        totalPrice.textContent = "$ 450.00";
                        tryLink.textContent = "Try Now";
                    }
                    if (pageLang == "_cn") {
                        sessionNum.textContent = "10 单节课时";
                        totalPrice.innerHTML = "$ 450.00";
                        tryLink.textContent = "立即试听";
                    }
                    tryLink.href = "https://api.whatsapp.com/send?phone=6597582288";
                    tryLink.target = "_blank";
                }
            }
        }

        document.querySelectorAll('.option').forEach(option => {
            option.addEventListener('click', () => updateOptions(option));
        });
        let initialOption = document.querySelector(`.tab-content .option[data-group="teaching"].selected`);
        updateOptions(initialOption);

        function openPricingModal() {
            document.getElementById('pricingModal').classList.add('active');
            document.querySelector('.footer-fixed').classList.add('modal-open');
            document.body.style.overflow = 'hidden';
            const btn = document.getElementById('try-button-mobile-1');
            btn.addEventListener('click', handleClick);
        }

        function closePricingModal() {
            document.getElementById('pricingModal').classList.remove('active');
            document.querySelector('.footer-fixed').classList.remove('modal-open');
            document.body.style.overflow = '';
            const btn = document.getElementById('try-button-mobile-1');
            btn.removeEventListener('click', handleClick);
        }

        function updateOptionsMobile(option) {
            const group = option.dataset.group;
            document.querySelectorAll(`.pricing-modal .option[data-group="${group}"]`).forEach(opt => {
                opt.classList.remove('selected');
            });
            option.classList.add('selected');

            if (group === "teaching") {
                const totalPrice = document.querySelector(".pricing-modal .total .price-total");
                const sessionNum = document.querySelector(".pricing-modal .option-group .session-num");
                const tryLink = document.getElementById("try-link-mobile");
                if (totalPrice) {
                    if (option.dataset.value === "solo") {
                        if (pageLang == "_en") {
                            sessionNum.textContent = "Private sessions available upon request";
                            totalPrice.innerHTML = "Varies";
                            tryLink.textContent = "Contact Us";
                        }
                        if (pageLang == "_cn") {
                            sessionNum.textContent = "可应要求提供私人课程";
                            totalPrice.innerHTML = "各不相同";
                            tryLink.textContent = "联系我们";
                        }
                        tryLink.href = "https://api.whatsapp.com/send?phone=6597582288";
                        tryLink.target = "_blank";
                    } else if (option.dataset.value === "group") {
                        if (pageLang == "_en") {
                            sessionNum.textContent = "10 Sessions";
                            totalPrice.textContent = "$ 450.00";
                            tryLink.textContent = "Try Now";
                        }
                        if (pageLang == "_cn") {
                            sessionNum.textContent = "10 单节课时";
                            totalPrice.innerHTML = "$ 450.00";
                            tryLink.textContent = "立即试听";
                        }
                        tryLink.href = "https://api.whatsapp.com/send?phone=6597582288";
                        tryLink.target = "_blank";
                    }
                }
            }
        }

        document.querySelectorAll('.pricing-modal .option').forEach(option => {
            option.addEventListener('click', () => updateOptionsMobile(option));
        });
        initialOption = document.querySelector(`.pricing-modal .option[data-group="teaching"].selected`);
        updateOptionsMobile(initialOption);

        document.querySelector('.footer-left').addEventListener('click', function (e) {
            e.stopPropagation();
            document.getElementById('currencyPopup').classList.add('active');
        });

        function closeCurrencyPopup() {
            document.getElementById('currencyPopup').classList.remove('active');
        }

        document.addEventListener('click', function (e) {
            const pricingModal = document.getElementById('pricingModal');
            const footerFixed = document.querySelector('.footer-fixed');
            const popup = document.getElementById('currencyPopup');
            const trigger = document.querySelector('.footer-left');

            if (!popup.contains(e.target) && !trigger.contains(e.target)) {
                popup.classList.remove('active');
            }
            if (!pricingModal.contains(e.target) && !footerFixed.contains(e.target)) {
                closePricingModal();
            }
        });

        document.getElementById("try-button").dataset.id = "Cultivating Character Through Every Stroke";  //I used id coz un ung ginamit ni sir sa footer.php
        document.getElementById("try-button-mobile-1").dataset.id = "Cultivating Character Through Every Stroke";
    </script>
</body>

</html>