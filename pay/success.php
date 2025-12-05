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

//Handle Intent
//https://wetalk.com/testpay/success.php?id=int_hkdmkkjbkhdin0qs1vi&type=SUCCESS_URL
if (!isset($_GET['id'])) {
    die('No payment intent ID provided.');
}
$intent_id = $_GET['id'];

include "../includes/menu_bar_reset.php";

$_SESSION['active_page'] = 'pay';

include "../includes/header.php";
include "../connections/dbname.php";
?>

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="style.css" />
<!-- JavaScript -->
<script src="<?php echo BASE_URL; ?>vendor/js/bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/jquery.fancybox.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/owl.carousel.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/swiper.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/jquery.cubeportfolio.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/jquery.appear.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/flip.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/jquery-ui.bundle.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/select2.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/jquery.hoverdir.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/hover-item.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/slick.min.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/parallaxie.min.js"></script>

<!-- Custom Scripts -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
<script src="<?php echo BASE_URL; ?>resources/js/map.js"></script>
<script src="<?php echo BASE_URL; ?>vendor/js/contact_us.js"></script>
<script src="<?php echo BASE_URL; ?>resources/js/script.js"></script>


<body>
    <div class="payment-form-body position-relative" data-spy="scroll" data-target=".navbar" data-offset="90">
        <!-- <h1>WeTalk Unified Payment Page</h1> -->
        <div class="payment-info">
            <p class="success-status">
                <span id="paymentStatus">Loading...</span>
                <br><br>
                <span id="paymentStatusSubtitle">Thank you - your payment has been processed.</span>
            </p>
            <p class="success-order">Order ID:
                <span id="orderID">Loading...</span>
            </p>
            <p class="success-course">Course:
                <span id="coursePaid">Loading...</span>
            </p>
            <p class="success-paid">Amount Paid:
                <span id="amountPaid">Loading...</span>
            </p>

            <p style="margin-top: 70px; margin-bottom: 10px">For assistance, please contact <strong>WeTalk
                    Support</strong>. Details below.</p>
        </div>
    </div>

    <?php include "../includes/address.php" ?>

    <?php include "../includes/footer.php"; ?>
    <div id="page-data" data-page="pay" data-lang="<?php echo $lang; ?>"></div>

    <script async>
        (async () => {
            const intent_id = <?php echo json_encode($intent_id); ?>;
            const res = await fetch(`retrieve-payment-intent.php?intent_id=${intent_id}`, {
                headers: { 'Content-Type': 'application/json' },
            });
            const data = await res.json();

            if (data.success) {
                const toPay = data.body.amount;
                const amount = data.body.captured_amount;
                const currency = data.body.currency;
                const status = data.body.status;
                const orderID = data.body.merchant_order_id;
                const coursePaid = data.body.metadata?.course_name ?? 'N/A';

                // document.getElementById('amountToPay').textContent = `${currency} ${toPay}`;
                document.getElementById('coursePaid').textContent = `${coursePaid}`;
                document.getElementById('amountPaid').textContent = `${currency} ${amount}`;
                document.getElementById('orderID').textContent = `${orderID}`;

                const statusSpan = document.getElementById('paymentStatus');
                const statusSubSpan = document.getElementById('paymentStatusSubtitle');
                switch (status) {
                    case 'SUCCEEDED':
                        statusSpan.textContent = 'Payment Successful!';
                        break;
                    case 'PENDING':
                    case 'PENDING_REVIEW':
                        statusSpan.textContent = 'Payment Pending';
                        statusSpan.className = 'status-pending';
                        statusSubSpan.textContent = 'Please refresh the page later';
                        break;
                    case 'CANCELLED':
                        statusSpan.textContent = 'Payment Cancelled';
                        statusSpan.className = 'status-failed';
                        statusSubSpan.textContent = 'Cancellation Successful';
                        break;
                    case 'REQUIRES_PAYMENT_METHOD':
                        statusSpan.textContent = 'Payment Failed';
                        statusSpan.className = 'status-failed';
                        statusSubSpan.textContent = 'Please try again';
                        break;
                    default:
                        statusSpan.textContent = status;
                        statusSpan.className = 'status-failed';
                        statusSubSpan.textContent = 'Please try again';
                }
            } else {
                console.error("Error:", data.error);
                document.getElementById('amountPaid').textContent = '-';
                document.getElementById('paymentStatus').textContent = 'Error';
            }
        })();
    </script>
</body>

</html>