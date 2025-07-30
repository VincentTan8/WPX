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
$main_menu = 'LINGUISTICS';


include "../includes/menu_bar_reset.php";
$menu_bar4 = "active";

$_SESSION['active_page'] = 'teacher';

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
    <section class="p-0 h-100"
        style="background: linear-gradient(to bottom, #E4EFFE, rgba(228, 239, 254, 0)); height: 100%; display: flex; align-items: center; justify-content: center;">

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
                        <!-- MAIN IMAGE  -->
                        <img src="../teacher/img/background.png" data-bgcolor='#ffffff'
                            style='background:#ffffff;  border-bottom-left-radius: 180px;' alt=""
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="off" class="rev-slidebg" data-no-retina>
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

                        <!-- LAYER NR. 2 CHINESE CENTER
                    <div  class="tp-caption   tp-resizeme rs-parallaxlevel-3"
                         id="slide-1-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','40','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-140','-50','-160','-160']"
                         data-fontsize="['80','70','60','36']"
                         data-lineheight="['85','85','60','50']"
                         data-width="['671','670','670','350']"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":829.8828125,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 999; white-space: nowrap; font-size: 90px; line-height: 85px; font-weight: 700; letter-spacing: 0px;font-family:Playfair Display;"> 
                         <img src="../sinology/img/banner-text.png" alt="" data-ww="['600px','750px','600px','100px']" data-hh="['250px','500px','450px','300px']" data-no-retina>  </div>-->




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
                         data-y="['top','top','top','top']" data-voffset="['150','538','642','526']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="image"
                         data-responsive_offset="on"
                         data-visibility="['on','off','off','off']"

                         data-frames='[{"delay":719.921875,"speed":1500,"frame":"0","from":"opacity:1;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:1;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 9;">
                        <div class="rs-looped rs-pendulum"  data-easing="" data-startdeg="-5" data-enddeg="5" data-speed="3" data-origin="80% 60%"><img src="../science/img/banner-d-2.png" alt="" data-ww="['267px','184px','145px','145px']" data-hh="['270px','186px','146px','146px']" data-no-retina> </div></div> -->

                        <!-- LAYER NR. 6 cube 1 green box-->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['left','center','center','center']" data-hoffset="['-30','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['250','400','400','300']"
                            data-width="none" data-height="none" data-whitespace="normal"
                            data-visibility="['on','on','on','on']" data-type="image" data-basealign="slideup"
                            data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":1500,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 1000;">
                            <img id="animatedImage" src="../teacher/img/banner-l-1.png" alt=""
                                data-ww="['600','700px','600px','400px']" data-hh="['292','392px','331px','251px']"
                                data-no-retina>
                        </div>


                        <!-- LAYER NR. 6 cube 1 violet box -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['left','center','center','center']" data-hoffset="['30','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['220','300','360','300']"
                            data-width="none" data-height="none" data-whitespace="normal"
                            data-visibility="['on','on','on','on']" data-type="image" data-basealign="slideup"
                            data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":1500,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 999;">
                            <img id="animatedImage" src="../teacher/img/banner-l-2.png" alt=""
                                data-ww="['450','600px','464px','300px']" data-hh="['320','700px','351px','251px']"
                                data-no-retina>
                        </div>


                        <!-- LAYER NR. 6 cube 1 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['left','left','left','center']" data-hoffset="['60','-140','-200','0']"
                            data-y="['top','top','top','top']" data-voffset="['180','-600','-250','50']"
                            data-width="none" data-height="none" data-whitespace="normal"
                            data-visibility="['on','off','off','off']" data-type="image" data-basealign="slideup"
                            data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":1500,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 98;">
                            <img id="animatedImage" src="../teacher/img/banner-l-3.png" alt=""
                                data-ww="['450','1200px','664px','500px']" data-hh="['292','1400px','751px','651px']"
                                data-no-retina>
                        </div>












                        <!-- LAYER NR. 6 sign orange curve-->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-8"
                            data-x="['right','center','center','center']" data-hoffset="['300','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['30','-250','-200','-250']"
                            data-width="none" data-height="none" data-whitespace="normal"
                            data-visibility="['on','on','on','on']" data-type="image" data-basealign="slideup"
                            data-responsive_offset="on" data-frames='[
            {"delay":0,"speed":0,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 210;">
                            <img id="animatedImage" src="../teacher/img/banner-3.png" alt=""
                                data-ww="['480','1200px','664px','500px']" data-hh="['490','1400px','751px','651px']"
                                data-no-retina>
                        </div>



                        <!-- LAYER NR. 6 sign center sign-->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['right','center','center','center']" data-hoffset="['400','0','0','0']"
                            data-y="['top','top','top','top']" data-voffset="['180','-200','20','-100']"
                            data-width="none" data-height="none" data-whitespace="normal"
                            data-visibility="['on','on','on','on']" data-type="image" data-basealign="slideup"
                            data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":1500,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 210;">
                            <img id="animatedImage" src="../teacher/img/banner-2.png" alt=""
                                data-ww="['480','700px','504px','400px']" data-hh="['200','451px','300px','351px']"
                                data-no-retina>
                        </div>



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


                        <!-- LAYER NR. 2 BOX-->
                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-3"
                            data-x="['left','center','center','center']" data-hoffset="['-228','-200','-80','70']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['400','600','350','350']"
                            data-fontsize="['80','70','60','36']" data-lineheight="['85','85','60','50']"
                            data-width="['671','670','670','670']" data-height="none" data-whitespace="nowrap"
                            data-type="image" data-responsive_offset="on" data-visibility="['on','on','on','on']"
                            data-frames='[{"delay":1.8828125,"speed":0,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0;sY:0;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 200; white-space: nowrap; font-size: 90px; line-height: 85px; font-weight: 700; letter-spacing: 0px;font-family:Playfair Display;">
                            <img src="../linguistic/img/plain_box_page.png" alt=""
                                data-ww="['none','1640px','1300px','1300px']"
                                data-hh="['500px','650px','470px','700px']" data-no-retina>
                        </div>


                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

    </section>





    <!--End header-->

    <?php include "course_introduction.php" ?>


    <?php
    $faculty = 'Faculty';
    $chin = 'Chinese Language Teacher';
    $trad = 'Traditional Chinese Teacher';
    $engt = 'English Teacher';
    $sciet = 'Science Teachers';
    $contr = 'Contributing Teachers';

    if ($lang == '_cn') {
        $faculty = '教师团';
        $chin = '华语老师';
        $trad = '国学老师';
        $engt = '英文老师';
        $sciet = '科学老师';
        $contr = '特约讲师';

    }


    ?>



    <!--Delicious Food-->
    <section id="food" style="margin-top: -150px;">
        <div class="container  ">
            <div class="row position-relative">
                <!--  <img src="../short-video/img/niao1_trans.png" class="food-img-before wow rotateInDownLeft" data-wow-delay="300ms" alt="image"> 
            <img src="../short-video/img/niao1_trans.png" style="margin-top: -380px;  " class="food-img-after wow rotateInDownRight" data-wow-delay="300ms"  alt="image">-->
                <div class="col-lg-12 text-left mb-50">
                    <div class="zic-img">


                        <h2 style="font-family: Arial, Helvetica, sans-serif; font-weight:bold"
                            class="text-capitalize  bg-dark-grey"><?php echo $faculty ?></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="tabs" style="text-align: center;">
                    <button class="tablinks " onclick="openTab(event, 'tab1')"><?php echo $chin ?></button>
                    <button class="tablinks" onclick="openTab(event, 'tab2')"><?php echo $trad ?></button>
                    <button class="tablinks" onclick="openTab(event, 'tab3')"><?php echo $engt ?></button>
                    <button class="tablinks" onclick="openTab(event, 'tab5')"><?php echo $sciet ?></button>
                    <button class="tablinks" onclick="openTab(event, 'tab6')"><?php echo $contr ?></button>
                    <button id="loadbtn" style="visibility: hidden; position:absolute" class="tablinks"
                        onclick="openTab(event, 'tab4')">All</button>
                </div>




                <div class="tab-container">

                    <div id="tab1" class="tabcontent">


                        <?php
                        $category = 'CHINESE';
                        include "content.php";

                        ?>

                    </div>

                </div>


                <div class="tab-container">

                    <div id="tab2" class="tabcontent">


                        <?php
                        $category = 'TRADITIONAL';
                        include "content.php";

                        ?>

                    </div>

                </div>


                <div class="tab-container">

                    <div id="tab3" class="tabcontent">


                        <?php
                        $category = 'ENGLISH';
                        include "content.php";

                        ?>

                    </div>

                </div>


                <div class="tab-container">

                    <div id="tab4" class="tabcontent">


                        <?php
                        $category = '';
                        include "content.php";

                        ?>

                    </div>

                </div>


                <div class="tab-container">

                    <div id="tab5" class="tabcontent">


                        <?php
                        $category = 'SCIENCE';
                        include "content.php";

                        ?>

                    </div>

                </div>

                <div class="tab-container">

                    <div id="tab6" class="tabcontent">


                        <?php
                        $category = 'CONTRIBUTING';
                        include "content.php";

                        ?>

                    </div>

                </div>



            </div>
        </div>
    </section>


    <?php include "../includes/booking.php" ?>


    <?php include "../includes/address.php" ?>

    <?php include "../includes/footer.php"; ?>

    <!--G0 Top-->
    <!--End Go Top-->

    </div>
    <div id="page-data" data-page="" data-lang="<?php echo $lang ?>"></div>
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

    <script>
        $(document).ready(function () {
            $('.slider_extra').slick({
                dots: false,
                infinite: true,
                speed: 5000,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                adaptiveHeight: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>