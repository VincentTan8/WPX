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

            <h4>WeTalk Privacy Policy</h4>

            <p>We (hereinafter referred to as "WeTalk" or" We ") attach great importance to the protection of users'
                personal information.We may collect and use information about you when you download, open,
                browse, register, log in, or use the WeTalk website, software, and related products and
                services.Through this Privacy Policy, we wish to explain to you how we will collect, use, store and
                share this information, and how we will provide you with access to, update, control and protect this
                information.This Privacy Policy is closely related to the WeTalk products and/or services you use. We
                hope that you will read it carefully and, when necessary, make the choices you deem appropriate
                according to the guidelines of this Privacy Policy.In this Privacy Policy, we try to use a concise
                description of the relevant technical terms so that you can understand.If you do not agree with the
                basic business functions of this Privacy Policy, it may affect the effect of the corresponding products
                or services provided to you.By using our products and services, you consent to us collecting, using,
                storing and sharing your relevant information in accordance with this Privacy Policy.When this Privacy
                Policy is updated, we will publish the latest version on the WeTalk platform. Should you have any
                questions about this Privacy Policy or related matters, you can contact us through the customer
                service hotline on the homepage of WeTalk website or through the online consultation. </p>

            <p><b>1.How do we collect and use your personal information</b></p>

            <p><b>1.1In order to ensure the normal operation of basic business functions such as user
                    registration, course service, online course, customer service, gift sending package,
                    teaching materials and other functions as well as the extended business functions of
                    personalized marketing and providing personalized user experience, we will collect
                    and use the following information related to you.If you do not provide the relevant
                    information, you may not be able to register as our user, use and enjoy some of our
                    products and services, or be unable to achieve the intended effect of the related
                    products and services. </b></p>

            <p><b>(1)Basic business functions</b></p>

            <p>a)User registration. To use any WeTalk product or service, you must become a full WeTalk
                member.When you sign up for a WeTalk User Center account or use a WeTalk product or service, you
                will need to provide us with your mobile phone number, email address, student age, and other
                information.We'll encrypt the data and store it on a secure server.</p>
            <p>b)Course services. In order to provide you with complete products and exclusive services, WeTalk will
                ask you to provide the name, gender, language and Wechat information of the student. WeTalk needs
                these data in order to quickly and easily provide you with relevant courses and to continuously
                optimize the service to better match your needs. At the same time, according to the relevant laws and
                policies, you need to improve the information of students in the personal center after login, and
                provide the real name of students.</p>
            <p>c)Online courses. In order for you to successfully complete the online course, you need to check
                whether the network, camera and microphone functions of your device are normal before class. When
                using these functions, you need to enable the access rights of the camera (camera) and microphone
                functions on the device to us. You can use these functions to communicate with the course teacher
                online and interact with the video.In order to provide you with perfect products and exclusive services,
                we will record and video the courses when you use our products or services.It can be replayed
                periodically after the course.By enabling these permissions, you authorize us to collect and use these
                personal information to achieve the above functions.</p>
            <p>d)Customer service. In order to ensure the security of your account, we may use your account
                information to verify your identity when providing customer service to you. When you need to provide
                customer service consultation or after-sales service, we will inquire your order information to help you
                solve the order problem.When you communicate and consult with our customer service, we will record
                the call.</p>
            <p>e)Sending educational materials. If you use our services and receive any educational materials, gift
                packages, or gift exchange through any event rules published on the WeTalk platform, we will collect
                your consignee information, contact address, and mobile phone number in order to send you
                educational materials or gifts.</p>
            <p>f)Local caching of service data.In order to provide you with comprehensive products and services, WeTalk
                will obtain local storage rights on your device for product and service related storage and
                implementation of local caching of course materials data.</p>

            <p><b>(2)Expand service functions</b></p>

            <p>a)Personalized marketing. With your prior consent, we will ask you to provide your or your trainee's
                personal information, including occupation, education, age and gender information, in order to
                enhance the effectiveness of WeTalk products, services and publicity. WeTalk may use this personal
                information to produce overall reports about the user base. Such personal information and overall
                reports will be anonymous and will not contain information that identifies you or your students. Based
                on the needs of marketing activities, we will obtain your address book information with your
                authorization, so that you can share related activities with your contacts. You can turn off and cancel
                such authorization at anytime through your device system Settings.</p>

            <p>b)Provide personalized user experience</p>

            <p>With your prior consent, we will analyze your use of our products and services, optimize advertising
                purposes, automatically collect your information or obtain system permissions, including but not
                limited to: equipment or software information, Including the configuration information provided by your
                mobile device, web browser or other programs used to access our products or services, the version
                and device class code used by the mobile device, and information related to the location of the device
                (IP address, GPS location and WIAN access point, Bluetooth and base station sensor information
                capable of providing relevant information);Information searched or viewed while using our Products or
                services, including the web search terms you use, the addresses of the social media pages you visit,
                and other information and content details that you view or request to provide while using our Products
                or Services;With your authorization and consent, write relevant course information into your calendar
                when using our products or services.When using our products or services, if you want to upload
                pictures and videos, we will obtain the camera permission of your device with your authorization and
                consent.In order to facilitate you to contact us, in the case of your authorization and consent, we will
                obtain the permission to write your device into the address book, in order to achieve our customer
                service phone number into your address book;When using our products or services, with your
                authorization and consent, we will respectively apply for access to your device's address book access,
                device location access and other information. Information contained in the content you share through
                our products or services, including the date, time or location of photos taken or uploaded, audio or
                video recordings.You should be aware that the above functions are the extended business services we
                provide to you.We will enable the above functions with your consent. You can choose not to provide us
                with the personal information related to the implementation of the above functions, or refuse to open
                the corresponding system permissions, in which case you will not be able to experience the above
                services.At the same time, after you enable the above business expansion function, you can refuse or
                close the relevant permissions through the system setting management at anytime. If you close the
                permissions, you will cancel the authorization. We will not continue to collect and use your personal
                information, nor will we be able to provide you with the services or functions corresponding to this
                authorization. If you continue to use these functions you will need to re-enable the access rights.Your
                decision to close your privileges will not affect any previous processing of personal information based
                on your authorization.We hereby guarantee that if you do not choose the above extended service
                functions, it will not affect your normal use of the basic service functions provided by us.</p>

            <p><b>1.2 For the security of your account, we have set up the WeTalk User Center, where your
                    information as follows will be displayed: </b></p>

            <p>The types of information to be synchronized include: the mobile phone number, picture and nickname
                you used when registering on our platform;Business information such as orders generated when using
                the service and the generated learning information, including the students' course arrangements,
                course reports, learning tasks, etc.; </p>

            <p><b>1.3In order to provide you with more professional and secure basic business functions
                    and additional business functions, the third-party software development kit (SDK) is
                    embedded in our platform for technical needs. The third-party SDK embedded in our
                    platform and the information collected or shared with the third party are as follows: </b></p>

            <p>(1)Alicloud BualvSDK: In order to improve the stability of the service and quickly and accurately locate
                problems after the breakdown of related services, Alicloud Bualv will collect and share your basic
                device information during your use of the service, including device IID, system version and device
                model;</p>

            <p>(2)Bugtags SDK: If you have completed the online course learning in the iOS system, in order to
                improve the stability of the service and facilitate you to accurately locate problems after the crash of
                related services, Bugtags SDK will collect your device information in the process of using the service
                (UDID and IP information) and your operation behavior records (including click behavior, web browsing
                record, user operation record);</p>

            <p>(3)QQ Sharing SDK: In order to enable you to share on QQ platform, QQ sharing SDK will collect your
                device information, including device model and system version;</p>

            <p>(4)Alibaba Push SDK: If you have completed the online course learning in the Android system, in order
                to obtain the upload of remote configuration support media resources and enable you to achieve
                better push function of mobile applications, Alibaba push SDK will collect your device basic
                information during your use of the service, including device version number, device model and system
                version. Address, IMEI number, and MSI number of the device.</p>

            <p>(5)The above third party SDK will collect your personal information according to the product functions.
                We will only authorize your corresponding personal information to the above third party plug-in when
                you authorize the opening of relevant functions or when you actively use relevant functions and we
                give you sufficient prompts.</p>

            <p><b>2.How do we use Cookies and similar technologies</b></p>

            <p>We or our third party partners may collect and use your information through cookies and store such
                information as log information.We use our own cookies for the purpose of providing you with a more
                personalized user experience and product or service and for the following purposes:</p>

            <p>(1)Remember your identity. Cookies help us identify you as one of our registered users or save your
                preferences or other information that you provide to us;</p>

            <p>(2)Analyze your use of our products or services.We use cookies to know what activities you use our
                products or services for, or which websites or products or services are most popular with you;</p>

            <p>(3)Advertising optimization. Cookies and Webbeacons help us provide you with advertisements
                related to our products or services based on your information.</p>

            <p>When we use cookies for the above purposes, we may use the non-personally identifiable information
                collected through cookies to analyze how users use our products or services and for our advertising
                services.You can set to reject or manage cookies through your browser.However, please note that if
                you disable cookies or webbeacon, you may not be able to enjoy the best service experience and
                some products or services may not be used normally.In order to confirm your usage pattern and
                website usage, our website will record the address of your device and the type of browser, as well as
                the browsing behavior and operation behavior of users so as to help us improve the design and
                formatting of WeTalk.</p>

            <p><b>3.How do we store your personal information</b></p>

            <p>Your personal information will be stored for the shortest time necessary to achieve the purpose of the
                business function. After the retention period, the personal information will be deleted or
                anonymized.Personal information collected and generated by our operations within the territory of the
                People's Republic of China shall, in principle, be stored within the territory of the People's Republic
                of
                China, except as follows :</p>

            <p>(1)As expressly stipulated by laws and regulations;</p>
            <p>(2)Obtain your express authorization.</p>
            <p>In view of the above circumstances, we will ensure the security protection of your personal information
                in accordance with laws and regulations and this Privacy Policy.</p>

            <p><b>4.How do we share, transfer, and publicly disclose your personal information</b></p>

            <p>(1) Sharing</p>
            <p>We will not share your personal information with any company, organization or individual other than
                our company, except with your express consent.Currently, we seek your consent to share personal
                information if:</p>

            <p>a) Our associated companies</p>
            <p>We will share your course video information with our affiliates for the purpose of unified group
                management and the principle of necessary and reasonable so as to realize basic business functions
                and help us design new business models, evaluate and improve our services, and enhance user
                experience.For this purpose, your personal information may be transmitted to our affiliates.Our
                affiliates will securely process service recipients' information in accordance with applicable laws such
                as data protection law.</p>

            <p>b) Partners</p>
            <p>We will share your personal information with partners based on the business promotion purpose and
                the necessary and reasonable principle so as to jointly promote and publicize the products, services or
                activities that you may be interested in, analyze and understand the needs of users through big data
                analysis and other means, design new business models, evaluate and improve our services, improve
                user experience, etc.Any such sharing is subject to confidentiality and security obligations.</p>

            <p>c) Our service provider</p>

            <p>We may appoint third party service providers to manage or operate certain functions or services on
                our behalf and the proper execution of such functions or services may require the transfer of the
                information submitted by you.For example, we will share your consignee information, address
                information and mobile phone number to logistics companies based on distribution needs to complete
                the delivery of goods;We may also provide your personal information to the service provider based on
                necessary and reasonable principles to complete or improve the service provided for you.</p>

            <p>d) We may share your personal information in accordance with laws and regulations or mandatory
                requirements of competent government departments. For companies, organizations and individuals
                sharing your personal information, we will sign strict confidentiality agreements with them, requiring
                them to process personal information in accordance with our requirements, this privacy policy and any
                other relevant confidentiality and security measures.</p>

            <p>(2) Transfer</p>

            <p>We will not transfer your personal information to any company, organization or individual except in the
                following cases:</p>

            <p>a) Transfer with express consent: With your express consent, we will transfer your personal
                information to other parties;</p>

            <p>b) In the case of merger, acquisition or bankruptcy liquidation, if personal information transfer is
                involved, we will require the new company or organization holding your personal information to
                continue to be bound by this privacy policy; otherwise, we will require the company or organization to
                seek authorization from you again.</p>

            <p>(3) Public disclosure</p>

            <p>We will only publicly disclose your personal information under the following circumstances:</p>

            <p>a) With your express consent;</p>

            <p>b) Disclosure based on law: We may publicly disclose your personal information when required by law,
                legal procedures, lawsuits or government authorities.</p>

            <p><b>5. Your rights</b></p>

            <p>(1) Your rights to your personal information</p>
            <p>In accordance with the relevant laws, regulations and standards of China, as well as the common
                practices of other countries and regions, we guarantee you to exercise the following rights with your
                personal information</p>
            <p>a) Access to your personal information</p>

            <p>You have the right to access your personal information, except for the exceptions provided by laws
                and regulations.If you want to exercise data access, you can view or modify account Settings and
                information by logging into your account.</p>
            <p>b) Correct your personal information</p>

            <p>When you find that there is an error in your personal information processed by us, you have the right
                to request us to make a correction.You may apply for a correction.We will respond to your request for
                correction within 15 days.</p>
            <p>c) Delete your personal information</p>

            <p>You may request us to delete your personal information under the following circumstances: If our
                handling of personal information violates laws and regulations:</p>

            <p>If we collect and use your personal information without your consent: if our behavior of processing
                personal information violates the agreement with you;</p>

            <p>If you no longer use our products or services, or if you log out of your WeTalk User Center account: If
                we terminate our products or services</p>

            <p>You can make your removal request through the customer service hotline on the WeTalk homepage.If
                we decide to respond to your removal request, we will also notify the entities from whom we have
                obtained your personal information and request them to remove it in a timely manner, unless otherwise
                required by law or regulation or if such entities are independently authorized by you.When you delete
                information from our services, we may not immediately delete the corresponding information from the
                backup system, but we will delete the information when the backup is updated.</p>

            <p>d) Change the scope of your authorized consent</p>

            <p>Each basic business function requires some basic personal information to perform.For the collection
                and use of personal information collected for the purpose of expanding business functions, you can
                give or withdraw your authorization consent at anytime, and you can manage your authorization
                through the device system permission Settings.After you withdraw your consent, we will no longer
                interpret the corresponding personal information.However, your decision to withdraw your consent will
                not affect the prior processing of personal information based on your authorization.</p>

            <p>e) The subject of personal information cancels the account</p>

            <p>You can use the customer service hotline on the WeTalk homepage to apply for cancellation of a
                previously registered WeTalk User Center account.We will handle the corresponding cancellation
                procedures for you after verification.After your WeTalk User Center account is closed, we will stop
                providing you with any WeTalk products and WeTalk services and delete your personal information
                upon your request, except as otherwise required by laws and regulations.</p>

            <p>f) Responding to your request</p>

            <p>For security purposes, you may need to provide a written request or otherwise prove your identity.We
                may ask you to verify your identity before processing your request.We'll give you a reply in about
                fifteen working days.If you are not satisfied, you can complain through the customer service hotline on
                the homepage of WeTalk website or through the online consultation.For your reasonable request, we
                do not charge fees in principle, but for repeated requests beyond the reasonable limit, we will charge a
                certain cost according to the situation.We may reject requests that are unnecessarily repetitive,
                require too much technology (e.g., development of new systems or fundamental changes to existing
                practices), pose a risk to the legal rights of others, or are highly impractical (e.g., involving
                information
                stored on individual tapes).</p>

            <p><b>6. Information security</b></p>

            <p>We retain your personal information only for the purposes stated in this Privacy Policy and as long as
                permitted by laws and regulations.</p>

            <p>To ensure the security of your information, WeTalk will take the steps reasonably necessary under the
                current state of the art to protect your information, take physical technical and administrative
                security
                measures to reduce the risk of loss, misuse, unauthorized access, disclosure and change, including
                but not limited to transport layer data encryption, firewall and encrypted storage. Physical access
                control and information access authorization control.To this end, we have put in place security
                procedures to protect your information from unauthorized access.WeTalk also insists on using a
                password when logging in to prevent unauthorized access to your profile and academic records.When
                you use WeTalk products or services, please keep your account and password safe, we will use your
                account and password to identify you. Once you disclose your WeTalk account and password, you may
                lose your information and there may be legal consequences against you.If you find that your WeTalk
                account and password have been or will be leaked for any reason, please contact our customer
                service immediately so that we can take appropriate measures.However, until we are aware of such a
                situation and take action within a reasonable time, we are not responsible for it.In the event of an
                unfortunate personal information security incident, we will inform you according to the requirements of
                laws and regulations: the basic situation and possible impact of the security incident, the disposal
                measures we have taken or will take, the suggestions you can independently prevent and reduce the
                risk, and the remedial measures for you, etc.We will inform you of the relevant information by email,
                phone, push notification and other means. If it is difficult to inform individual information subjects
                one
                by one, we will make announcements in a reasonable and effective way.At the same time, we will also
                be in accordance with the requirements of the regulatory authorities, timely report the disposal of
                personal information security incidents.</p>

            <p><b>7.Protection of children's personal information</b></p>

            <p>We understand that the personal information collected and processed by us may come from minors
                under the age of 14 (" children "). We attach great importance to the protection of children's personal
                information.In this regard, in strict accordance with the Internet Security Law of the People's Republic
                of China, the Regulations on the Online Protection of Children's Personal Information and other
                relevant domestic regulations on the protection of personal information, we fulfill the responsibility
                of
                protection and make the following commitments:</p>

            <p>(1)Children are not allowed to create their own WeTalk User Center accounts without guardian
                consent;</p>

            <p>(2)Before collecting children's personal information, we will remind children and their guardians to read
                this Privacy Policy and inform them of the situations in which we collect and process children's
                personal information, as well as the information security protection measures we have taken;</p>

            <p>(3)We will only collect and process the personal information of children with the consent of the
                guardian of the child, and process such personal information in strict accordance with the law with the
                consent of the guardian or if necessary to protect the child;</p>

            <p>(4)We have provided the children and their guardians with ways to refuse the above collection and
                disposal behavior.Children and their guardians can contact us through the contact information
                attached to Article 11 of this Privacy Policy to express specific intention of rejection. We will handle
                it
                on the basis of good identification.</p>

            <p>(5)Under normal circumstances, we will not collect personal information unrelated to the realization of
                the corresponding functional scenarios described in this Privacy Policy;If, due to business needs,
                collection and processing beyond the agreed purpose and scope are really needed, we will inform the
                children's guardian in detail and obtain their consent.</p>

            <p>(6)We will strictly set the information access rights under different functions to control the scope of
                children's personal information;</p>

            <p>(7)Children and their guardians have the same rights as the subject of personal information described
                in Article 5 of this Privacy Policy;</p>

            <p>(8)Ensure the safety of children's personal information in accordance with domestic personal
                information related laws, regulations and standards, storage requirements and protection measures as
                shown in this Privacy Policy.</p>

            <p>(9)In order to better protect the information of minors, we will appoint a special person to be
                responsible for the protection of children's personal information. Should you have any questions,
                please send email to the contact information attached in Article 11 to contact us.</p>

            <p><b>8.How is your personal information transferred around the world</b></p>

            <p>In principle, personal information collected and generated by us within the People's Republic of China
                will be stored within the People's Republic of China and transferred outside the country only with your
                authorized consent or, in the case of children, with the authorized consent of their guardian.
                At present, when the students receive the course service through the network broadcast, our foreign
                teachers will be exposed to the personal information provided by the students in the course video, in
                order to ensure the interaction effect of the class and the quality of the course.The above class video
                and the personal information contained therein may include your facial recognition data, voice print
                data, nicknames, and other personal information that you voluntarily provided during the class.
                In the above scenario, your personal information may be accessed or obtained by the above foreign
                institutions or individuals.We only transfer the minimum range of personal information necessary to
                achieve the above purposes, and will strictly comply with the requirements of relevant laws and
                regulations to protect your personal information, to ensure the security, confidentiality and integrity
                of
                relevant personal information in cross-border transmission.</p>

            <p><b>9.Scope of application of privacy policy</b></p>

            <p>This Privacy Policy applies to all of our products or services except for certain specific products and
                services.These specific products and services will be subject to specific privacy policies.Specific
                privacy policies for certain specific products and services will be more specific about how we use your
                information in such products and services.The privacy policy of that particular product or service
                forms part of this Privacy Policy.If the privacy policy of the relevant specific service is inconsistent
                with this Privacy Policy, the privacy policy of the specific product or service shall apply.
                Please note that this Privacy Policy only applies to information collected, saved, used, shared and
                disclosed by us.Unless otherwise expressly stated in this Privacy Policy, this Privacy Policy does not
                apply to: </p>

            <p>a)Information collected by third party services (including any third party websites) that are accessed
                through our products or services</p>

            <p>b)Information collected through other companies or agencies that advertise services in our products
                or services.</p>

            <p>Please be aware that if you provide your personal information to a third party when you visit the third
                party's website or use the third party's products or services, your information shall be used in the
                privacy statement or similar policies, and we shall not be liable for any third party's improper use or
                disclosure of the information provided by you, no matter whether you log in or check out the above
                website or software. Or whether its products or services are based on WeTalk links or guides.</p>

            <p><b>10.Privacy policy changes</b></p>
            <p>We may amend the terms of this Privacy Policy in due course. Such amendments form part of this
                Privacy Policy.If such amendments result in a material reduction of your rights under this Privacy
                Policy, we will publish the changes made to this Privacy Policy prior to the effective date of the
                amendments by prominently reminding you on our home page or by other means we deem
                appropriate, including by sending you an email or otherwise notifying you.In such circumstances, by
                continuing to use our products or services, you agree to be bound by this Privacy Policy as amended.</p>

            <p><b>11.How to Contact us</b></p>
            <p>We have set up a dedicated personal information protection department. If you have any questions,
                comments or suggestions about this privacy policy, please contact us through the following
                ways;Email us at support@wetalk.com, use the customer service line on WeTalk's home page or ask us
                online.Normally, we will reply you within 15 working days.If you are not satisfied with our reply,
                especially if our personal information processing behavior damages your legitimate rights and
                interests, you can also seek solutions through the education Commission, network information,
                telecommunications, industry and commerce and other regulatory authorities. </p>

            <p><b>12.About Us</b></p>

            <p>WeTalk is a large transnational educational institution, aiming at inheriting and carrying forward the
                excellent traditional Chinese culture, constructing the dissemination of Chinese culture under the
                international Chinese language education, and providing Chinese wisdom for the development of the
                world and the progress of mankind. You are welcome to join us!</p>

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