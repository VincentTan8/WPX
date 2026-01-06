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
$menu_bar5 = "";

$_SESSION['active_page'] = 'privacy';

include "../includes/header.php";
include "../connections/dbname.php";

?>



<body oncontextmenu="return false;" data-spy="scroll" data-target=".navbar" data-offset="90" class="position-relative">
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

    <section class="bg-white" id="deal" style="margin-top: 100px;">
        <div class="container"
            style="width: 80%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); font-family:Arial, Helvetica, sans-serif">

            <h4>WeTalk Payment Policy</h4>

            <p><b>Course Fee Payment Policy (All Regions)</b></p>

            <p>a) Payments can be made through the listed payment modes (PayNow, GCash, WeChat Pay, Airwallex, etc.).
            </p>
            <p>b) Please provide proof of payment (e.g., transfer receipt or screenshot), where relevant.</p>
            <p>c) For manual payments, please indicate the student's name in the payment reference. </p>
            <p>d) Any bank charges or administrative fees incurred through payment modes outside the official listed
            </p>
            <p>e) methods will be borne by the customer.</p>
            <p>f) Course fees must be paid in full before class commencement, unless otherwise arranged.</p>
            <p>g) Receipts will be issued upon verification of payment.</p>

            <p><b>FAQ: WeTalk Course Fee Payments</b></p>

            <p style="margin: 0">1) What payment modes are available?</p>
            <p style="margin: 0"><b>Electronic Payment:</b></p>
            <p style="margin: 0">Credit/debit card (via Airwallex/Stripe), Google Pay, Apple Pay, Alipay, GCash,
                Kakao Pay, PayPal (if available)</p>
            <p style="margin: 0"><b>Local Payment Methods:</b></p>
            <p style="margin: 0">Singapore: PayNow (QR code or UEN)</p>
            <p style="margin: 0">Philippines: GCash, Bank Transfer, POS, Cash</p>
            <p>China: WeChat Pay / Alipay (via QR)</p>

            <p style="margin: 0">2) Can I pay using QR code?</p>
            <p style="margin: 0"><b>Yes</b></p>
            <p style="margin: 0">SG: PayNow QR</p>
            <p style="margin: 0">PH: GCash QR</p>
            <p>CN: WeChat / Alipay QR</p>

            <p style="margin: 0">3) Are there additional charges?</p>
            <p>Payments made <b>outside the listed methods</b> may incur bank or FX charges, borne by the customer.</p>

            <p style="margin: 0">4) What reference should I include?</p>
            <p>Please include your <b>child’s full name</b> and (if applicable) <b>invoice number</b>.</p>

            <p style="margin: 0">5) Will I receive a receipt?</p>
            <p><b>Yes.</b> A digital receipt will be issued once the payment is verified.</p>

        </div>

    </section>

    <?php include "../includes/address.php" ?>

    <?php include "../includes/footer.php"; ?>

    <!--G0 Top-->
    <div class="go-top"><i class="fas fa-chevron-up"></i><i class="fas fa-chevron-up"></i></div>
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