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
$menu_bar7 = "active";

$_SESSION['active_page'] = 'charity';

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
        style="background: linear-gradient(to bottom, #FCF6E5, rgba(228, 239, 254, 0)); height: 100%; display: flex; align-items: center; justify-content: center;">

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
                    <img src="../science/img/background.png" data-bgcolor='#ffffff' style='background:#ffffff' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina> -->
                        <!-- LAYERS -->


                        <!-- LAYER NR. 6 cube 3 -->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['left','left','left','left']" data-hoffset="['-340','-340','-340','-60']"
                            data-y="['top','top','top','top']" data-voffset="['50','50','50','-50']" data-width="none"
                            data-height="none" data-whitespace="normal" data-visibility="['on','on','on','on']"
                            data-type="image" data-basealign="slideup" data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":3000,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 98;">
                            <img id="animatedImage" src="../charity/img/banner-bg-2.png" alt=""
                                data-ww="['1950px','1400px','1264px','500px']"
                                data-hh="['700px','700px','551px','351px']" data-no-retina>
                        </div>



                        <!-- LAYER NR. 6 cube center-->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['left','left','left','left']" data-hoffset="['160','160','100','70']"
                            data-y="['top','top','top','top']" data-voffset="['150','-200','50','50']" data-width="none"
                            data-height="none" data-whitespace="normal" data-visibility="['on','on','on','on']"
                            data-type="image" data-basealign="slideup" data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":2000,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 99;">
                            <img id="animatedImage" src="../charity/img/banner-title-1.png" alt=""
                                data-ww="['630px','930px','564px','350px']" data-hh="['270px','570px','551px','auto']"
                                data-no-retina>
                        </div>



                        <!-- LAYER NR. 6 cube center-->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['left','left','left','left']" data-hoffset="['160','100','160','110']"
                            data-y="['top','top','top','top']" data-voffset="['160','-150','50','80']" data-width="none"
                            data-height="none" data-whitespace="normal" data-visibility="['on','on','on','on']"
                            data-type="image" data-basealign="slideup" data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":2000,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 99;">
                            <img id="animatedImage" src="../charity/img/banner-title-2.png" alt=""
                                data-ww="['630px','930px','564px','350px']" data-hh="['270px','570px','551px','auto']"
                                data-no-retina>
                        </div>

                        <!-- LAYER NR. 6 cube center-->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['left','left','left','left']" data-hoffset="['160','-140','-70','20']"
                            data-y="['top','top','top','top']" data-voffset="['160','-600','-250','-30']"
                            data-width="none" data-height="none" data-whitespace="normal"
                            data-visibility="['on','on','on','on']" data-type="image" data-basealign="slideup"
                            data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":2000,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 99;">
                            <img id="animatedImage" src="../charity/img/banner-title-4.png" alt=""
                                data-ww="['630px','1200px','664px','750px']" data-hh="['270px','1400px','751px','auto']"
                                data-no-retina>
                        </div>



                        <!-- LAYER NR. 6 cube center-->
                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2" id="slide-1-layer-8"
                            data-x="['left','left','left','left']" data-hoffset="['160','290','60','0']"
                            data-y="['top','top','top','top']" data-voffset="['160','-270','-150','-90']"
                            data-width="none" data-height="none" data-whitespace="normal"
                            data-visibility="['on','on','on','on']" data-type="image" data-basealign="slideup"
                            data-responsive_offset="on" data-frames='[
            {"delay":359.9609375,"speed":2000,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 99;">
                            <img id="animatedImage" src="../charity/img/banner-title-3.png" alt=""
                                data-ww="['630px','700px','664px','400px']" data-hh="['270px','700px','751px','451px']"
                                data-no-retina>
                        </div>



                        <!-- LAYER NR. 2 BOX-->

                        <?php
                        $imagePath = '../resources/img/plain_box_page.png';
                        $base64Image = base64_encode_image($imagePath);
                        ?>

                        <div class="tp-caption   tp-resizeme" id="slide-1-layer-3"
                            data-x="['left','center','center','center']" data-hoffset="['-90','-200','-80','70']"
                            data-y="['middle','middle','middle','middle']" data-voffset="['300','600','350','350']"
                            data-fontsize="['80','70','60','36']" data-lineheight="['85','85','60','50']"
                            data-width="['671','670','670','670']" data-height="none" data-whitespace="nowrap"
                            data-type="image" data-responsive_offset="on" data-visibility="['on','on','on','on']"
                            data-frames='[
            {"delay":1359.9609375,"speed":2000,"frame":"0","from":"y:100px;opacity:0;","to":"y:0;opacity:1;","ease":"Power3.easeInOut"},
            {"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}
        ]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            style="z-index: 200; white-space: nowrap; font-size: 90px; line-height: 85px; font-weight: 700; letter-spacing: 0px;font-family:Playfair Display;">
                            <img src="<?php echo $base64Image ?>" alt="" data-ww="['1400px','1640px','1300px','1300px']"
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





    <?php include "../includes/booking.php" ?>


    <?php include "../includes/address.php" ?>

    <?php include "../includes/footer.php"; ?>

    <!--G0 Top-->
    <!--End Go Top-->

    </div>
    <div id="page-data" data-page="charity" data-lang="<?php echo $lang ?>"></div>

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
                slidesToShow: 3,
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