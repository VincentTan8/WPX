<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>


<!DOCTYPE html>
<html lang="en">


<?php

$category = '';
$main_menu = 'SHORT VIDEO';


include "../includes/menu_bar_reset.php";
$menu_bar5 = "active";
$_SESSION['active_page'] = 'news';

include "../includes/header.php";
include "../connections/dbname.php";




?>




<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">




    <!-- Bootstrap Modal -->
    <!-- Bootstrap Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-fullscreen" role="document">
            <div class="modal-content modal-content-fullscreen">

                <div class="modal-body modal-body-fullscreen">
                    <!-- Close button -->
                    <button class="close-button" id="closeVideoModal">&times;</button>
                    <!-- Video element -->
                    <video id="videoPlayer" controls>
                        <source id="videoSource" src="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>
    <!--Banner sec Start curve-inside -->
    <section id="home" class="p-0 h-100 " style="background-color: #F0F4FE">

        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container "
            data-alias="megaone-food-slider1" data-source="gallery" style="background:transparent;padding:0px; ">
            <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
            <div id="rev_slider_1_1" class="rev_slider fullscreenbanner " style="display:none; " data-version="5.4.8.1">
                <ul> <!-- SLIDE  -->
                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
                        data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2=""
                        data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8=""
                        data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE  
                    <img src="../resources/img/about-img.jpg" data-bgcolor='#ffffff' style='background:#ffffff' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina> -->
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 
                    <div class="tp-caption   tp-resizeme"
                         id="slide-1-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['3','2','-5','-5']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-110','-126','-112','0']"
                         data-fontsize="['44','40','35','26']"
                         data-lineheight="['70','70','40','40']"
                         data-width="['none','none','280','200']"
                         data-height="['none','150','150','150']"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":339.84375,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 5; white-space: nowrap; font-size: 48px; line-height: 70px; font-weight: 400; color: #444444; letter-spacing: 0px;font-family:Playfair Display;">Mouth Watering </div>-->

                        <!-- LAYER NR. 2 CHINESE CENTER-->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-3" id="slide-1-layer-3"
                            data-x="['right','center','center','center']" data-hoffset="['50','0','40','0']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['-110','-50','-160','-160']"
                            data-fontsize="['80','70','60','36']" data-lineheight="['85','85','60','50']"
                            data-width="['671','670','670','350']" data-height="none" data-whitespace="nowrap"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":829.8828125,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 8; white-space: nowrap; font-size: 90px; line-height: 85px; font-weight: 700; letter-spacing: 0px;font-family:Playfair Display;">
                            <img src="../news/img/banner-3.png" alt="" data-ww="['500px','750px','600px','400px']"
                                data-hh="['300px','500px','450px','300px']" data-no-retina>
                        </div>



                        <!-- LAYER NR. 2 BOX-->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-3"
                            data-x="['left','center','center','center']" data-hoffset="['-228','-200','-80','70']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['300','600','350','200']"
                            data-fontsize="['80','70','60','36']" data-lineheight="['85','85','60','50']"
                            data-width="['671','670','670','670']" data-height="none" data-whitespace="nowrap"
                            data-type="image" data-responsive_offset="on" data-visibility="['on','on','on','on']"
                            data-frames='[{"delay":829.8828125,"speed":100,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 16; white-space: nowrap; font-size: 90px; line-height: 85px; font-weight: 700; letter-spacing: 0px;font-family:Playfair Display;">
                            <img src="../news/img/plain_box<?php echo $lang ?>.png" alt=""
                                data-ww="['1700px','1640px','1300px','1600px']"
                                data-hh="['500px','650px','470px','500px']" data-no-retina>
                        </div>

                        <!-- LAYER NR. 3 
                    <div class="tp-caption   tp-resizeme"
                         id="slide-1-layer-4"
                         data-x="['center','center','center','center']" data-hoffset="['9','1','-10','-10']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['133','25','6','80']"
                         data-fontsize="['15','18','18','14']"
                         data-lineheight="['30','26','26','20']"
                         data-width="['480','570','580','350']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1319.921875,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 7; min-width: 570px; max-width: 570px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: #444444; letter-spacing: 0px;font-family:Roboto;">One stop place for you to lorem ipsum dolor sit amet consectuere asep adispiscing set diam like heaven one stop place for you to lorem ipsum dolor sit amet consectuere adispiscing, </div>-->


                        <!-- LAYER NR. 5 
                    <div class="tp-caption   tp-resizeme "
                         id="slide-1-layer-6"
                         data-x="['left','left','left','left']" data-hoffset="['99','137','5000','5000']"
                         data-y="['top','top','top','top']" data-voffset="['550','538','642','526']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="image"
                         data-responsive_offset="on"
                         data-visibility="['on','off','off','off']"

                         data-frames='[{"delay":719.921875,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 9;">
                        <div class="rs-looped rs-pendulum"  data-easing="" data-startdeg="-5" data-enddeg="5" data-speed="3" data-origin="80% 60%"><img src="../short-video/img/niao1.png" alt="" data-ww="['267px','184px','145px','145px']" data-hh="['270px','186px','146px','146px']" data-no-retina> </div></div> -->

                        <!-- LAYER NR. 6 LEAVES TOP -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['right','left','left','left']" data-hoffset="['0','-140','-200','-60']"
                            data-y="['top','top','top','top']" data-voffset="['100','-600','-250','-250']"
                            data-width="none" data-height="none" data-whitespace="normal"
                            data-visibility="['on','on','on','on']" data-type="image" data-basealign="slide"
                            data-responsive_offset="on"
                            data-frames='[{"delay":359.9609375,"speed":3500,"frame":"0","from":"x:620px;z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 10;"><img src="../news/img/banner-4.png" alt=""
                                data-ww="['500px','1200px','664px','500px']"
                                data-hh="['400px','1400px','751px','651px']" data-no-retina> </div>



                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['right','left','left','left']" data-hoffset="['0','-140','-200','-60']"
                            data-y="['top','top','top','top']" data-voffset="['200','-600','-250','-250']"
                            data-width="none" data-height="none" data-whitespace="normal"
                            data-visibility="['on','on','on','on']" data-type="image" data-basealign="slideup"
                            data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":3000,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 2;">
                            <img id="animatedImage" src="../news/img/banner-1.png" alt=""
                                data-ww="['800px','1200px','664px','500px']"
                                data-hh="['800px','1400px','751px','651px']" data-no-retina>
                        </div>



                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['right','left','left','left']" data-hoffset="['600','-140','-200','-60']"
                            data-y="['top','top','top','top']" data-voffset="['300','-600','-250','-250']"
                            data-width="none" data-height="none" data-whitespace="normal"
                            data-visibility="['on','on','on','on']" data-type="image" data-basealign="slideup"
                            data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":3000,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 1;">
                            <img id="animatedImage" src="../news/img/banner-2.png" alt=""
                                data-ww="['800px','1200px','664px','500px']"
                                data-hh="['700px','1400px','751px','651px']" data-no-retina>
                        </div>



                        <!-- LAYER NR. 7 
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-0"
                         id="slide-1-layer-10"
                         data-x="['left','left','left','left']" data-hoffset="['190','222','1026','1026']"
                         data-y="['top','top','top','top']" data-voffset="['320','159','168','168']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="normal"
                         data-visibility="['on','on','off','off']"

                         data-type="image"
                         data-responsive_offset="on"

                         data-frames='[{"delay":229.8828125,"speed":1500,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 11;">
                        <div class="rs-looped rs-pendulum" data-easing="" data-startdeg="-10" data-enddeg="5" data-speed="4" data-origin="80% 50%"><img src="../resources/img/slider-ele2.png" alt="" data-ww="['127px','114px','114px','114px']" data-hh="['110px','99px','99px','99px']" data-no-retina> </div></div>-->

                        <!-- LAYER NR. 8
                    <div class="tp-caption   tp-resizeme"
                         id="slide-1-layer-11"
                         data-x="['right','right','right','right']" data-hoffset="['-20','146','5000','-270']"
                         data-y="['top','top','top','top']" data-voffset="['-16','-81','-11','14']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="image"
                         data-responsive_offset="off"

                         data-frames='[{"delay":150,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 12;"><img src="../resources/img/slider-ele2.png" alt="" data-ww="['167px','169px','132px','132px']" data-hh="['130px','133px','105px','105px']" data-no-retina> </div> -->

                        <!-- LAYER NR. 9
                    <div class="tp-caption   tp-resizeme"
                         id="slide-1-layer-12"
                         data-x="['left','center','left','left']" data-hoffset="['1075','200','840','840']"
                         data-y="['top','middle','top','top']" data-voffset="['1','-400','24','24']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="normal"
                         data-visibility="['on','on','off','off']"

                         data-type="image"
                         data-responsive_offset="on"

                         data-frames='[{"delay":69.921875,"speed":1500,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 13;"><img src="../resources/img/slider-ele2.png" alt="" data-ww="['90px','105px','105px','105px']" data-hh="['85px','103px','103px','103px']" data-no-retina> </div>  -->

                        <!-- LAYER NR. 10 
                    <div class="tp-caption   tp-resizeme rs-parallaxlevel-0"
                         id="slide-1-layer-13"
                         data-x="['left','center','left','left']" data-hoffset="['1025','330','396','713']"
                         data-y="['top','top','top','top']" data-voffset="['210','130','78','176']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="normal"
                         data-visibility="['on','on','off','off']"

                         data-type="image"
                         data-responsive_offset="on"

                         data-frames='[{"delay":50,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 14;">
                        <div class="rs-looped rs-pendulum"  data-easing="easeInOutQuart" data-startdeg="-5" data-enddeg="5" data-speed="5" data-origin="80% 50%"><img src="../resources/img/slider-ele5.png" alt="" data-ww="['220px','164px','164px','164px']" data-hh="['220px','169px','169px','169px']" data-no-retina> </div></div>-->

                        <!-- LAYER NR. 11 LEAVES 2 BOTTOM-->
                        <!--    <div class="tp-caption   tp-resizeme rs-parallaxlevel-3"
                         id="slide-1-layer-15"
                         data-x="['right','right','right','right']" data-hoffset="['-150','-400','-250','-250']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['284','580','500','500']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="normal"
                         data-visibility="['off','on','on','on']"

                         data-type="image"
                         data-basealign="slide"
                         data-responsive_offset="on"

                         data-frames='[{"delay":9.9609375,"speed":1500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 15;"><img src="../resources/img/intelligent/banner2_flip.png" alt="" data-ww="['600px','800px','600px','500px']" data-hh="['600px','800px','600px','500px']" data-no-retina> </div> -->




                        <!-- LAYER NR. 4 -->
                        <!--  <div class="tp-caption tp-resizeme "
                         id="slide-1-layer-5"
                         data-x="['center','center','center','center']" data-hoffset="['2','2','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','201','50','-10']"
                         data-fontsize="['17','20','18','13']"
                         data-width="['auto','auto','auto','auto']"
                         data-responsive_offset="on"
                           data-visibility="['off','off','off','off']"

                         data-frames='[{"delay":1759.9609375,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 10; max-width: 960px; font-family:Playfair Display; font-weight: 600"><a class="btn btn-green btn-large rev-slider btn-rounded scroll" href="#food"><span style="margin-left: -10px;"  >Learn More</span></a> </div>-->

                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

    </section>




    <!--Delicious Food-->
    <section id="food" style="margin-top: -400px;">
        <div class="container  ">
            <!--<div class="row position-relative"> -->
            <!--  <img src="../short-video/img/niao1_trans.png" class="food-img-before wow rotateInDownLeft" data-wow-delay="300ms" alt="image"> 
            <img src="../short-video/img/niao1_trans.png" style="margin-top: -380px;  " class="food-img-after wow rotateInDownRight" data-wow-delay="300ms"  alt="image">-->
            <!--  <div class="col-lg-12 text-center mb-50">
                <div class="zic-img">
                    <div class="img-zic">
                        <img src="../resources/img/ziczac2.png" alt="image">
                    </div>
                    <h5 class="response my-3 mb-0"></h5>
                    <h2 class="text-capitalize  bg-dark-grey">Short Video</h2>  
                </div>
            </div>
        </div>-->


            <?php
            $option1 = 'Company News';
            $option2 = 'Chinese culture';
            $option3 = 'Scientific knowledge';
            $option4 = 'Charity';
            $option5 = 'Enlightenment of Wisdom';

            if ($lang == '_cn') {
                $option1 = '公司新闻';
                $option2 = '中国文化';
                $option3 = '科学知识';
                $option4 = '慈善';
                $option5 = '智慧的启迪';


            }


            ?>

            <div class="row justify-content-center">
                <div class="tabs" style="text-align: center;">
                    <button class="tablinks " onclick="openTab(event, 'tab1')"><?php echo $option1 ?></button>
                    <button class="tablinks" onclick="openTab(event, 'tab2')"><?php echo $option2 ?></button>
                    <button class="tablinks" onclick="openTab(event, 'tab3')"><?php echo $option3 ?></button>
                    <button class="tablinks" onclick="openTab(event, 'tab5')"><?php echo $option4 ?></button>
                    <button class="tablinks" onclick="openTab(event, 'tab6')"><?php echo $option5 ?></button>

                    <button id="loadbtn" style="visibility: hidden; position:absolute" class="tablinks"
                        onclick="openTab(event, 'tab4')">All</button>
                </div>




                <div class="tab-container">

                    <div id="tab1" class="tabcontent">


                        <?php
                        $category = 'COMPANY';
                        include "content.php";

                        ?>

                    </div>

                </div>


                <div class="tab-container">

                    <div id="tab2" class="tabcontent">


                        <?php
                        $category = 'CHINESE';
                        // include "content.php";
                        
                        ?>

                    </div>

                </div>

                <div class="tab-container">

                    <div id="tab3" class="tabcontent">


                        <?php
                        $category = 'SCIENTIFIC';
                        include "content.php";

                        ?>

                    </div>

                </div>

                <div class="tab-container">

                    <div id="tab5" class="tabcontent">


                        <?php
                        $category = 'CHARITY';
                        include "content.php";

                        ?>

                    </div>

                </div>


                <div class="tab-container">

                    <div id="tab6" class="tabcontent">


                        <?php
                        $category = 'ENLIGHTENMENT';
                        include "content.php";

                        ?>

                    </div>

                </div>

                <div class="tab-container">

                    <div id="tab4" class="tabcontent">


                        <?php
                        $category = '';
                        include "news.php";

                        ?>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <?php //include "test.php" ?>
    <!--End Delicious Food-->



    <?php include "../includes/address.php" ?>

    <?php include "../includes/footer.php"; ?>

    <!--G0 Top-->

    <!--End Go Top-->

    </div>

    <!-- JavaScript -->
    <script src="../vendor/js/bundle.min.js"></script>
    <!-- Plugin Js -->
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
    <!-- REVOLUTION JS FILES -->
    <script src="../vendor/js/jquery.themepunch.tools.min.js"></script>
    <script src="../vendor/js/jquery.themepunch.revolution.min.js"></script>
    <!-- SLIDER REVOLUTION EXTENSIONS -->
    <script src="../vendor/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="../vendor/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="../vendor/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="../vendor/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="../vendor/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="../vendor/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="../vendor/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="../vendor/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="../vendor/js/extensions/revolution.extension.video.min.js"></script>
    <!-- custom script -->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="../resources/js/map.js"></script>
    <script src="../vendor/js/contact_us.js"></script>
    <script src="../resources/js/script.js"></script>




    <!-- Include Bootstrap JS at the end of the body -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.videoLink').on('click', function (e) {
                e.preventDefault(); // Prevent default link behavior

                // Get the video path from the data attribute
                var videoPath = $(this).data('video-path');

                // Set the video source attribute to the video path
                $('#videoSource').attr('src', videoPath);
                $('#videoPlayer')[0].load(); // Reload the video player

                // Show the modal
                $('#videoModal').modal('show');
            });

            // Clear the video source when the modal is closed
            $('#videoModal').on('hidden.bs.modal', function () {
                $('#videoSource').attr('src', '');
                $('#videoPlayer')[0].load(); // Reload the video player
            });

            // Handle the close button click
            $('#closeVideoModal').on('click', function () {
                $('#videoModal').modal('hide');
            });
        });
    </script>

</body>

</html>