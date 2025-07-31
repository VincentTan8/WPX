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
  <style>
    #rev_slider_1_1 {
      height: 100% !important;
      overflow: visible !important;
      position: relative;
    }

    .forcefullwidth_wrapper_tp_banner,
    .rev_slider_wrapper {
      height: 100vh !important;
    }
  </style>
</head>

<?php

$category = '';
$main_menu = 'LINGUISTICS';

include "../includes/menu_bar_reset.php";
$menu_bar4 = "active";

$teachers_id = $_SESSION['teachers_id'];
$_SESSION['active_page'] = 'teacher-info/main.php?id=' . $teachers_id;


include "../includes/header.php";
include "../connections/dbname.php";

$fullname = '';
$photo = '';
$label_details = '';
$introduction = '';
$birthplace = '';
$education = '';
$motto = '';
$philosophy = '';
$category_details = '';
$digital_label_A = '';
$digital_label_A1 = '';
$digital_label_A2 = '';
$digital_label_A3 = '';
$digital_label_B = '';
$digital_label_B1 = '';
$digital_label_B2 = '';
$digital_label_B3 = '';
$digital_label_C = '';
$digital_label_C1 = '';
$digital_label_C2 = '';
$digital_label_C3 = '';


$ryesultctr667aa12 = mysqli_query($conn, "SELECT * 
FROM teachers  
WHERE id='$teachers_id' LIMIT 1");
$my_total_records_check = mysqli_num_rows($ryesultctr667aa12);

if ($my_total_records_check > 0) {

  $ryow12aa12 = mysqli_fetch_assoc($ryesultctr667aa12);

  $fullname = $ryow12aa12['fullname' . $lang];
  $introduction = $ryow12aa12['introduction' . $lang];
  $birthplace = $ryow12aa12['birthplace' . $lang];
  $education = $ryow12aa12['education' . $lang];
  $motto = $ryow12aa12['motto' . $lang];
  $philosophy = $ryow12aa12['philosophy' . $lang];
  $category_details = $ryow12aa12['category_details'];

  $digital_label_A = $ryow12aa12['digital_label_A'];
  $digital_label_A1 = $ryow12aa12['digital_label_A1'];
  $digital_label_A2 = $ryow12aa12['digital_label_A2'];
  $digital_label_A3 = $ryow12aa12['digital_label_A3'];

  $digital_label_B = $ryow12aa12['digital_label_B'];
  $digital_label_B1 = $ryow12aa12['digital_label_B1'];
  $digital_label_B2 = $ryow12aa12['digital_label_B2'];
  $digital_label_B3 = $ryow12aa12['digital_label_B3'];

  $digital_label_C = $ryow12aa12['digital_label_C'];
  $digital_label_C1 = $ryow12aa12['digital_label_C1'];
  $digital_label_C2 = $ryow12aa12['digital_label_C2'];
  $digital_label_C3 = $ryow12aa12['digital_label_C3'];

  $label_details = str_replace(",", " / ", $ryow12aa12['label_details' . $lang]);

  $teacher_photo = $ryow12aa12['photo'];
  $photo = '../teacher/img/photo/' . $teacher_photo;

  if ($teacher_photo == '') {
    $photo = '../teacher/img/thumbnails/' . $ryow12aa12['thumbnails'];

  }
}
?>


<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">

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
  <section class="p-0" style="background-color:#F3F8FE; height:100% !important; ">

    <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container " data-alias="megaone-food-slider1"
      data-source="gallery"
      style="background:transparent;padding:0px;  overflow:visible !important; height:120vh !important;">
      <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
      <div id="rev_slider_1_1" class="rev_slider fullscreenbanner " style="display:none; " data-version="5.4.8.1">
        <ul> <!-- SLIDE  -->
          <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0"
            data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300"
            data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3=""
            data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10=""
            data-description="" style="overflow:visible !important; height:120vh !important;">
            <!-- MAIN IMAGE 
                    <img src="../teacher/img/background.png" data-bgcolor='#ffffff' style='background:#ffffff;  border-bottom-left-radius: 180px;' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>  -->
            <!-- LAYERS -->

            <!-- LAYER NR. 1 name -->
            <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="['left','center','center','center']"
              data-hoffset="['3','2','-5','-5']" data-y="['middle','top','top','middle']"
              data-voffset="['-200','620','620','50']" data-fontsize="['44','40','35','26']"
              data-lineheight="['70','70','40','40']" data-width="['none','none','280','300']"
              data-height="['none','150','150','150']" data-whitespace="nowrap" data-type="text"
              data-responsive_offset="on" data-visibility="['on','on','on','on']"
              data-frames='[{"delay":339.84375,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index: 5; white-space: nowrap; font-size: 40px; line-height: 70px; font-weight: bold; color: #444444; letter-spacing: 0px;font-family:Arial, Helvetica, sans-serif;">
              <?php echo $fullname ?>
            </div>


            <!-- LAYER NR. 1 -->
            <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="['left','center','center','center']"
              data-hoffset="['1000','2','-5','-5']" data-y="['top','middle','middle','middle']"
              data-voffset="['260','526','-112','100']" data-fontsize="['47','40','35','26']"
              data-lineheight="['70','70','40','40']" data-width="['none','none','280','200']"
              data-height="['none','150','150','150']" data-whitespace="nowrap" data-type="text"
              data-responsive_offset="on" data-visibility="['on','off','off','off']"
              data-frames='[{"delay":339.84375,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index: 5; white-space: nowrap; font-size: 50px; line-height: 70px; font-weight: bold; color: #07CA91; letter-spacing: 0px;font-family:Arial, Helvetica, sans-serif;">
              <?php echo $digital_label_A ?> <span
                style="font-size:17px; margin-left:-5px; margin-top:-10px ;color:#777777"><?php echo $digital_label_A1 . ' ' . $digital_label_A2 ?></span>
              <p style="margin-top:-20px "><?php echo $digital_label_A3 ?></p>

            </div>


            <!-- LAYER NR. 1 -->
            <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="['left','center','center','center']"
              data-hoffset="['1000','2','-5','-5']" data-y="['top','middle','middle','middle']"
              data-voffset="['400','526','-112','100']" data-fontsize="['47','40','35','26']"
              data-lineheight="['70','70','40','40']" data-width="['none','none','280','200']"
              data-height="['none','150','150','150']" data-whitespace="nowrap" data-type="text"
              data-responsive_offset="on" data-visibility="['on','off','off','off']"
              data-frames='[{"delay":339.84375,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index: 5; font-weight: bold; color: #07CA91; font-family:Arial, Helvetica, sans-serif;">
              <?php echo $digital_label_B ?> <span
                style="font-size:17px;   margin-top:-10px ; color:#777777"><?php echo $digital_label_B1 . ' ' . $digital_label_B2 ?></span>
              <p style="margin-top:-10px "><?php echo $digital_label_B3 ?></p>

            </div>



            <!-- LAYER NR. 1 -->
            <div class="tp-caption   tp-resizeme" id="slide-1-layer-2" data-x="['left','center','center','center']"
              data-hoffset="['1000','2','-5','-5']" data-y="['top','top','top','middle']"
              data-voffset="['550','690','670','465']" data-fontsize="['47','40','35','26']"
              data-lineheight="['70','70','40','40']" data-width="['none','none','280','200']"
              data-height="['none','150','150','150']" data-whitespace="nowrap" data-type="text"
              data-responsive_offset="on" data-visibility="['on','on','on','on']"
              data-frames='[{"delay":339.84375,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index: 888; font-weight: bold; color: #07CA91;  font-family:Arial, Helvetica, sans-serif;">
              <?php echo $digital_label_C ?> <span
                style="    margin-top:-10px ; "><?php echo $digital_label_C1 . ' ' . $digital_label_C2 ?></span>
              <p style="margin-top:-10px "><?php echo $digital_label_C3 ?></p>

            </div>

            <!-- LAYER NR. 3 -->
            <div class="tp-caption   tp-resizeme" id="slide-1-layer-4" data-x="['left','center','center','center']"
              data-hoffset="['3','1','-10','0']" data-y="['top','middle','middle','middle']"
              data-voffset="['280','25','6','300']" data-fontsize="['18','18','18','14']"
              data-lineheight="['30','26','26','20']" data-width="['480','570','580','390']" data-height="none"
              data-whitespace="normal" data-type="text" data-responsive_offset="on"
              data-visibility="['on','off','off','on']"
              data-frames='[{"delay":1319.921875,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['left','center','center','left']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index: 7; min-width: 570px; max-width: 570px; white-space: normal; font-size: 18px; line-height: 26px; font-weight: 400; color: #444444; letter-spacing: 0px;font-family:Roboto; ">

              <?php echo $label_details ?>

              </br></br><?php echo $introduction ?>
              </br></br><span id="teacher-place-of-birth">Place of Birth :</span> <?php echo $birthplace ?>

              </br><span id="teacher-education">Education :</span> <?php echo $education ?>

              </br></br><b id="bold-motto">Motto :</b> <?php echo $motto ?>
              </br><b id="bold-philosophy">Philosophy :</b> <?php echo $philosophy ?>


            </div>

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

            <!-- LAYER NR. 6 sign -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-0" id="slide-1-layer-8"
              data-x="['right','left','left','left']" data-hoffset="['200','-140','100','-60']"
              data-y="['top','top','top','top']" data-voffset="['0','-600','-250','-250']" data-width="none"
              data-height="none" data-whitespace="normal" data-visibility="['on','off','on','on']" data-type="image"
              data-basealign="slideup" data-responsive_offset="on" data-frames='[
            {"delay":0,"speed":0,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index: 210;">
              <img id="animatedImage" src="../teacher/img/banner-bg-1.png" alt=""
                data-ww="['1800px','1200px','664px','500px']" data-hh="['500px','1400px','751px','551px']"
                data-no-retina>
            </div>



            <!-- LAYER NR. 6 photo teacher -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
              data-x="['middle','center','center','center']" data-hoffset="['-200','0','0','0']"
              data-y="['top','top','top','top']" data-voffset="['140','-150','50','-30']" data-width="none"
              data-height="none" data-whitespace="normal" data-visibility="['on','on','on','on']" data-type="image"
              data-basealign="slideup" data-responsive_offset="on" data-frames='[
            {"delay":0,"speed":0,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index: 210;">
              <img id="animatedImage" src="<?php echo $photo ?>" alt="" data-ww="['500px','800px','500','300px']"
                data-hh="['550px','751px','551','351px']" data-no-retina>
            </div>

            <!-- LAYER NR. 6 sign yellow image background-->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
              data-x="['middle','center','center','center']" data-hoffset="['-350','0','0','0']"
              data-y="['top','top','top','top']" data-voffset="['600','-250','-250','-250']" data-width="none"
              data-height="none" data-whitespace="normal" data-visibility="['on','on','on','on']" data-type="image"
              data-basealign="slideup" data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":1500,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index: 209;">
              <img id="animatedImage" src="../teacher/img/banner-bg-2.png" alt=""
                data-ww="['200px','664px','664px','400px']" data-hh="['250px','751px','751px','451px']" data-no-retina>
            </div>


            <!-- LAYER NR. 6 sign -->
            <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
              data-x="['middle','left','left','left']" data-hoffset="['60','-140','-200','-60']"
              data-y="['top','top','top','top']" data-voffset="['680','-600','-250','-250']" data-width="none"
              data-height="none" data-whitespace="normal" data-visibility="['on','off','off','off']" data-type="image"
              data-basealign="slideup" data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":1500,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index: 209;">
              <img id="animatedImage" src="../teacher/img/like-icon.png" alt=""
                data-ww="['100px','1200px','664px','500px']" data-hh="['50px','1400px','751px','651px']" data-no-retina>
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




            <!-- LAYER NR. 4 green button -->
            <div class="tp-caption tp-resizeme " id="slide-1-layer-5" data-x="['left','center','center','center']"
              data-hoffset="['1000','2','0','0']" data-y="['top','top','top','middle']"
              data-voffset="['200','800','750','50']" data-fontsize="['17','20','18','13']"
              data-width="['1200px','auto','auto','auto']" data-responsive_offset="on"
              data-visibility="['on','on','on','on']"
              data-frames='[{"delay":1759.9609375,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
              data-textAlign="['left','center','center','center']" data-paddingtop="[0,0,0,0]"
              data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
              style="z-index: 888;font-family:Playfair Display; font-weight: 600"><a
                style="width: auto;  color:white;   background-color:#0CC991"
                class="btn btn-large rev-slider btn-rounded scroll" href="#food"><span
                  style="margin-left: -10px;"><?php echo $category_details ?></span></a> </div>





          </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important; margin-bottom:20px;"></div>
      </div>
    </div><!-- END REVOLUTION SLIDER -->

  </section>





  <!--End header-->





  <?php include "../includes/booking.php" ?>


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