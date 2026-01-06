<style>
    /* Popup container */
    .popup {
        display: none;
        position: fixed;
        z-index: 999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    /* Popup content */
    .popup-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
    }

    /* Close button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    .login-form {
        width: 100%;
        max-width: 500px;
        background: white;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
    }

    .login-form h2 {
        margin-bottom: 20px;
    }

    .login-form input {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .login-form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .login-form button {
        width: 100%;
        padding: 10px;
        background: #007bff;
        border: none;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    .login-form button:hover {
        background: #0056b3;
    }


    .presyo {
        float: right;
    }



    @media screen and (max-width: 380px) {
        .popup-content {
            width: 85%;
            /* Almost full-width on very small screens */
            padding: 10px;
            /* Further reduce padding */
        }

        .close {
            font-size: 20px;
            /* Adjust close button size */
        }

        .presyo {
            float: none;
            font-size: 10px;

        }

        form label,
        form input {
            font-size: 14px;
        }

        form input {
            width: 100%;
        }

        button {
            font-size: 16px;
            padding: 10px;
            /* width: 100%; this was causin horizontal scrolling so I commented it out*/
        }
    }

    .payment-methods {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
    }

    .payment-title {
        font-size: 16px;
        font-weight: 400;
        margin-bottom: 10px;
        color: #808080;
        text-align: left;
    }

    .payment-row {
        display: flex;
        width: 100%;
        justify-content: left;
        gap: 30px;
        flex-wrap: wrap;
    }

    .payment-icon {
        width: 55px;
        height: auto;
        object-fit: contain;
    }

    #jcb {
        width: 50px;
    }

    #visa,
    #paypal {
        width: 85px;
    }

    #alipay {
        width: 95px;
    }

    #wechat,
    #gcash {
        width: 85px;
    }

    .payment-mobile {
        margin-left: -10px;
    }

    @media (max-width: 992px) {
        .payment-icon {
            width: 55px !important;
        }

        .copyright-para {
            margin-right: 0px !important;
        }
    }


    @media (max-width: 992px) {
        .payment-methods {
            align-items: left;
            text-align: left;
        }

        .payment-row {
            justify-content: left;
            gap: 15px;
        }

        .payment-icon {
            width: 35px;
        }

        .contact-social-icon {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .footer-menu {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
            padding-left: 0;
            list-style-type: none;
        }

        .footer-menu li {
            margin: 0;
        }

        .footer-menu a {
            font-size: 14px;
            text-align: center;
            color: #808080;
            text-decoration: none;
        }

        .footer-menu a:hover {
            text-decoration: underline;
        }

        #alipay,
        #wechat,
        #gcash {
            width: 95px !important;

        }


        #visa,
        #jcb,
        #paypal {
            width: 70px !important;
        }



    }

    @media (max-width: 768px) {
        .payment-icon {
            width: 28px !important;
        }


        #unionpay,
        #jcb,

        #master {
            width: 45px !important;
        }

        #paypal,
        #visa,
        #alipay,
        #gcash,
        #wechat,
        #banktransfer {
            width: 65px !important;
        }

        .bpFabWrapper {
            bottom: 5rem !important;
            right: 0.8rem !important;
        }
    }
</style>


<!--Contact Section-->

<!-- <div id="google-map" class="bg-light map">
    </div> -->

<!--End Contact Section-->


<!-- Popup Window -->
<div id="popupForm" class="popup">
    <div class="popup-content">


        <form name="form_company" id="form_company" method="post" action="<?php echo BASE_URL; ?>includes/save.php"
            class="login-form">
            <span class="close">&times;</span>
            <h4><b>Book a class now! 现在预定课程</b></h4>
            <p style="color:#767E90; font-size:13px; line-height:20px">Once you log in or create an account, it means
                that
                you have read and agreed to WeTalk <a href="<?php echo BASE_URL; ?>service/" target="_blank"> terms of
                    service </a>
                and <a href="<?php echo BASE_URL; ?>privacy/" target="_blank"> privacy agreement </a>. </p>

            <p style="color:#767E90; font-size:13px; line-height:20px; margin-top:-20px">一旦您登录或创建帐户，即表示您已阅读并同意
                向WeTalk提供<a href="<?php echo BASE_URL; ?>service/" target="_blank"> 服务条款和 </a>
                <a href="<?php echo BASE_URL; ?>privacy/" target="_blank"> 隐私协议 </a>。
            </p>

            <input readonly style="color: #007bff; font-weight:bold" type="text" name="course" id="course">

            <input type="text" name="first_name" placeholder="Given Name 名" required>
            <input type="text" name="last_name" placeholder="Family Name 姓" required>
            <input type="email" name="email" placeholder="Email 电子邮件地址" required>
            <input type="text" name="contact" placeholder="Contact Number 电话号码" required>

            <hr>
            <textarea name="message" type="text" placeholder="Message 信息"></textarea>

            <!-- <input type="password" placeholder="Password"  >
                 <input type="password" placeholder="Confirm Password"  > -->


            <button type="submit" style="background-color: #FEA500;"><b>SUBMIT 提交</b></button>
            <!-- <p style="color:#767E90; font-size:13px; line-height:20px">Have an account already? <a href="<?//php echo BASE_URL; ?>signin/">Log-in</a> </p> -->
        </form>
    </div>
</div>


<!--Footer-->
<footer class="footer-sec">
    <div class="container">
        <div class="row" style="align-items:anchor-center;">
            <div class="col-12 col-lg-3 d-none d-lg-block">
                <div class="footer-logo">
                    <div class="logo-max">
                        <a href="<?php echo BASE_URL; ?>" class="logo link" title="logo">
                            <img src="<?php echo BASE_URL; ?>resources/img/logo.png" alt="logo" title="Logo"
                                class="logo-default">
                        </a>
                    </div>
                    <!--    <p class="footer-width pt-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim viverra ultrices.</p> -->

                </div>
            </div>

            <div class="col-12 col-lg-5 d-flex justify-content-center ">
                <div class="payment-methods text-left w-100">
                    <p class="payment-title">Supported Payment Methods</p>
                    <div class="payment-row w-100">
                        <img src="<?php echo BASE_URL; ?>resources/img/payment-method/mastercard.png" id="master"
                            alt="Mastercard" class="payment-icon">
                        <img src="<?php echo BASE_URL; ?>resources/img/payment-method/visa.svg" id="visa" alt="Visa"
                            class="payment-icon">
                        <img src="<?php echo BASE_URL; ?>resources/img/payment-method/jcb.svg" id="jcb" alt="JCB"
                            class="payment-icon">
                        <img src="<?php echo BASE_URL; ?>resources/img/payment-method/paypal.svg" id="paypal"
                            alt="PayPal" class="payment-icon">
                        <img src="<?php echo BASE_URL; ?>resources/img/payment-method/union.png" id="unionpay"
                            alt="UnionPay" class="payment-icon">
                    </div>
                    <div class="payment-row w-100 payment-mobile">
                        <img src="<?php echo BASE_URL; ?>resources/img/payment-method/alipay.svg" id="alipay"
                            alt="Alipay" class="payment-icon">
                        <img src="<?php echo BASE_URL; ?>resources/img/payment-method/wechat.svg" id="wechat"
                            alt="WeChat Pay" class="payment-icon">
                        <img src="<?php echo BASE_URL; ?>resources/img/payment-method/gcash.svg" id="gcash" alt="GCash"
                            class="payment-icon">
                        <img src="<?php echo BASE_URL; ?>resources/img/payment-method/banktransfer.svg"
                            id="banktransfer" alt="Bank Transfer" class="payment-icon">
                    </div>
                </div>
            </div>


            <div class="col-12 col-lg-4 d-flex justify-content-end">
                <div class="footer-para w-100" style="margin-top:43px;">
                    <div class="contact-social-icon pb-20">
                        <ul class="social-icons mb-0">
                            <li><a target="_blank" href="https://www.facebook.com/WeTalkSingapore/"
                                    class="facebook-bg-hvr"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            </li>
                            <li><a target="_blank" href="https://www.youtube.com/channel/UCvJCo3FkTHxnedBgAvbWEGw"
                                    class="twitter-bg-hvr"><i class="fab fa-youtube" aria-hidden="true"></i></a> </li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/wetalk-education-corp/"
                                    class="linkedin-bg-hvr"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                            </li>
                            <li><a target="_blank" href=" https://www.instagram.com/wetalk.sg/"
                                    class="instagram-bg-hvr"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>

                    <ul class="footer-menu" style="margin-top:15px">
                        <!-- <li><a href="#home">Home</a></li>
                        <li><a href="#services">Linguistics</a></li>
                        <li><a href="#about">Wetalk Courses</a></li>
                        <li><a href="#about">Teachers</a></li>
                        <li><a href="#about">Science</a></li>
                        <li><a href="#about">Chinese Culture Learning</a></li> -->
                        <li style="display: list-item"><a href="<?php echo BASE_URL; ?>service/" target="_blank">Terms
                                of Service 服务条款</a></li>
                        <!-- <li style="float: right;"><a href="#contact">|</a></li> -->
                        <li style="display: list-item"><a href="<?php echo BASE_URL; ?>privacy/" target="_blank">Privacy
                                Policy 隐私协议</a></li>
                        <li style="display: list-item"><a href="<?php echo BASE_URL; ?>payment-policy/"
                                target="_blank">Payment Policy 支付协议</a></li>
                    </ul>

                </div>


            </div>


        </div>

        <div align="center">
            <hr>


            </br>
            <p class="copyright-para">Copyright &copy; WeTalk Education Centre Pte Ltd
                众语国际教育咨询有限公司 2026</p>

        </div>

    </div>




</footer>
<!--End Footer-->


<script>
    // Get the popup
    var popup = document.getElementById("popupForm");

    // Get all the "MORE" links
    var moreLinks = document.querySelectorAll(".more-link");

    // Get the <span> element that closes the popup
    var closeBtn = document.getElementsByClassName("close")[0];

    // Add click event listeners to all "MORE" links
    moreLinks.forEach(function (link) {
        link.onclick = function (event) {
            event.preventDefault();
            // Get the data-id attribute of the clicked link
            var companyId = this.getAttribute('data-id');
            // Set the data-id to the hidden input in the popup form
            document.getElementById('course').value = companyId;
            // Display the popup
            popup.style.display = "block";
        }
    });

    // When the user clicks on <span> (x), close the popup
    closeBtn.onclick = function () {
        popup.style.display = "none";
    }

    // When the user clicks anywhere outside of the popup, close it
    window.onclick = function (event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }
</script>



<!-- Start of LiveChat (www.livechat.com) code -->
<!-- <script>
    window.__lc = window.__lc || {};
    window.__lc.license = 11860770;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";
    ; (function (n, t, c) { function i(n) { return e._h ? e._h.apply(null, n) : e._q.push(n) } var e = { _q: [], _h: null, _v: "2.0", on: function () { i(["on", c.call(arguments)]) }, once: function () { i(["once", c.call(arguments)]) }, off: function () { i(["off", c.call(arguments)]) }, get: function () { if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load."); return i(["get", c.call(arguments)]) }, call: function () { i(["call", c.call(arguments)]) }, init: function () { var n = t.createElement("script"); n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js", t.head.appendChild(n) } }; !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e }(window, document, [].slice))  
</script> -->
<!--<noscript><a href="https://www.livechat.com/chat-with/11860770/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
 End of LiveChat code -->

<!-- Botpress Script -->
<script src="https://cdn.botpress.cloud/webchat/v3.2/inject.js" defer></script>
<script src="https://files.bpcontent.cloud/2025/09/24/08/20250924084540-B5Q8A59C.js" defer></script>