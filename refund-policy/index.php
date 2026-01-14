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

<style>
    .refund-list {
        list-style: disc;
        list-style-position: inside
    }

    .refund-list-circle {
        list-style: circle;
        list-style-position: inside
    }

    .mb-5 {
        margin-bottom: 5px;
    }

    .mb-25 {
        margin-bottom: 25px;
    }
</style>


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

            <h4>WeTalk Refund Policy</h4>

            <p>WeTalk Education Centre Pte Ltd (“WeTalk,” “we,” “us,” or “our”) is committed to providing transparent
                and fair policies regarding online payments and refunds. This Refund Policy outlines the terms and
                conditions under which refunds may be issued for payments made through our online platforms.</p>

            <p class="mb-5"><b>1) Scope of Policy</b></p>
            <p class="mb-5">This policy applies to all online payments made to WeTalk Education Centre Pte
                Ltd for educational services, including but not limited to:</p>
            <ul class="mb-25">
                <li class="refund-list">Online courses and programs</li>
                <li class="refund-list">Live or recorded classes</li>
                <li class="refund-list">Subscription-based services</li>
                <li class="refund-list">Workshops, seminars, and tutoring sessions
                </li>
                <li class="refund-list">Any other digital educational products or
                    services offered by WeTalk</li>
            </ul>

            <p class="mb-5"><b>2) General Refund Eligibility</b></p>
            <p class="mb-5">Refunds are considered only under the conditions described in this policy. All
                refund requests must be submitted in writing to WeTalk through the official contact channels listed in
                Section 8.<br> Unless otherwise stated:
            </p>
            <ul class="mb-25">
                <li class="refund-list">Refunds are issued to the original payment
                    method.</li>
                <li class="refund-list">Processing times may vary depending on the
                    payment provider or financial institution.</li>
            </ul>

            <p class="mb-5"><b>3) Course and Program Refunds</b></p>
            <div class="mb-25">
                <p class="mb-5"><b>3.1) Before Course Commencement</b></p>
                <p>If a refund request is submitted <b>before the course or program start date,</b> the customer may be
                    eligible for a <b>full or partial refund</b>, subject to any administrative fees disclosed at the
                    time
                    of purchase.
                </p>

                <p class="mb-5"><b>3.2) After Course Commencement</b></p>
                <p class="mb-5">Once a course or program has begun:</p>
                <ul class="mb-25">
                    <li class="refund-list">Refunds may be partial and prorated based
                        on:
                    </li>
                    <ul>
                        <li class="refund-list-circle">The number of sessions attended</li>
                        <li class="refund-list-circle">Course materials accessed or
                            downloaded
                        </li>
                        <li class="refund-list-circle">Time elapsed since course
                            commencement
                        </li>
                    </ul>
                    <li class="refund-list">No refunds will be issued after a
                        substantial
                        portion of the course has been completed, as defined in the course-specific terms.</li>
                </ul>
            </div>

            <p class="mb-5"><b>4) Subscription Services</b></p>
            <p class="mb-5">For subscription-based services:</p>
            <ul class="mb-25">
                <li class="refund-list">Refunds are not provided for partially used
                    billing periods.</li>
                <li class="refund-list">Customers may cancel their subscription at any
                    time to prevent future charges.</li>
                <li class="refund-list">Access to subscription content will continue
                    until the end of the current billing cycle unless otherwise stated.</li>
            </ul>

            <p class="mb-5"><b>5) Non-Refundable Items</b></p>
            <p class="mb-5">The following are generally <b>non-refundable</b> unless required by
                applicable law:</p>
            <ul class="mb-25">
                <li class="refund-list">Downloaded or accessed digital content</li>
                <li class="refund-list">Completed classes or sessions</li>
                <li class="refund-list">Administrative or processing fees</li>
                <li class="refund-list">Promotional or discounted purchases labeled as
                    “non-refundable”</li>
            </ul>

            <p class="mb-5"><b>6) Service Cancellations by WeTalk</b></p>
            <p class="mb-5">If WeTalk Education Centre Pte Ltd cancels or is unable to deliver a service
                due to operational reasons, customers will be entitled to:</p>
            <ul class="mb-25">
                <li class="refund-list">A full refund, <b>or</b></li>
                <li class="refund-list">A credit toward future services, at the
                    customer’s discretion unless otherwise required by law.</li>
            </ul>

            <p class="mb-5"><b>7) Chargebacks and Disputes</b></p>
            <p>Customers are encouraged to contact WeTalk directly before initiating a chargeback with their payment
                provider. Unauthorized or improper chargebacks may result in suspension of access to services and/or
                account termination.</p>

            <p class="mb-5"><b>8) Refund request Process</b></p>
            <p class="mb-5">To request a refund, customers must provide:</p>
            <ul class="mb-5">
                <li class="refund-list">Full name:</li>
                <li class="refund-list">Registered email address:</li>
                <li class="refund-list">Transaction ID or proof of payment:</li>
                <li class="refund-list">Reason for the refund request:</li>
            </ul>
            <p class="mb-5"><b>Contact Information:</b></p>
            <p class="mb-5">Email: service@wetalk.com</p>
            <p class="mb-5">Phone: +65 9758 2288</p>
            <p class="mb-5">Address: 402 Orchard Road #02-23/24 Delfi Orchard, Singapore 238876</p>
            <p>WeTalk will review refund requests within <b>2 business days</b> and notify
                customers of the outcome.</p>

            <p class="mb-5"><b>9) Compliance With Applicable Laws</b></p>
            <p>This Refund Policy is designed to comply with applicable consumer protection and e-commerce laws. Where
                local regulations provide additional consumer rights, those rights will prevail.</p>

            <p class="mb-5"><b>10) Policy Modifications</b></p>
            <p>WeTalk Education Centre Pte Ltd reserves the right to modify or update this Refund Policy at any time.
                Changes will be effective upon posting on our website or official platforms.</p>
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