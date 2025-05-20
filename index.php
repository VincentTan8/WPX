<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}

if (isset($_SESSION['lang']) and $_SESSION['lang'] == 'CN') {
    $lang = '_cn';
} else {
    //default language
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
    <script type="text/javascript" src="jquery.js"></script>

    <link rel="icon" href="resources/img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="index/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="index/revolution/fonts/font-awesome/css/font-awesome.css">

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="index/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="index/revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="index/revolution/css/navigation.css">

    <link rel="stylesheet" type="text/css" href="index/styles/translate.css">
    <link rel="stylesheet" type="text/css" href="index/styles/scroll.css">
    <link rel="stylesheet" type="text/css" href="index/styles/quote.css">

    <style>
        @font-face {
            font-family: 'Material Icons';
            font-style: normal;
            font-weight: 400;
            src: url(//fonts.gstatic.com/s/materialicons/v41/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format('woff2')
        }

        .material-icons {
            font-family: 'Material Icons';
            font-weight: normal;
            font-style: normal;
            font-size: inherit;
            display: inline-block;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
            vertical-align: top;
            line-height: inherit;
            font-feature-settings: 'liga';
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -moz-osx-font-smoothing: grayscale
        }

        .tp-caption.tp-resizeme #skip-link {
            border: 1px solid black !important;
        }
    </style>

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="index/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="index/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <!-- <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script> -->
</head>

<body>
    <section class="example">
        <article class="content">
            <div id="intro-slider_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias=""
                data-source="gallery" style="background-color:#cff1f9;padding:0px;">
                <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                <div id="intro-slider" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                    <ul>
                        <!-- SLIDE 1 -->
                        <li data-index="rs-2989" data-transition="fade" data-slotamount="7" data-hideafterloop="0"
                            data-hideslideonmobile="off" data-easein="default" data-easeout="default"
                            data-masterspeed="500" data-thumb="" data-rotate="0" data-fstransition="fade"
                            data-fsmasterspeed="500" data-fsslotamount="7" data-saveperformance="off"
                            data-title="Slide 1" data-param1="" data-description="">

                            <div class="tp-caption tp-resizeme" id="sign-off-layer"
                                data-x="['center','center','center','center']" data-hoffset="['490','370','250','150']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['150','150','100','50']"
                                data-type="image" data-responsive_offset="on" data-basealign="slide"
                                data-frames='[
                                    {"delay":350,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                style="z-index: 7; white-space: nowrap;text-transform:left; margin-right: 50px;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="index/assets/opening-sequence/sign-off.png" alt=""
                                        data-ww="['248px','228px','228px','168px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="cloud-0-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['bottom','bottom','bottom','bottom']"
                                data-voffset="['-580','-410','-300','-280']" data-type="image"
                                data-responsive_offset="on" data-basealign="slide"
                                data-frames='[
                                    {"delay":100,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power4.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","ease":"power3.inOut"}]'
                                style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-slideloop" data-easing="Linear.easeNone" data-speed="50"
                                    data-xs="-400" data-ys="0" data-xe="400" data-ye="0">
                                    <img src="index/assets/opening-sequence/cloud-0-scaled-1.webp" alt=""
                                        data-ww="['2773px','2090px','1821px','1516px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="green-wave-1-layer"
                                data-x="['center','center','center','center']"
                                data-hoffset="['-525','-380','-280','-170']"
                                data-y="['bottom','bottom','bottom','bottom']" data-voffset="['20','20','20','-40']"
                                data-type="image" data-responsive_offset="on" data-basealign="slide"
                                data-frames='[
                                    {"delay":350,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' style="z-index: 5; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="3"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="index/assets/opening-sequence/green-wave-1.png" alt=""
                                        data-ww="['783px','683px','633px','583px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="green-wave-2-layer"
                                data-x="['left','left','left','left']" data-hoffset="['-30','-65','-70','-100']"
                                data-y="['top','top','top','top']" data-voffset="['-20','-20','20','-20']"
                                data-type="image" data-responsive_offset="on" data-basealign="slide"
                                data-visibility="['on','on','on','on']"
                                data-frames='[
                                    {"delay":350,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                style="z-index: 3; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="index/assets/opening-sequence/green-wave-2.png" alt=""
                                        data-ww="['830px','753px','653px','830px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>

                            <div class="tp-caption tp-resizeme" id="green-wave-3-layer"
                                data-x="['right','right','right','right']" data-hoffset="[-20','-20','-60','-190']"
                                data-y="['top','top','top','bottom']" data-voffset="['120','80','120','-40']"
                                data-type="image" data-responsive_offset="on" data-basealign="slide"
                                data-frames='[
                                    {"delay":350,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' style="z-index: 4; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="index/assets/opening-sequence/green-wave-3.png" alt=""
                                        data-ww="['516px','476px','406px','380px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>


                            <div class="tp-caption tp-resizeme" id="skip-button-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']" data-voffset="['280','280','280','140']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="button"
                                data-responsive_offset="on"
                                data-frames='[
                                    {"delay":350,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]'
                                data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]" style="z-index: 6; white-space:nowrap;">
                                <a class="" href="index/main-page.php" target="_self" id="skip-link" style="z-index: 12; white-space: nowrap; 
                                        font-size: 15px; line-height: 16px; font-weight: normal;
                                        font-family:'Arial', 'Helvetica', 'sans-serif'; 
                                        color: #0f0f0f; cursor:pointer;
                                        text-decoration: none;
                                        padding-top: 10px; padding-bottom: 10px; padding-right: 40px; padding-left: 40px;
                                        border: solid; border-color: #2b2b2b; border-width: 1px; border-radius: 25px;">
                                    Skip
                                </a>
                            </div>

                            <div class="tp-caption tp-resizeme" id="logo-layer"
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                data-y="['middle','middle','middle','middle']"
                                data-voffset="['-390','-390','-390','-230']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="image" data-responsive_offset="on"
                                data-frames='[
                                    {"delay":350,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                    {"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap;text-transform:left;">
                                <div class="rs-looped rs-pulse" data-easing="Linear.easeNone" data-speed="5"
                                    data-zoomstart="1" data-zoomend="1.05">
                                    <img src="index/assets/opening-sequence/logo-black.png" alt=""
                                        data-ww="['192px','192px','192px','172px']"
                                        data-hh="['auto','auto','auto','auto']" data-no-retina>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <div class="tp-static-layers">
                        <div class="tp-caption tp-static-layer" id="sr-nav-translate"
                            data-x="['right','right','right','right']" data-hoffset="['70','30','30','30']"
                            data-y="['top','top','top','top']" data-voffset="['33',33','33','33']"
                            data-visibility="['on','on','on','on']" data-startslide="0" data-endslide="9"
                            data-type="text" data-basealign="slide" data-responsive_offset="off" data-responsive="off"
                            data-frames='[
                                {"delay":350,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"power3.inOut"},
                                {"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"},
                                {"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(165, 165, 165, 1.00);br:0px 0px 0px 0px;"}]'
                            data-textAlign="['left','left','left','left']"
                            style="z-index: 14; white-space: nowrap; font-size: 22px; line-height: 15px; font-weight: normal; color: #0f0f0f;border-width:0px;cursor:pointer;text-decoration: none;">
                            <i class="material-icons">language</i>
                            <?php include "index/translate-button.php" ?>
                        </div>
                    </div>
                </div>
            </div><!-- END REVOLUTION SLIDER -->

            <div class="scroll-wrapper">
                <div class="scroll-container">
                    <img src="index/assets/opening-sequence/scroll.svg" alt="Left Scroll" class="scroll-handle left" />

                    <div class="paper-wrapper">
                        <a class="play-text" href="index/philosophers.php" id="open-link">
                            Start Now <i class="material-icons" style="font-size: 22px">play_arrow</i>
                        </a>

                    </div>

                    <img src="index/assets/opening-sequence/scroll.svg" alt="Right Scroll"
                        class="scroll-handle right" />
                </div>

            </div>
            <div class="scroll-wrapper">

                <div class="thought-sequence">
                    <div class="quote-block">
                        <h3 class="quote-title" id="hm-quote-title">Quote of the Day</h3>
                        <p class="quote-text" id="hm-quote-text">“Education is the most powerful weapon which you can
                            use to change the
                            world.”</p>
                        <p class="quote-author" id="hm-quote-author">– Nelson Mandela</p>
                    </div>

                    <img src="index/assets/opening-sequence/quote1.svg" alt="Thought 1" class="thought-img img3">
                    <img src="index/assets/opening-sequence/quote2.svg" alt="Thought 2" class="thought-img img2">
                    <img src="index/assets/opening-sequence/quote3.svg" alt="Thought 3" class="thought-img img1">
                </div>


            </div>




            <script type="text/javascript">
                var tpj = jQuery;

                var revapi1064;
                tpj(document).ready(function () {
                    if (tpj("#intro-slider").revolution == undefined) {
                        revslider_showDoubleJqueryError("#intro-slider");
                    } else {
                        revapi1064 = tpj("#intro-slider").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "index/revolution/js/",
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
                            responsiveLevels: [1240, 1024, 778, 481],
                            visibilityLevels: [1240, 1024, 778, 481],
                            gridwidth: [1240, 1024, 778, 481],
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
                });	/*ready*/
            </script>
        </article>
    </section>

    <!-- for passing page data -->
    <div id="page-data" data-page="index.php" data-lang="<?php echo $lang ?>"></div>
    <script type="module" src="index/scripts/scroll.js"></script>
    <script type="module" src="index/scripts/quote.js"></script>
    <script type="module" src="index/scripts/translate.js"></script>
    <script type="text/javascript" src="index/assets/warning.js"></script>
</body>

</html>