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
    <meta property="og:title" content="WeTalk - More than Language" />
    <meta property="og:description" content="Empowering learning through multilingual education." />
    <meta property="og:image" content="https://wetalk.com/resources/img/logo.png" />
    <meta property="og:url" content="https://wetalk.com/" />
    <meta property="og:type" content="website" />

    <!-- LOAD JQUERY LIBRARY -->
    <script type="text/javascript" src="../jquery.js"></script>

    <link rel="icon" href="../resources/img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="revolution/fonts/font-awesome/css/font-awesome.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="styles/hamburger.css">
    <link rel="stylesheet" type="text/css" href="styles/translate.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        html,
        body {
            overscroll-behavior: none;
            background-image: linear-gradient(180deg, rgb(15, 0, 152) 27.29%, rgb(70, 25, 168) 105.37%);
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

        /* Panel styling */
        .panelWrapper,
        .panelWrapper2,
        .panelWrapper3,
        .panelWrapper4,
        .panelWrapper5 {
            transition: left 0.4s ease, opacity 0.4s ease;
        }

        .responsive-panel-wrapper,
        .responsive-panel-wrapper-right {
            position: fixed;
            top: 0;
            display: flex;
            flex-direction: column;
            z-index: 1000;
            transition: 0.4s ease;
            opacity: 0;
            pointer-events: none;
            box-sizing: border-box;
        }

        .responsive-panel-wrapper.visible {
            left: 0;
            opacity: 1;
            pointer-events: auto;
        }

        #closePanelBtn,
        #closePanelBtn2,
        #closePanelBtn3,
        #closePanelBtn4,
        #closePanelBtn5 {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
            opacity: 0;
            transition: opacity 0.4s ease;
        }

        #hamburgerPanelWrapper {
            position: fixed;
            top: 0;
            right: 0;
            width: 60vw;
            height: 100vh;
            display: flex;
            transition: transform 0.4s ease;
            z-index: 1001;
            transform: translateX(100%);
            background-color: #000;
        }

        @media (max-width: 768px) {
            .responsive-panel-wrapper {
                width: 75vw;
                max-width: 75vw;
                left: -75vw;
            }

            .responsive-panel-wrapper.visible {
                left: 0;
            }

            .responsive-panel-wrapper .panel-content {
                max-height: calc(100vh - 40px);
                font-size: 12px;
                padding-right: 10px;
            }

            #hamburgerPanelWrapper {
                width: 70vw;
            }
        }
    </style>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
</head>

<body>
    <section class="example">
        <article class="content">
            <div id="rev_slider_1064_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias=""
                data-source="gallery" style="background-color:transparent;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="rev_slider_1064_1" class="rev_slider fullscreenbanner" style="display:none;"
                    data-version="5.4.1">
                    <ul>
                        <!-- SLIDE 1 -->
                        <li data-index="rs-2989" data-transition="fade" data-slotamount="7" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="500" data-thumb="" data-rotate="0" data-fstransition="fade"
                            data-fsmasterspeed="500" data-fsslotamount="7" data-saveperformance="off"
                            data-title="Slide 1" data-param1="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="assets/wetalk/beijing.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-3" id="hailang-layer-2"
                                data-x="['center','center','center','center']"
                                data-hoffset="['-500','-450','-400','-350']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-20','-20','-20','-20']"
                                data-type="image" data-responsive_offset="off"
                                data-frames='[
                                    {"delay":100,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-basealign="slide" style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="assets/wetalk/hailang2.png" alt=""
                                        data-ww="['1240px','1240px','1040px','940px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="hailang-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['120','220','120','120']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-20','-20','-20','-20']"
                                data-type="image" data-responsive_offset="off"
                                data-frames='[
                                    {"delay":100,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-basealign="slide" style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="assets/wetalk/hailang.png" alt=""
                                        data-ww="['2193px','2100px','1800px','1800px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="earth-layer"
                                data-x="['center','center','center','center']" data-hoffset="['-270','-270','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-127','-127','-287','-287']" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[
                                    {"delay":350,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-rotate" data-easing="Linear.easeNone" data-speed="50"
                                    data-startdeg="0" data-enddeg="-381.5" data-origin="50% 50%">
                                    <img src="assets/wetalk/earth.png" alt=""
                                        data-ww="['410px','410px','410px','410px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="ren-layer"
                                data-x="['center','center','center','center']" data-hoffset="['530','500','400','110']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['20','140','140','230']"
                                data-type="image" data-responsive_offset="on"
                                data-frames='[
                                    {"delay":1570,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="assets/wetalk/ren.png" alt="" data-ww="['691px','691px','491px','391px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="centertext-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-80','-157','-157','-190']" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":100,"speed":1000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="assets/wetalk/centertext-1.png" alt=""
                                        data-ww="['624px','624px','524px','424px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-5" id="shu-layer"
                                data-x="['center','center','center','center']" data-hoffset="['750','580','580','380']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['60','247','240','240']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":350,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="assets/wetalk/shu.png" alt="" data-ww="['871px','871px','671px','671px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="shan-layer"
                                data-x="['center','center','center','center']" data-hoffset="['385','100','50','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['160','430','160','160']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1070,"speed":300,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                style="z-index: 4; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="assets/wetalk/shan.png" alt=""
                                        data-ww="['1350px','1350px','1150px','1150px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-3" id="fish-layer-2"
                                data-x="['center','center','center','center']"
                                data-hoffset="['-65','-100','-150','-120']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['90','90','-100','230']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":2470,"speed":500,"frame":"0","from":"x:[-100%];y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="assets/wetalk/fish-2.png" alt=""
                                        data-ww="['344px','344px','144px','144px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-5" id="fish-layer-1"
                                data-x="['center','center','center','center']"
                                data-hoffset="['-535','-435','-300','-170']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-170','-180','-180','150']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":2470,"speed":500,"frame":"0","from":"x:[-100%];y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="assets/wetalk/fish-1.png" alt=""
                                        data-ww="['284px','264px','124px','124px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="niao-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['-100','300','300','160']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-255','-350','-350','-400']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":1270,"speed":2000,"frame":"0","from":"x:[100%];y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="2"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="assets/wetalk/niao.png" alt="" data-ww="['120px','120px','120px','120px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="slide-1-text"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['120','100','100','180']"
                                data-lineheight="['37','37','37','30']" data-width="['650','492','500','450']"
                                data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                                data-responsive_offset="on"
                                data-frames='[{"delay":3000,"speed":700,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 10; font-family:'Times New Roman', 'Times', 'serif'; color: #f0f0f0; font-size: 22px; white-space: normal;text-transform:left;">
                                Travel to ancient times to learn Chinese culture. In the Chinese culture
                                learning course, we aim to set off a craze to learn Chinese culture and
                                demonstrate its profound and extensive influence in a more youth-
                                friendly, simpler and more popular way.
                            </div>

                            <div class="tp-caption tp-resizeme" id="openAllusionbbtn"
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['-50','30','30','30']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-startslide="0"
                                data-endslide="9" data-type="image" data-basealign="slide" data-responsive_offset="off"
                                data-responsive="off" data-frames='[{"delay":0,"speed":1,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"none"},
                                          {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"none"}]'
                                style="z-index: 26; text-transform: left; border-width: 0px; cursor: pointer;">
                                <img loading="lazy" src="assets/wetalk/button-allusion.png" alt="Open Allusion"
                                    data-ww="['120px','171px','171px','120px']"
                                    data-hh="['auto','auto','auto','auto']" />
                            </div>
                        </li>

                        <!-- SLIDE 2 -->
                        <li data-index="rs-2990" data-transition="fade" data-slotamount="7" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="500" data-thumb="" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 2" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img loading="lazy" src="assets/wetalk/slide2-bg.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="sun-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-267','-257','-257','-290']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":350,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-rotate" data-easing="Linear.easeNone" data-speed="50"
                                    data-startdeg="0" data-enddeg="-360" data-origin="50% 50%">
                                    <img loading="lazy" src="assets/wetalk/taiyang.png" alt=""
                                        data-ww="['410px','410px','310px','310px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="right-layer-1"
                                data-x="['right','right','right','right']" data-hoffset="['-0','-50','-100','-250']"
                                data-y="['top','top','top','top']" data-voffset="['-0','-0','-0','-0']"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="off"
                                data-basealign="slide"
                                data-frames='[
                                    {"delay":650,"speed":600,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/right-curtain.png" alt=""
                                    data-ww="['578px','578px','478px','478px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="left-layer-1"
                                data-x="['left','left','left','left']" data-hoffset="['-0',-50','-100','-250']"
                                data-y="['top','top','top','top']" data-voffset="['-0','-0','-0','-0']"
                                data-type="image" data-responsive_offset="off" data-basealign="slide"
                                data-frames='[
                                    {"delay":650,"speed":600,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/left-curtain.png" alt=""
                                    data-ww="['578px','578px','478px','478px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="ren1-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['-245','-315','-245','-145']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-5','95','90','85']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1550,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/ren1.png" alt=""
                                    data-ww="['381px','381px','381px','201px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="ren2-layer"
                                data-x="['center','center','center','center']" data-hoffset="['245','315','245','145']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['5','105','95','90']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1550,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/ren2.png" alt=""
                                    data-ww="['381px','381px','381px','201px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme" id="centertext-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-80','-157','-157','-190']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":100,"speed":1000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/centertext-2.png" alt=""
                                        data-ww="['624px','624px','524px','424px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-3" id="chengqiang-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['165','165','195','245']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":950,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/chengqiang.png" alt=""
                                    data-ww="['604px','604px','554px','454px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-6" id="bottom-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-20','-20','-20','-20']"
                                data-type="image" data-responsive_offset="off" data-basealign="slide"
                                data-frames='[
                                    {"delay":100,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/slide2-bottom.png" alt=""
                                        data-ww="['3400px','3400px','2500px','2500px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="slide-2-text"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['120','100','100','180']"
                                data-lineheight="['37','37','37','30']" data-width="['650','492','500','450']"
                                data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                                data-responsive_offset="on"
                                data-frames='[{"delay":2300,"speed":700,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 10; font-family:'Times New Roman', 'Times', 'serif'; color: #f0f0f0; font-size: 22px; white-space: normal;text-transform:left;">
                                Based on linguistic education, we aim to cultivate capable and virtuous
                                students by centering on Chinese culture and moral education. We also
                                value family education and traditional education and will endeavor to
                                advance their development.
                            </div>

                            <div class="tp-caption tp-resizeme" id="openAllusionS2"
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['-50','30','30','30']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-startslide="0"
                                data-endslide="9" data-type="image" data-basealign="slide" data-responsive_offset="off"
                                data-responsive="off" data-frames='[{"delay":0,"speed":1,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"none"},
                                          {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"none"}]'
                                style="z-index: 26; text-transform: left; border-width: 0px; cursor: pointer;">
                                <img loading="lazy" src="assets/wetalk/button-allusion.png" alt="Open Allusion"
                                    data-ww="['120px','171px','171px','120px']"
                                    data-hh="['auto','auto','auto','auto']" />
                            </div>
                        </li>

                        <!-- SLIDE 3 -->
                        <li data-index="rs-2991" data-transition="fade" data-slotamount="7" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="500" data-thumb="" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 3" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img loading="lazy" src="assets/wetalk/slide3-bg.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-3" id="bottom-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['625','600','600','600']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-20','-20','-20','-20']"
                                data-type="image" data-responsive_offset="off" data-basealign="slide"
                                data-frames='[
                                    {"delay":100,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                style="z-index: 7; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/slide3-bottom.png" alt=""
                                        data-ww="['3400px','2900px','2900px','2900px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="bottom-layer-2"
                                data-x="['center','center','center','center']"
                                data-hoffset="['-550','-500','-500','-500']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-20','-20','-20','-20']"
                                data-type="image" data-responsive_offset="off" data-basealign="slide"
                                data-frames='[
                                    {"delay":100,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/slide3-bottom.png" alt=""
                                        data-ww="['3500px','3000px','3000px','3000px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="yuan-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-80']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":650,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-rotate" data-easing="Linear.easeNone" data-speed="50"
                                    data-startdeg="0" data-enddeg="-360" data-origin="50% 50%">
                                    <img loading="lazy" src="assets/wetalk/yuan.png" alt=""
                                        data-ww="['824px','824px','724px','724px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="yinyang-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-80','-80','-80','-80']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":650,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-rotate" data-easing="Linear.easeNone" data-speed="50"
                                    data-startdeg="0" data-enddeg="360" data-origin="50% 50%">
                                    <img loading="lazy" src="assets/wetalk/yinyang.png" alt=""
                                        data-ww="['260px','260px','200px','160px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-6" id="guang2-layer"
                                data-x="['center','center','center','center']" data-hoffset="['420','300','200','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-160','-160','-240','-290']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":2150,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power1.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/guang2.png" alt=""
                                    data-ww="['1000px','1000px','800px','800px']"
                                    data-hh="['auto','auto','auto','auto']" data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-6" id="guang-layer"
                                data-x="['center','center','center','center']" data-hoffset="['-730','-600','-500','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','20','40','60']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":2150,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power1.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/guang.png" alt=""
                                    data-ww="['1000px','1000px','800px','800px']"
                                    data-hh="['auto','auto','auto','auto']" data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="bird1-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['-350','-300','-250','-150']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-150','-150','-150','-250']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":1250,"speed":800,"frame":"0","from":"x:[-100%];y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power1.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/niao1.png" alt=""
                                    data-ww="['726px','726px','526px','526px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-4" id="fish-layer"
                                data-x="['center','center','center','center']" data-hoffset="['300','250','200','100']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['30','30','30','30']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1250,"speed":800,"frame":"0","from":"x:[100%];y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power1.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/yu.png" alt=""
                                    data-ww="['440px','440px','340px','340px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme" id="centertext-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-90','-157','-157','-190']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":100,"speed":1000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/centertext-3.png" alt=""
                                        data-ww="['624px','624px','524px','424px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="slide-3-text"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['120','100','100','180']"
                                data-lineheight="['37','37','37','30']" data-width="['650','492','500','450']"
                                data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                                data-responsive_offset="on"
                                data-frames='[{"delay":2850,"speed":700,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 10; font-family:'Times New Roman', 'Times', 'serif'; color: #f0f0f0; font-size: 22px; white-space: normal;text-transform:left;">
                                With an excellent team of teachers, we aim to cultivate capable and
                                virtuous students by centering on Chinese culture and moral education.
                                We also value family education and traditional education and will
                                endeavor to advance their development.
                            </div>

                            <div class="tp-caption tp-resizeme" id="openAllusionS3"
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['-50','30','30','30']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-startslide="0"
                                data-endslide="9" data-type="image" data-basealign="slide" data-responsive_offset="off"
                                data-responsive="off" data-frames='[{"delay":0,"speed":1,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"none"},
                                          {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"none"}]'
                                style="z-index: 26; text-transform: left; border-width: 0px; cursor: pointer;">
                                <img loading="lazy" src="assets/wetalk/button-allusion.png" alt="Open Allusion"
                                    data-ww="['120px','171px','171px','120px']"
                                    data-hh="['auto','auto','auto','auto']" />
                            </div>
                        </li>

                        <!-- SLIDE 4 -->
                        <li data-index="rs-2992" data-transition="fade" data-slotamount="7" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="500" data-thumb="" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 4" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img loading="lazy" src="assets/wetalk/slide3-bg.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="spinbg-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','-50','-80']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":100,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-rotate" data-easing="Linear.easeNone" data-speed="50"
                                    data-startdeg="0" data-enddeg="-360" data-origin="50% 50%">
                                    <img loading="lazy" src="assets/wetalk/roman-loop.png" alt=""
                                        data-ww="['2100px','2100px','1900px','1900px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-6" id="dian1-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/dian1.png" alt=""
                                    data-ww="['1476px','1176px','1076px','676px']"
                                    data-hh="['auto','auto','auto','auto']" data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme" id="slide-4-text"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['140','100','100','180']"
                                data-lineheight="['37','37','37','30']" data-width="['650','492','500','450']"
                                data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1850,"speed":700,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 10; font-family:'Times New Roman', 'Times', 'serif'; color: #f0f0f0; font-size: 22px; white-space: normal;text-transform:left;">
                                We offer multiple courses including Chinese culture learning, Chinese,
                                English, French, German, Spanish, Greek, Japanese, Korean, Filipino,
                                Malay, and Indonesian. Select and buy a course here.
                            </div>

                            <div class="tp-caption tp-resizeme" id="centertext-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-90','-157','-157','-190']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":100,"speed":1000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/centertext-4.png" alt=""
                                        data-ww="['624px','624px','524px','424px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-3" id="bottom-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['100','100','100','100']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-20','-20','-20','-20']"
                                data-type="image" data-responsive_offset="off" data-basealign="slide"
                                data-frames='[
                                    {"delay":100,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                style="z-index: 7; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/slide3-bottom.png" alt=""
                                        data-ww="['3400px','3400px','3100px','3100px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="openAllusionS4"
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['-50','30','30','30']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-startslide="0"
                                data-endslide="9" data-type="image" data-basealign="slide" data-responsive_offset="off"
                                data-responsive="off" data-frames='[{"delay":0,"speed":1,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"none"},
                                          {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"none"}]'
                                style="z-index: 26; text-transform: left; border-width: 0px; cursor: pointer;">
                                <img loading="lazy" src="assets/wetalk/button-allusion.png" alt="Open Allusion"
                                    data-ww="['120px','171px','171px','120px']"
                                    data-hh="['auto','auto','auto','auto']" />
                            </div>
                        </li>

                        <!-- SLIDE 5 -->
                        <li data-index="rs-2993" data-transition="fade" data-slotamount="7" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="500" data-thumb="" data-rotate="0" data-saveperformance="off"
                            data-title="Slide 5" data-param1="" data-param2="" data-param3="" data-param4=""
                            data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
                            data-description="">
                            <!-- MAIN IMAGE -->
                            <img loading="lazy" src="assets/wetalk/slide5-bg.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <div class="tp-caption tp-resizeme rs-parallaxlevel-3" id="dian2-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-200','0','-50','-100']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":850,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power1.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/dian2.png" alt=""
                                    data-ww="['1800px','1500px','1300px','1100px']"
                                    data-hh="['auto','auto','auto','auto']" data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-1" id="centertext-layer-5"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-90','-40','-40','-50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":4650,"speed":1000,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power2.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/centertext-4.png" alt=""
                                        data-ww="['524px','524px','424px','324px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="book-layer-1"
                                data-x="['center','center','center','center']" data-hoffset="['10','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-60','0','0','-50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":650,"speed":800,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power1.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/shu01.png" alt=""
                                        data-ww="['660px','660px','560px','400px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="book-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['10','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-60','0','0','-50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1450,"speed":800,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"0","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/shu02.png" alt=""
                                        data-ww="['660px','660px','560px','400px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="book-layer-3"
                                data-x="['center','center','center','center']" data-hoffset="['10','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-60','0','0','-50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":2250,"speed":800,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"0","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/shu03.png" alt=""
                                        data-ww="['660px','660px','560px','400px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="book-layer-4"
                                data-x="['center','center','center','center']" data-hoffset="['10','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-60','0','0','-50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":3050,"speed":800,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"0","speed":300,"frame":"999","to":"opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/shu04.png" alt=""
                                        data-ww="['660px','660px','560px','400px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-7" id="book-layer-5"
                                data-x="['center','center','center','center']" data-hoffset="['10','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['-60','0','0','-50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":650,"speed":800,"frame":"0","from":"opacity:0;","to":"o:0;","ease":"power3.inOut"},{"delay":2400,"speed":800,"frame":"1","from":"opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img loading="lazy" src="assets/wetalk/shu05.png" alt=""
                                        data-ww="['660px','660px','560px','400px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-5" id="bird2-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['-325','-300','-220','-200']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['100','100','200','50']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":4650,"speed":800,"frame":"0","from":"x:[-100%];y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power1.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/niao2.png" alt=""
                                    data-ww="['586px','586px','386px','386px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-5" id="bird3-layer"
                                data-x="['center','center','center','center']" data-hoffset="['300','300','200','200']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-200','-200','-210','-180']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":4650,"speed":800,"frame":"0","from":"x:[100%];y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power1.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/niao3.png" alt=""
                                    data-ww="['554px','554px','354px','354px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-8" id="xiaoniao-layer-1"
                                data-x="['center','center','center','center']"
                                data-hoffset="['-360','-310','-240','-200']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-315','-340','-310','-300']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[{"delay":4650,"speed":800,"frame":"0","from":"x:[-100%];y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power1.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/xiaoniao1.png" alt=""
                                    data-ww="['102px','102px','102px','72px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme rs-parallaxlevel-8" id="xiaoniao-layer-2"
                                data-x="['center','center','center','center']" data-hoffset="['400','350','240','200']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['210','280','250','120']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="image"
                                data-responsive_offset="on"
                                data-frames='[{"delay":4650,"speed":800,"frame":"0","from":"x:[100%];y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power1.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <img loading="lazy" src="assets/wetalk/xiaoniao2.png" alt=""
                                    data-ww="['231px','231px','231px','131px']" data-hh="['auto','auto','auto','auto']"
                                    data-no-retina>
                            </div>

                            <div class="tp-caption tp-resizeme" id="openAllusionS5"
                                data-x="['left','left','left','left']" data-hoffset="['0','0','0','0']"
                                data-y="['center','center','center','center']" data-voffset="['-50','30','30','30']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-startslide="0"
                                data-endslide="9" data-type="image" data-basealign="slide" data-responsive_offset="off"
                                data-responsive="off" data-frames='[{"delay":0,"speed":1,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"none"},
                                          {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"none"}]'
                                style="z-index: 26; text-transform: left; border-width: 0px; cursor: pointer;">
                                <img loading="lazy" src="assets/wetalk/button-allusion.png" alt="Open Allusion"
                                    data-ww="['120px','171px','171px','120px']"
                                    data-hh="['auto','auto','auto','auto']" />
                            </div>
                        </li>
                    </ul>

                    <div class="tp-static-layers">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-static-layer tp-shape tp-shapewrapper" id="slide-3132-layer-1"
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['0','0','0','0']" data-width="full"
                            data-height="50" data-whitespace="nowrap" data-startslide="0" data-endslide="9"
                            data-type="shape" data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                            data-frames='[
                                {"from":"y:top;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 5;background-color:rgba(255, 255, 255, 0);border-color:rgba(0, 0, 0, 0.50);border-width:0px;">
                        </div>

                        <?php include "navbar.php" ?>

                        <div class="tp-caption rev-burger revb-whitenoborder tp-static-layer" id="burger-menu"
                            data-x="['right','right','right','right']" data-hoffset="['14','14','14','14']"
                            data-y="['top','top','top','top']" data-voffset="['10','10','10','10']" data-width="60"
                            data-height="60" data-whitespace="nowrap" data-type="button"
                            data-visibility="['off','on','on','on']" data-basealign="slide" d
                            ata-responsive_offset="off" data-responsive="off" data-startslide="0" data-endslide="9"
                            data-frames='[
                                {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power1.easeInOut"},
                                {"delay":"wait","speed":300,"ease":"nothing"}]'
                            data-textAlign="['left','left','left','left']" data-paddingtop="[22,22,22,22]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[14,14,14,14]" style="z-index: 54; min-width: 60px; max-width: 60px; 
                            max-width: 60px; max-width: 60px; white-space: nowrap; font-size: px; 
                            line-height: px; font-weight: 100;text-transform:left;
                            border-color:rgba(68, 68, 68, 1.00);
                            border-width:0px;border-radius:50% 50% 50% 50%;
                            box-sizing:border-box;-moz-box-sizing:border-box;
                            -webkit-box-sizing:border-box;cursor:pointer;">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div><!-- END REVOLUTION SLIDER -->
            <div id="panelWrapper" class="responsive-panel-wrapper"
                style="position: absolute; top: 0; left: -600px; width: 600px; height: 100vh; display: flex; transition: left 0.4s ease; z-index: 1000;">
                <!-- Allusion Panel -->
                <div id="allusionPanel"
                    style="width: 90%; height: 100%; background-color: rgba(0, 0, 0, 0.9); color: white; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                    <!-- Panel Content -->
                    <div class="panel-content"
                        style="height: 100%; display: flex; flex-direction: column; justify-content: center; padding: 20px;">

                        <!-- First Image (Align left) -->
                        <div style="display: flex; justify-content: flex-start; margin-bottom: 10px;">
                            <img src="assets/wetalk/slide-1-allusion.png" style="width: 40%;" />
                        </div>

                        <!-- Text -->
                        <p id="allusion-text-1" style="text-align: left; color: white;">
                            During the period of the Three Sovereigns and Five Emperors in ancient China,
                            people became destitute and homeless due to frequent floods. Gun and his son Yu
                            were appointed by Yao and Shun emperors to tame the flooding. Yu drew lessons
                            from his father's failure. Instead of directly damming the rivers' flow, Yu made
                            a system of irrigation canals that relieved floodwater into fields and dredged
                            the riverbeds. Respecting nature is the correct and reasonable application of
                            the law of nature.
                            After 13 years, he finally controlled the flooding. Later, temples and halls
                            were built to memorize his great deeds and he was worshiped as the God of Yu.
                            Nature has infinite power. Man as part of nature should live in harmony with
                            nature, rather than dominate it. This element highlights the relationship
                            between man and nature. "We are all ones sheltered by the same sky and we all
                            live on the same planet Earth."
                        </p>

                        <!-- Second Image (Align right) -->
                        <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
                            <img src="assets/wetalk/stroy-logo.png" style="width: 30%;" />
                        </div>
                    </div>
                </div>

                <!-- Close Button -->
                <div id="closePanelBtn">
                    <img src="assets/wetalk/close-btn.png" alt="Close" style="width: 130%;" />
                    <span
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 20px; color: white;">&#10006;</span>

                </div>
            </div>

            <div id="panelWrapper2" class="responsive-panel-wrapper"
                style="position: absolute; top: 0; left: -600px; width: 600px; height: 100vh; display: flex; transition: left 0.4s ease; z-index: 1000;">
                <!-- Allusion Panel -->
                <div id="allusionPanelS2"
                    style="width: 90%; height: 100%; background-color: rgba(0, 0, 0, 0.9); color: white; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                    <!-- Panel Content -->
                    <div class="panel-content"
                        style="height: 100%; display: flex; flex-direction: column; justify-content: center; padding: 20px;">

                        <!-- Second Image (Align left) -->
                        <div style="display: flex; justify-content: flex-start; margin-bottom: 10px;">
                            <img src="assets/wetalk/slide-2-allusion.png" style="width: 30%;" />
                        </div>

                        <!-- Text -->
                        <p id="allusion-text-2" style=" text-align: left; color: white;">
                            Fist-and-palm salute is a modest way to show respect for others.
                            Usually, the right hand holds the fist inside and the left hand clenches the
                            fist outside. Both of them are closed in front of the chest. As Zuo Zhuan (The
                            Zuo Tradition) 18th Year of Duke Wen of Lu records, "The Rites of Zhou was
                            edited by the Duke of Zhou." The culture of rites and music of the Zhou Dynasty
                            is mainly recorded in three ancient ritual classics, namely the Rites of Zhou,
                            the Book of Etiquette and Rites, and the Bopk of Rites.
                            Confucius said, 'Do not do unto others what you do not want others do unto you'
                            This is the foundation and premise for the Great Unity. To achieve harmony with
                            nature, we must first live in harmony with others. Only by seeking harmony in
                            diversity and on
                            through mutual respect can we achieve coexistence and sustainable development.
                        </p>

                        <!-- Second Image (Align right) -->
                        <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
                            <img src="assets/wetalk/stroy-logo.png" style="width: 30%;" />
                        </div>
                    </div>
                </div>


                <!-- Close Button -->
                <div id="closePanelBtn2">
                    <img src="assets/wetalk/close-btn.png" alt="Close" style="width: 130%;" />
                    <span
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 20px; color: white;">&#10006;</span>

                </div>
            </div>

            <div id="panelWrapper3" class="responsive-panel-wrapper"
                style="position: absolute; top: 0; left: -600px; width: 600px; height: 100vh; display: flex; transition: left 0.4s ease; z-index: 1000;">
                <!-- Allusion Panel -->
                <div id="allusionPanel3"
                    style="width: 90%; height: 100%; background-color: rgba(0, 0, 0, 0.9); color: white; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                    <!-- Panel Content -->
                    <div class="panel-content"
                        style="height: 100%; display: flex; flex-direction: column; justify-content: center; padding: 20px;">

                        <!-- Third Image (Align left) -->
                        <div style="display: flex; justify-content: flex-start; margin-bottom: 10px;">
                            <img src="assets/wetalk/slide-3-allusion.png" style="width: 30%;" />
                        </div>

                        <!-- Text -->
                        <p id="allusion-text-3" style=" text-align: left; color: white;">
                            It was earliest recorded in the Free and Easy Wandering, the first chapter of
                            the Zhuangzi. "In the Northern Ocean there is a fish, the name of which is Kun I
                            do not know how many li in size. It changes into a bird with the name of Peng,
                            the back of which is (also)—1 do not know how many li in extent.
                            When this bird rouses itself and flies, its wings are like clouds all around the
                            sky. When the sea is moved (so as to bear it along), it prepares to remove to
                            the Southern Ocean. The Southern Ocean is the Pool of Heaven."
                            The Northern Ocean stands for desire and motivation, while the Southern Ocean
                            represents wisdom and the Way of Heaven. Kun Peng flying from the Northern Ocean
                            to the Southern Ocean symbolizes the process that wisdom is on top of desire and
                            pushes people to pursue the Way of Heaven.
                            To put our family affairs in order, govern the country and bring peace to the
                            world, we must first cultivate ourselves. Only after we can get along with
                            ourselves, can we know how to get along with others and nature.
                        </p>

                        <!-- Second Image (Align right) -->
                        <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
                            <img src="assets/wetalk/stroy-logo.png" style="width: 30%;" />
                        </div>
                    </div>
                </div>

                <!-- Close Button -->
                <div id="closePanelBtn3">
                    <img src="assets/wetalk/close-btn.png" alt="Close" style="width: 130%;" />
                    <span
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 20px; color: white;">&#10006;</span>

                </div>
            </div>

            <div id="panelWrapper4" class="responsive-panel-wrapper"
                style="position: absolute; top: 0; left: -600px; width: 600px; height: 100vh; display: flex; transition: left 0.4s ease; z-index: 1000;">
                <!-- Allusion Panel -->
                <div id="allusionPanel4"
                    style="width: 90%; height: 100%; background-color: rgba(0, 0, 0, 0.9); color: white; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                    <!-- Panel Content -->
                    <div class="panel-content"
                        style="height: 100%; display: flex; flex-direction: column; justify-content: center; padding: 20px;">

                        <!-- Fourth Image (Align left) -->
                        <div style="display: flex; justify-content: flex-start; margin-bottom: 10px;">
                            <img src="assets/wetalk/slide-4-allusion.png" style="width: 30%;" />
                        </div>

                        <!-- Text -->
                        <p id="allusion-text-4" style=" text-align: left; color: white;">
                            As a saying goes, "Past experience, if not forgotten, is a guide for the
                            future." However, the premise is that we can get something new from
                            • past experience. We gain new knowledge often by reviewing old knowledge.
                            Alongside historical development and civilization advancement, significant
                            knowledge and experiences have been deposited to deal with the relationship
                            between man, society, and nature. To explore the future, it is the safest and
                            wisest way to learn from past experiences and acquire the new from the old.
                        </p>

                        <!-- Second Image (Align right) -->
                        <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
                            <img src="assets/wetalk/stroy-logo.png" style="width: 30%;" />
                        </div>
                    </div>
                </div>

                <!-- Close Button -->
                <div id="closePanelBtn4">
                    <img src="assets/wetalk/close-btn.png" alt="Close" style="width: 130%;" />
                    <span
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 20px; color: white;">&#10006;</span>

                </div>
            </div>

            <div id="panelWrapper5" class="responsive-panel-wrapper"
                style="position: absolute; top: 0; left: -600px; width: 600px; height: 100vh; display: flex; transition: left 0.4s ease; z-index: 1000;">
                <!-- Allusion Panel -->
                <div id="allusionPanel5"
                    style="width: 90%; height: 100%; background-color: rgba(0, 0, 0, 0.9); color: white; padding: 20px; display: flex; flex-direction: column; justify-content: space-between;">
                    <!-- Panel Content -->
                    <div class="panel-content"
                        style="height: 100%; display: flex; flex-direction: column; justify-content: center; padding: 20px;">

                        <!-- Fifth Image (Align left) -->
                        <div style="display: flex; justify-content: flex-start; margin-bottom: 10px;">
                            <img src="assets/wetalk/slide-5-allusion.png" style="width: 26%;" />
                        </div>

                        <!-- Text -->
                        <p id="allusion-text-5" style=" text-align: left; color: white;">
                            Learning is a lifelong cause. We live and learn. It is the most pleasant thing
                            to open the door to various disciplines through Chinese culture learning. We can
                            have a happy time in lyre playing, chess, calligraphy, and painting as well as
                            in beautiful essays and poems. Learning is joyful. Why not do it? This module
                            encourages learning. Learning prompts individuals, families, and society to
                            improve and develop.
                            When everyone is well-educated and polite, the world must be harmonious.
                        </p>

                        <!-- Second Image (Align right) -->
                        <div style="display: flex; justify-content: flex-end; margin-top: 10px;">
                            <img src="assets/wetalk/stroy-logo.png" style="width: 30%;" />
                        </div>
                    </div>
                </div>

                <!-- Close Button -->
                <div id="closePanelBtn5">
                    <img src="assets/wetalk/close-btn.png" alt="Close" style="width: 130%;" />
                    <span
                        style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 20px; color: white;">&#10006;</span>

                </div>
            </div>
            <div id="hamburgerPanelWrapper" class="responsive-panel-wrapper-right">
                <div id="hamburgerPanel" style="width: 90%; height: 100%; color: white; padding: 20px">
                    <h2></h2>
                    <ul class="menu">
                        <li><a id="hm-nav-home" href="main-page.php">Home</a></li>

                        <li class="dropdown">
                            <button id="hm-nav-wetalk-courses" class="dropdown-btn">
                                WeTalk Courses <i class="material-icons">arrow_drop_down</i>
                            </button>
                            <ul class="submenu">
                                <li class="hamburger-dropdown-item">
                                    <a id="hm-nav-intelligent-database" href="https://wetalk.com/short-video/"
                                        style="margin-left:-50px;">Intelligent Database</a>
                                </li>
                                <li class="hamburger-dropdown-item">
                                    <a id="hm-nav-recording-course" href="https://wetalk.com/recorded-courses/"
                                        style="margin-left:-50px;">Recording Course</a>
                                </li>
                                <li class="dropdown">
                                    <button id="hm-nav-course" class="dropdown-btn">
                                        Course <i class="material-icons">arrow_drop_down</i>
                                    </button>
                                    <ul class="submenu">
                                        <li class="hamburger-dropdown-item">
                                            <a id="hm-nav-chinese" href="https://wetalk.com/chinese/"
                                                style="margin-left:-50px;">Linguistic</a>
                                        </li>
                                        <li class="hamburger-dropdown-item">
                                            <a id="hm-nav-sinology" href="https://wetalk.com/sinology/"
                                                style="margin-left:-50px;">Chinese Culture
                                                Learning</a>
                                        </li>
                                        <li class="hamburger-dropdown-item">
                                            <a id="hm-nav-science" href="https://wetalk.com/science/"
                                                style="margin-left:-50px;">Science</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="hamburger-dropdown-item"><a id="hm-nav-linguistics"
                                href="https://wetalk.com/linguistic/">Linguistic</a></li>
                        <li class="hamburger-dropdown-item"><a id="hm-nav-teachers"
                                href="https://wetalk.com/teacher/">Teacher</a></li>
                        <li class="hamburger-dropdown-item"><a id="hm-nav-news" href="https://wetalk.com/news/">News</a>
                        </li>
                        <li class="hamburger-dropdown-item"><a id="hm-nav-study-abroad"
                                href="https://wetalk.com/study-abroad/">Study Abroad</a></li>
                        <li class="hamburger-dropdown-item"><a id="hm-nav-educ-tour"
                                href="https://wetalk.com/educational-tour/">Educational Tours</a></li>

                        <li class="dropdown">
                            <button id="hm-nav-company" class="dropdown-btn">
                                Company <i class="material-icons">arrow_drop_down</i>
                            </button>
                            <ul class="submenu">
                                <li class="hamburger-dropdown-item"><a id="hm-nav-charity"
                                        href="https://wetalk.com/charity/" style="margin-left:-50px;">Charity</a></li>
                                <li class="hamburger-dropdown-item"><a id="hm-nav-about-us"
                                        href="https://wetalk.com/about-us/" style="margin-left:-50px;">About Us</a></li>
                                <li class="hamburger-dropdown-item"><a id="hm-nav-campus"
                                        href="https://wetalk.com/campus-philippines/"
                                        style="margin-left:-50px;">Campus</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div style="text-align: center; margin-top: 20px;">
                        <img src="../resources/img/stroy-logo.png" alt="Bottom Image"
                            style="max-width: 100%; height:auto;">
                    </div>
                </div>
            </div>


            <script type="text/javascript">
                var revapi1064;
                $(document).ready(function () {
                    if ($("#rev_slider_1064_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_1064_1");
                    } else {
                        revapi1064 = $("#rev_slider_1064_1").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "revolution/js/",
                            sliderLayout: "fullscreen",
                            dottedOverlay: "none",
                            delay: 9000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "on",
                                mouseScrollReverse: "default",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "vertical",
                                    drag_block_vertical: false
                                }
                            },
                            responsiveLevels: [1240, 1025, 778, 481],
                            visibilityLevels: [1240, 1025, 778, 481],
                            gridwidth: [1240, 1025, 778, 481],
                            gridheight: [868, 768, 960, 720],
                            lazyType: "none",
                            parallax: {
                                type: "mouse",
                                origo: "slidercenter",
                                speed: 400,
                                levels: [1, 2, 3, 4, 5, 10, -1, -2, -3, -4, -5, -10, 49, 50, 51, 55],
                                disable_onmobile: 'on',
                            },
                            shadow: 0,
                            spinner: "off",
                            stopLoop: "on",
                            stopAfterLoops: 0,
                            stopAtSlide: 1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: ".header",
                            fullScreenOffset: "",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }

                    const panelWrapper = document.getElementById("panelWrapper");
                    const panelWrapper2 = document.getElementById("panelWrapper2");
                    const panelWrapper3 = document.getElementById("panelWrapper3");
                    const panelWrapper4 = document.getElementById("panelWrapper4");
                    const panelWrapper5 = document.getElementById("panelWrapper5");
                    const closePanelBtn = document.getElementById("closePanelBtn");
                    const closePanelBtn2 = document.getElementById("closePanelBtn2");
                    const closePanelBtn3 = document.getElementById("closePanelBtn3");
                    const closePanelBtn4 = document.getElementById("closePanelBtn4");
                    const closePanelBtn5 = document.getElementById("closePanelBtn5");
                    const openBtn = document.getElementById("openAllusionbbtn");
                    const openBtn2 = document.getElementById("openAllusionS2");
                    const openBtn3 = document.getElementById("openAllusionS3");
                    const openBtn4 = document.getElementById("openAllusionS4");
                    const openBtn5 = document.getElementById("openAllusionS5");
                    function setupPanelAnimation(openBtn, closeBtn, panelWrapper) {
                        // Initialize panel hidden state
                        panelWrapper.style.left = "-600px";
                        panelWrapper.style.opacity = "0";
                        panelWrapper.style.pointerEvents = "none";

                        // Open panel with animation
                        openBtn.addEventListener("click", () => {
                            panelWrapper.style.display = "flex";
                            requestAnimationFrame(() => {
                                panelWrapper.style.left = "0";
                                panelWrapper.style.opacity = "1";
                                panelWrapper.style.pointerEvents = "auto";
                                closeBtn.style.opacity = "1";
                            });
                        });

                        // Close panel with animation
                        closeBtn.addEventListener("click", () => {
                            panelWrapper.style.left = "-600px";
                            closeBtn.style.opacity = "0";

                            setTimeout(() => {
                                panelWrapper.style.display = "none";
                            }, 400); // Match your CSS transition duration
                        });
                        document.addEventListener("click", (event) => {
                            if (!panelWrapper.contains(event.target) && !closeBtn.contains(event.target) && !openBtn.contains(event.target)) {
                                panelWrapper.style.left = "-600px";
                                closeBtn.style.opacity = "0";

                                setTimeout(() => {
                                    panelWrapper.style.display = "none";
                                }, 400); // Match the transition duration
                            }
                        });
                    }
                    const hamburgerBtn = document.getElementById("burger-menu");
                    const hamburgerPanel = document.getElementById("hamburgerPanelWrapper");


                    function setupRightPanelAnimation(openBtn, panelWrapper) {
                        // Initialize hidden state for the hamburger panel
                        panelWrapper.style.transform = "translateX(100%)";
                        panelWrapper.style.opacity = "0";  // Start invisible
                        panelWrapper.style.pointerEvents = "none";  // Disable interactions
                        panelWrapper.style.transition = "transform 0.4s ease, opacity 0.4s ease";  // Smooth transition

                        // Open the hamburger panel
                        openBtn.addEventListener("click", () => {
                            panelWrapper.style.display = "flex"; // Ensure it's displayed
                            requestAnimationFrame(() => {
                                panelWrapper.style.transform = "translateX(0)";
                                panelWrapper.style.opacity = "1"; // Fade in
                                panelWrapper.style.pointerEvents = "auto";  // Enable interactions
                            });
                        });
                        document.addEventListener("click", (event) => {
                            if (!panelWrapper.contains(event.target) && !openBtn.contains(event.target)) {
                                panelWrapper.style.transform = "translateX(100%)"; // Slide back off-screen to the right
                                panelWrapper.style.opacity = "0";  // Fade out

                                setTimeout(() => {
                                    panelWrapper.style.display = "none";  // Ensure it's completely hidden
                                }, 400); // Match the transition duration
                            }
                        });
                    }
                    setupRightPanelAnimation(hamburgerBtn, hamburgerPanel);
                    setupPanelAnimation(openBtn, closePanelBtn, panelWrapper);
                    setupPanelAnimation(openBtn2, closePanelBtn2, panelWrapper2);
                    setupPanelAnimation(openBtn3, closePanelBtn3, panelWrapper3);
                    setupPanelAnimation(openBtn4, closePanelBtn4, panelWrapper4);
                    setupPanelAnimation(openBtn5, closePanelBtn5, panelWrapper5);


                });
            </script>
        </article>
    </section>

    <!-- for passing page data -->
    <div id="page-data" data-page="main-page.php" data-lang="<?php echo $lang ?>"></div>

    <script type="module" src="scripts/translate.js"></script>
    <script type="text/javascript" src="assets/warning.js"></script>
    <script type="text/javascript" src="scripts/hamburger.js"></script>

    <!-- Botpress Script -->
    <script src="https://cdn.botpress.cloud/webchat/v3.2/inject.js" defer></script>
    <script src="https://files.bpcontent.cloud/2025/09/24/08/20250924084540-B5Q8A59C.js" defer></script>
</body>

</html>