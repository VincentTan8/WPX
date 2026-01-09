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

$_SESSION['active_page'] = 'pay';

include "../includes/header.php";
include "../connections/dbname.php";

//for prefilling fields
$willPrefill = false;
$course_name = "";
$currency_code = "SGD";
if (isset($_GET['course_name'])) {
    $course_name = $_GET['course_name'];
    if (isset($_GET['currency_code']))
        $currency_code = $_GET['currency_code'];
    $willPrefill = true;
}
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
    <div class="payment-form-body position-relative" data-spy="scroll" data-target=".navbar" data-offset="90">
        <h1>Fee Payment</h1>

        <form id="checkoutForm" style="max-width: 500px; margin-bottom: 2rem;">
            <label for="fullName">Student's Full Name</label>
            <input type="text" id="fullName" name="fullName" required
                style="width:100%; padding:10px; margin:8px 0 16px; border-radius:6px; border:1px solid #ccc;">

            <label for="guardianName">Parent/Guardian Name (if applicable)</label>
            <input type="text" id="guardianName" name="guardianName"
                style="width:100%; padding:10px; margin:8px 0 16px; border-radius:6px; border:1px solid #ccc;">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required
                style="width:100%; padding:10px; margin:8px 0 16px; border-radius:6px; border:1px solid #ccc;">

            <!-- <label for="contactNumber">Contact Number</label>
            <div style="display:flex; gap:10px; margin:8px 0 0;">
                <select id="regionCode" name="regionCode" required class="form-select">
                    <option value="+63">🇵🇭 +63</option>
                    <option value="+65">🇸🇬 +65</option>
                    <option value="+60">🇲🇾 +60</option>
                    <option value="+852">🇭🇰 +852</option>
                    <option value="+86">🇨🇳 +86</option>
                </select>
                <input type="text" id="contactNumber" name="contactNumber" required
                    style="flex:1; padding:10px; border-radius:6px; border:1px solid #ccc;">
            </div> -->

            <div class="mobile-wrapper">
                <label for="mobileCodeSelector">Mobile Number</label>
                <div style="display:flex; gap:10px; margin:8px 0 0;">
                    <div id="mobileCodeSelector" class="mobile-select">
                        <div class="mobile-selected">
                            <img src="assets/sg.svg" class="flag">
                            <span class="code">+65</span>
                        </div>

                        <div class="mobile-dropdown">
                            <div class="mobile-option" data-code="+1" data-name="Canada" data-flag="ca.svg">
                                <img src="assets/ca.svg" class="flag">
                                <span class="code">+1</span>
                                <span class="name">Canada</span>
                            </div>

                            <div class="mobile-option" data-code="+1" data-name="US" data-flag="us.svg">
                                <img src="assets/us.svg" class="flag">
                                <span class="code">+1</span>
                                <span class="name">US</span>
                            </div>

                            <div class="mobile-option" data-code="+63" data-name="Philippines" data-flag="ph.svg">
                                <img src="assets/ph.svg" class="flag">
                                <span class="code">+63</span>
                                <span class="name">Philippines</span>
                            </div>

                            <div class="mobile-option" data-code="+65" data-name="Singapore" data-flag="sg.svg">
                                <img src="assets/sg.svg" class="flag">
                                <span class="code">+65</span>
                                <span class="name">Singapore</span>
                            </div>

                            <div class="mobile-option" data-code="+86" data-name="China" data-flag="cn.svg">
                                <img src="assets/cn.svg" class="flag">
                                <span class="code">+86</span>
                                <span class="name">China</span>
                            </div>

                            <div class="mobile-option" data-code="+886" data-name="Taiwan" data-flag="tw.svg">
                                <img src="assets/tw.svg" class="flag">
                                <span class="code">+886</span>
                                <span class="name">Taiwan</span>
                            </div>
                        </div>

                        <!-- Hidden field for form submission -->
                        <input type="hidden" id="mobileCodeInput" name="mobileRegion" value="+63">
                    </div>

                    <!-- consider sanitizing leading zeroes instead of not allowing them -->
                    <input type="tel" autocomplete="tel-national" pattern="[1-9][0-9]{7,12}" id="mobileNumber"
                        name="mobileNumber" required
                        style="flex:1; padding:10px; border-radius:6px; border:1px solid #ccc; margin:0;">
                </div>
            </div>


            <label for="courseSelection">Course Selection</label>
            <select id="courseSelection" name="courseSelection" required class="form-select" style="width:100%; 
                    margin: 8px 0 16px;">
                <option value="">Select a course</option>
            </select>

            <div class="currency-wrapper">
                <label for="currencySelector">Currency and Price</label>
                <div style="display:flex; gap:10px; margin:8px 0 0;">
                    <div id="currencySelector" class="currency-select">
                        <div class="currency-selected">
                            <img src="assets/us.svg" class="flag">
                            <span class="code">USD</span>
                        </div>

                        <div class="currency-dropdown">
                            <div class="currency-option" data-code="USD" data-name="US Dollar" data-flag="us.svg">
                                <img src="assets/us.svg" class="flag">
                                <span class="code">USD</span>
                                <span class="name">US Dollar</span>
                            </div>

                            <div class="currency-option" data-code="PHP" data-name="Philippine Peso" data-flag="ph.svg">
                                <img src="assets/ph.svg" class="flag">
                                <span class="code">PHP</span>
                                <span class="name">Philippine Peso</span>
                            </div>

                            <div class="currency-option" data-code="CNY" data-name="Chinese Yuan" data-flag="cn.svg">
                                <img src="assets/cn.svg" class="flag">
                                <span class="code">CNY</span>
                                <span class="name">Chinese Yuan</span>
                            </div>

                            <div class="currency-option" data-code="SGD" data-name="Singapore Dollar"
                                data-flag="sg.svg">
                                <img src="assets/sg.svg" class="flag">
                                <span class="code">SGD</span>
                                <span class="name">Singapore Dollar</span>
                            </div>

                            <div class="currency-option" data-code="TWD" data-name="New Taiwan Dollar"
                                data-flag="tw.svg">
                                <img src="assets/tw.svg" class="flag">
                                <span class="code">TWD</span>
                                <span class="name">New Taiwan Dollar</span>
                            </div>
                        </div>

                        <!-- Hidden field to send value to backend -->
                        <input type="hidden" id="currencyInput" name="currency" value="USD">
                    </div>
                    <input type="text" id="priceDisplay" name="priceDisplay" readonly
                        style="flex:1; padding:10px; border-radius:6px; border:1px solid #ccc; margin: 0">
                </div>
            </div>

            <div style="margin: 16px 0;">
                <label style="align-items:center; gap:10px;">
                    <span>
                        <input type="checkbox" id="agreeTerms" style="margin: 0" required />
                        I confirm that the above details are accurate and agree to programme policies
                    </span>
                </label>
            </div>

            <!-- Terms Checkbox -->
            <div style="margin: 16px 0;">
                <label style="align-items:center; gap:10px;">
                    <span>
                        <input type="checkbox" id="agreeTerms" style="margin: 0" required />
                        I have read and agree to the <a style="text-decoration: underline !important"
                            href="../payment-policy" target="_blank" rel="noopener noreferrer">WeTalk Payment Policy</a>
                    </span>
                </label>
            </div>

            <button type="submit" id="hpp">Pay Now</button>
        </form>
    </div>

    <?php include "../includes/address.php" ?>

    <?php include "../includes/footer.php"; ?>
    <div id="page-data" data-page="pay" data-lang="<?php echo $lang; ?>"></div>

    <script async>
        (async () => {
            //to access in js files
            window.APP = {
                willPrefill: <?= json_encode($willPrefill) ?>,
                prefill_course_name: <?= json_encode($course_name) ?>,
                prefill_currency: <?= json_encode($currency_code) ?>
            };

            async function createPayment(course_name, currency, email, full_name, mobile_number, guardian_name) {
                const res = await fetch('create-payment-intent.php', {
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
                        guardian_name
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
                    successUrl: 'https://wetalk.com/pay/success.php', // Must be an HTTPS site todo change in prod
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

                const course_name = document.getElementById("courseSelection").value;
                const currency = document.getElementById("currencyInput").value;
                const email = document.getElementById("email").value;
                const full_name = document.getElementById("fullName").value;
                const mobile_number = document.getElementById("mobileCodeInput").value +
                    document.getElementById("mobileNumber").value;
                const guardian_name = document.getElementById("guardianName").value;
                const { intent, client_secret } = await createPayment(course_name, currency, email, full_name, mobile_number, guardian_name);

                if (mode === 'payment') {
                    redirectHppForCheckout(currency, intent, client_secret);
                }
            });
        })();
    </script>
    <script src="scripts/mobile-selector.js"></script>
    <script src="scripts/currency-selector.js"></script>
    <script src="scripts/pay.js"></script>
</body>

</html>