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

include "../includes/menu_bar_reset.php";

$_SESSION['active_page'] = 'wine';

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
<!-- Import @airwallex/components-sdk bundle 
               - You MUST replace the bundle version to the latest NPM version
                 in order to import the package properly! -->
<script src="https://static.airwallex.com/components/sdk/v1/index.js"></script>


<body>
    <div class="wine-main-body position-relative" data-spy="scroll" data-target=".navbar" data-offset="90">
        <div class="details-left">
            <!-- <div class="brand">
                <img src="https://wetalk.com/resources/img/logo.png" alt="WeTalk Logo">
                <span>Wetalk Education Pte Ltd</span>
            </div> -->

            <p>
                Join us for an intimate evening where wine appreciation, Chinese calligraphy,
                and philosophy come together in perfect balance.
            </p>

            <p>
                Hosted by <strong>WeTalk Singapore</strong> and
                <strong>Authentic Wine Explorers</strong>, this experience invites you to slow down,
                savour each pour, and rediscover the art of conversation through culture and reflection.
            </p>

            <div class="event-info">
                <p><strong>Event Details:</strong></p>
                <p><strong>Date:</strong> Sunday, 21 December 2025</p>
                <p><strong>Time:</strong> 4:00PM - 6:00PM</p>
                <p><strong>Venue:</strong> WeTalk @ Delfi Orchard (#02-23/24)</p>
                <p><strong>Fee:</strong> $128 per guest</p>
            </div>

            <p>
                A <strong>free kids' activity class</strong> will be available next door,
                so parents can enjoy the evening with ease while children engage in a fun creative session.
            </p>

            <p class="note">Seats are limited.</p>
        </div>

        <div class="form-right">
            <p>
                Reserve your place now and be part of an evening of wine, wisdom,
                and meaningful connection.
            </p>

            <form id="checkoutForm" class="checkoutForm"
                style="max-width: 500px; margin-bottom: 2rem; padding-left: 10px; padding-right: 10px;">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="mobileNumber">Mobile Number</label>
                <input type="tel" inputmode="tel" id="mobileNumber" name="mobileNumber" required>

                <label for="kidNumber">How many kids are you bringing?</label>
                <input type="number" step="1" min="0" id="kidNumber" name="kidNumber" required>

                <label for="dietary">Dietary Restrictions (if any)</label>
                <input type="text" id="dietary" name="dietary">

                <label for="guests">Additional Guests (if any)</label>
                <div id="guestInput">
                    <div class="guestEntry">
                        <input type="text" name="guests[]" />
                        <button type="button" id="addGuest">+</button>
                    </div>
                </div>

                <label for="referredBy">Referred By (if applicable)</label>
                <input type="text" id="referredBy" name="referredBy">

                <div style="margin: 16px 0;">
                    <label style="align-items:center;">
                        <span>
                            <input type="checkbox" id="agreeTerms" style="margin: 0; width: auto" required />
                            I understand my registration is confirmed only upon payment verification.
                        </span>
                    </label>
                </div>
                <div style="margin: 16px 0;">
                    <label style="align-items:center;">
                        <span>
                            <input type="checkbox" id="agreeTerms" style="margin: 0; width: auto" required />
                            I consent to the collection and use of photographs and/or video recordings taken during the
                            workshop by WeTalk Singapore and its authorised personnel for documentation and marketing
                            purposes across print, electronic, and social media platforms.
                        </span>
                    </label>
                </div>
                <div style="margin: 16px 0;">
                    <label style="align-items:center;">
                        <span>
                            <input type="checkbox" id="agreeTerms" style="margin: 0; width: auto" required />
                            I have read and agree to the <a style="text-decoration: underline !important"
                                href="../privacy" target="_blank" rel="noopener noreferrer">WeTalk Payment Policy</a>
                        </span>
                    </label>
                </div>
                <button type="submit" id="hpp">Pay Now</button>
            </form>
        </div>

    </div>

    <?php include "../includes/address.php" ?>

    <?php include "../includes/footer.php"; ?>
    <div id="page-data" data-page="wine" data-lang="<?php echo $lang; ?>"></div>

    <script async>
        (async () => {
            async function createPayment(course_name, currency, email, full_name, mobile_number, guest_num = 0) {
                const res = await fetch('../resources/payment/create-payment-intent.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        //possibly add same parameters for fetching price such as group Setup
                        //make it optional since this could be used for seasonal courses
                        course_name,
                        currency,
                        email,
                        full_name,
                        mobile_number,
                        guest_num
                    })
                });

                const data = await res.json();
                console.log(data);

                if (data.success) {
                    const intent = data.body.id;
                    const client_secret = data.body.client_secret;

                    return { intent, client_secret };
                } else {
                    console.error("Error:", data.error);
                }
            }
            const mode = 'payment';
            const { payments } = await window.AirwallexComponentsSDK.init({
                env: 'demo', // Setup which Airwallex env('staging' | 'demo' | 'prod') to integrate with
                enabledElements: ['payments'],
            })

            const redirectHppForCheckout = (currency, intent_id, client_secret) => {
                payments.redirectToCheckout({
                    env: 'demo',  //todo change when going to prod
                    mode: 'payment',
                    currency,
                    intent_id,
                    client_secret,
                    successUrl: 'https://wetalk.com/wine/success.php', // Must be an HTTPS site todo change in prod
                    appearance: {
                        mode: 'light',
                        variables: {
                            colorBrand: '#f2b33d',
                        },
                    },
                    // methods: "auto,"
                    methods: ['googlepay', 'applepay', 'card', 'alipaycn', 'gcash', 'grabpay', 'kakaopay', 'wechatpay'],
                    logoUrl: "https://wetalk.com/resources/img/logo.png",
                    // shopper_email: ,
                    // shopper_name: ,
                    // shopper_phone: ,
                });
            }

            document.getElementById('checkoutForm').addEventListener('submit', async function (e) {
                e.preventDefault();

                const course_name = "Wisdom of the Vine";
                const currency = "SGD";
                const email = document.getElementById("email").value;
                const full_name = document.getElementById("fullName").value;
                const mobile_number = document.getElementById("mobileNumber").value;
                const referred_by = document.getElementById("referredBy").value;

                const guestInputs = document.querySelectorAll('input[name="guests[]"]');
                const guests = [...guestInputs]
                    .map(input => input.value.trim())
                    .filter(Boolean);
                const guest_num = guests.length;

                const { intent, client_secret } = await createPayment(course_name, currency, email, full_name, mobile_number, guest_num);

                //save guest list to db before redirect, host is not included here
                await fetch('record-guests.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        intent_id: intent,
                        guests,
                        referred_by
                    })
                });

                if (mode === 'payment') {
                    redirectHppForCheckout(currency, intent, client_secret);
                }
            });
        })();
    </script>
    <script src="scripts/wine.js"></script>
</body>

</html>