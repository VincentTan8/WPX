<style>
    .main-container {
        display: flex;
        gap: 169px;
        padding: 30px 0;
        margin-left: 240px;
        margin-right: 240px;
    }

    .left-container {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 50px;
        width: 800px;
        justify-content: space-between;
    }

    .left-header-wrap {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        width: 100%;
    }

    .course-left-title {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: 700;
        width: 622px;
        text-align: left;
    }

    .left-rating {
        width: 212px;
        height: 21px;
        display: flex;
        align-items: center;
        gap: 6px;
        justify-content: flex-end;
    }

    .left-rating-star {
        color: #FF9415;
        font-size: 18px;
        line-height: 1;
    }

    .left-rating-text {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #6E6C6C;
        line-height: 1;
    }

    .course-left-image-wrapper {
        position: relative;
        width: 100%;
    }

    .course-left-image {
        width: 100%;
        border-radius: 10px;
        display: block;
    }

    .course-left-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: white;
        color: #2D2B32;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 400;
        padding: 6px 16px;
        border-radius: 50px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .course-left-description {
        font-size: 16px;
        line-height: 1.6;
        text-align: left;
    }

    .course-section {
        margin-top: 20px;
    }

    .course-section h3 {
        font-family: 'Poppins', sans-serif;
        font-size: 22px;
        text-align: left;
        font-weight: 700;
        margin-bottom: 30px;
    }

    .goal-item {
        display: flex;
        align-items: flex-start;
        gap: 30px;
        margin-bottom: 30px;

    }

    .goal-item img {
        width: 20px;
        height: 20px;
        margin-top: 4px;
    }

    .right-container {
        width: 472px;
        height: 709px;
        flex-shrink: 0;
    }

    .tab-toggle {
        display: flex;
        justify-content: space-between;
        position: relative;
        margin-bottom: 20px;
        height: 60px;
        z-index: 2;
    }

    .toggle-button {
        flex: 1;
        padding: 15px 0;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: 700;
        background-color: transparent;
        border: none;
        cursor: pointer;
        opacity: 0.25;
        color: #2D2B32;
        z-index: 2;
        position: relative;
    }

    .toggle-button.active {
        color: white;
        opacity: 1;
    }

    .tab-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 191px;
        z-index: 1;
        overflow: hidden;
        pointer-events: none;
    }

    .tab-bg svg {
        width: 100%;
        height: 100%;
        display: none;
        object-fit: cover;
    }

    .tab-bg svg.active {
        display: block;
    }

    .tab-content {
        background: #fff;
        box-shadow: 0px 0px 26px 0px rgba(0, 51, 102, 0.25);
        border-radius: 10px;
        padding: 30px;
        margin-top: -30px;
        position: relative;
        z-index: 10;
    }

    .section-label {
        font-weight: 600;
        margin-bottom: 10px;

    }

    .option-group {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-bottom: 30px;
    }

    .option {
        padding: 10px 20px;
        border-radius: 30px;
        border: 1px solid #ccc;
        text-align: center;
        cursor: pointer;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 500;
    }

    .option.selected {
        background: #FFE9A1;
        border: none;
    }

    .total {
        font-weight: 700;
        font-size: 18px;
        margin-bottom: 20px;
    }

    .total span {
        color: red;
    }

    .try-now {
        background: #FFB800;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 600;
        padding: 15px 0;
        width: 100%;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.3s ease, opacity 0.3s ease;
    }

    .try-now:disabled {
        background: #ccc;
        color: #666;
        cursor: not-allowed;
        opacity: 0.7;
    }

    .mobile-only {
        display: none;
    }

    .footer-left {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 5px;
    }

    .dollar-box {
        width: 22px;
        height: 22px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        stroke-width: 2px;
        stroke: #2D2B32;
    }

    .currency-label {
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        font-weight: 600;
        color: #2D2B32;
    }

    .currency-popup {
        display: none;
    }

    .pricing-modal {
        display: none;
    }

    .pricing-modal.active {
        display: flex;
    }

    @media (max-width: 1710px) {
        .main-container {
            margin-left: 120px;
            margin-right: 120px;
        }
    }


    @media (max-width: 768px) {
        .main-container {
            flex-direction: column;
            gap: 30px;
            margin: 0;
            padding: 20px;
        }



        .mobile-only {
            display: flex;
        }

        .left-container {
            width: 100%;
            gap: 30px;
        }

        .right-container {
            display: none;
        }

        .footer-fixed {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: white;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .try-now-mobile {
            background: #FFB800;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            width: 325px;
            border-radius: 5px;
        }

        .pricing-modal {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #fff;
            box-shadow: 0 -2px 30px rgba(0, 0, 0, 0.3);
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            z-index: 2000;
            padding: 30px 20px;
            display: none;
            flex-direction: column;
            gap: 20px;
        }

        .pricing-modal .modal-inner {
            position: relative;
        }

        .pricing-modal.active {
            display: flex;
        }

        .pricing-close {
            position: absolute;
            top: -25px;
            right: 20px;
            font-size: 20px;
            font-weight: bold;
            background: none;
            border: none;
            cursor: pointer;
            color: #2D2B32;
        }

        .pricing-modal .option-group {
            flex-direction: row;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: flex-start;
        }

        .pricing-modal .course-type-option {
            flex: 1 1 calc(33.333% - 10px);
            background: white;
            color: #2D2B32;
            border: 1px solid #ccc;
            text-align: center;
        }


        .pricing-modal .course-type-option.selected {
            background: #4170FE;
            color: white;
            border: none;
        }

        .pricing-modal .option-group .option {
            flex: 1 1 calc(33.333% - 10px);

            text-align: center;
        }

        .pricing-modal .option-group[data-group="teaching"] .option {
            flex: 1 1 calc(50% - 10px);

        }

        .pricing-modal .option-group[data-group="course-type"] .option.selected {
            background: #4170FE;
            color: white;
            border: none;
        }

        .pricing-modal .sessions-group .option {
            flex: 1 1 calc(50% - 10px);
            max-width: calc(50% - 10px);
            text-align: center;
        }

        .section-label {
            text-align: left;
        }

        .modal-bottom-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 10px;
            gap: 10px;
        }

        .modal-bottom-row .footer-left {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .modal-bottom-row .dollar-box {
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            stroke-width: 2px;
            stroke: #2D2B32;
        }

        .modal-bottom-row .currency-label {
            font-family: 'Poppins', sans-serif;
            font-size: 12px;
            font-weight: 600;
            color: #2D2B32;
        }

        .modal-bottom-row .try-now {
            background: #FFB800;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: 600;
            padding: 12px 24px;
            border-radius: 8px;
            cursor: pointer;
            width: 325px;
            border-radius: 5px;
        }

        .goal-item div {
            text-align: left;
        }


        .left-header-wrap {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .course-left-title {
            width: 100%;
        }

        .left-rating {
            justify-content: flex-start;
            width: 100%;
        }

        .currency-popup {
            position: fixed;
            bottom: 80px;
            left: 20px;
            background: white;
            box-shadow: 0px 4px 19px 0px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            z-index: 3000;

            width: 116px;
            height: 178px;
            display: none;
            flex-direction: column;
            gap: 12px;
        }


        .currency-popup.active {
            display: flex;
        }

        .currency-popup-inner {
            position: relative;
        }

        .close-currency {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #2D2B32;
            color: white;
            border: none;
            font-size: 16px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            cursor: pointer;
        }

        .currency-title {
            font-size: 16px;
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
        }

        .currency-options {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .currency-option {
            padding: 10px 15px;
            border-radius: 8px;
            background: #F3F3F3;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            cursor: pointer;
            transition: 0.2s;
        }

    }
</style>

<div class="main-container">
    <div class="left-container">
        <div class="left-header-wrap">
            <div class="course-left-title" id="course-title"></div>
            <div class="left-rating">
                <span class="left-rating-star">★★★★★</span>
                <span class="left-rating-text">5.0 (20)</span>
            </div>
        </div>

        <div class="course-left-image-wrapper">
            <img src="" alt="Course Image" class="course-left-image" id="course-img">
            <div class="course-left-badge" id="course-thumbnail"></div>
        </div>

        <div class="course-left-description" id="course-subtitle"></div>
        <!-- Todo use this to populate course details -->
        <div id="course-details-container"></div>

        <div class="course-section">
            <h3>Learning Goals</h3>
            <div id="goal-container">

            </div>
        </div>

        <div class="course-section">
            <h3>Course Description</h3>
            <div class="course-left-description" id="course-description"></div>
        </div>
        <div class="course-section">
            <h3>Class Hours</h3>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div id="course-class-hours">22 class hours in total</div>
            </div>
        </div>

        <div class="course-section">
            <h3>Course Activities</h3>
            <div id="activity-container"></div>
            <!-- <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div>Storytelling</div>
            </div>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div>Painting</div>
            </div>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div>Arts and Crafts</div>
            </div>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div>Writing Activities</div>
            </div>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div>Singing and Dancing</div>
            </div> -->
        </div>

        <div class="course-section">
            <h3>Suitable For</h3>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div style="text-align:left;" id="course-suitable-for"></div>
            </div>
        </div>

        <div class="course-section">
            <h3>Course Features</h3>
            <div id="feature-container"></div>
            <!-- <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div style="text-align:left;"><span style="font-weight:700;">Featured Learning content:</span>Through
                    the Chinese classic Three
                    Character Classic for enlightenment, the course can correct children's pronunciation in the forms of
                    reading and chanting, promote their spoken Chinese, enhance their memory, and stimulate their
                    perception of rhythm</div>
            </div>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div style="text-align:left;"><span style="font-weight:700;">Professional course design:</span>According
                    to the characteristics
                    of
                    students' physical and mental development, the course selects and compiles themes from children's
                    textbooks, allowing students to learn by starting from the simple life knowledge. This goes with the
                    laws of children's learning and growth.</div>
            </div>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div style="text-align:left;"><span style="font-weight:700; text-align:left;">Interesting interactive
                        learning:</span>The course
                    is taught in such
                    interactive forms as games, performances, songs, and handwork, allowing students to learn in a happy
                    and relaxed atmosphere.</div>
            </div>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div style="text-align:left;"><span style="font-weight:700;">Complete closed-loop learning:</span>After
                    learning in class,
                    students will be given real-time feedback. Key points of the course and related audio and video will
                    also be sent to students to help them consolidate and review the knowledge.</div>
            </div> -->
        </div>

        <div class="course-section">
            <h3>Course Type</h3>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div id="course-type"></div>
            </div>
        </div>

        <div class="course-section">
            <h3>Course Start Date</h3>
            <div class="goal-item">
                <img src="../resources/img/course/check-yellow-list.png" alt="check">
                <div id="course-start-date">January 1, 2023</div>
            </div>
        </div>
    </div>

    <div class="right-container">
        <div class="tab-toggle">
            <button class="toggle-button active" onclick="setTab('online')">Online</button>
            <button class="toggle-button" onclick="setTab('onsite')">On-Site</button>
            <div class="tab-bg">
                <svg id="bg-online" class="active" xmlns="http://www.w3.org/2000/svg" width="472" height="162"
                    viewBox="0 0 472 162" fill="none">
                    <path
                        d="M236.333 41C236.333 46.5228 240.81 51 246.333 51H462C467.523 51 472 55.4772 472 61V152C472 157.523 467.523 162 462 162H9.99999C4.47714 162 0 157.523 0 152V51.1665C0 51.0745 0.0745463 51 0.166504 51V51C0.258461 51 0.333008 50.9255 0.333008 50.8335V10C0.333008 4.47715 4.81016 0 10.333 0H226.333C231.856 0 236.333 4.47715 236.333 10V41Z"
                        fill="#4170FE" />
                </svg>
                <svg id="bg-onsite" xmlns="http://www.w3.org/2000/svg" width="472" height="162" viewBox="0 0 472 162"
                    fill="none">
                    <path
                        d="M472 152C472 157.523 467.523 162 462 162H9.99999C4.47714 162 0 157.523 0 152V61C0 55.4772 4.47715 51 10 51H226C231.523 51 236 46.5228 236 41V10C236 4.47715 240.477 0 246 0H462C467.523 0 472 4.47715 472 10V152Z"
                        fill="#4170FE" />
                </svg>
            </div>
        </div>

        <div class="tab-content">
            <div class="section-label">Way of teaching:</div>
            <div class="session-type-options option-group"></div>
            <div class="section-label">Numbers of Sessions:</div>
            <div class="num-session-options option-group"></div>
            <div class="total">Total: <span class="price-total"></span></div>
            <button class="try-now" disabled>Try now</button>
        </div>
    </div>
</div>
<div class="footer-fixed mobile-only">
    <div class="footer-left">
        <div class="dollar-box">

            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
                <path
                    d="M6.66683 5.23242L6.6295 5.09342C6.48775 4.56196 6.16061 4.09015 5.70006 3.75296C5.23952 3.41578 4.67198 3.23256 4.08763 3.23242H3.53083C3.07458 3.23255 2.63262 3.38161 2.28085 3.654C1.92908 3.92639 1.68946 4.30511 1.60314 4.72511C1.51682 5.14512 1.58919 5.58019 1.80782 5.95562C2.02645 6.33104 2.3777 6.62338 2.80123 6.78242L5.1991 7.68242C5.62263 7.84147 5.97387 8.1338 6.1925 8.50923C6.41113 8.88465 6.4835 9.31973 6.39718 9.73973C6.31086 10.1597 6.07124 10.5385 5.71947 10.8108C5.3677 11.0832 4.92574 11.2323 4.4695 11.2324H3.91376C3.32923 11.2325 2.76145 11.0494 2.30068 10.7122C1.83992 10.375 1.51262 9.90305 1.37083 9.37142L1.3335 9.23242M4.00016 1.23242V3.23242M4.00016 11.2324V13.2324"
                    stroke="#2D2B32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </div>
        <div class="currency-label">Currency</div>
    </div>
    <button class="try-now-mobile" onclick="openPricingModal()">Try now</button>
</div>

<!-- Currency popup -->
<div class="currency-popup" id="currencyPopup">
    <div class="currency-popup-inner">

        <div class="currency-options">
            <div class="currency-option">SGD</div>
            <div class="currency-option">CNY</div>
            <div class="currency-option">PHP</div>
            <div class="currency-option">USD</div>
        </div>
    </div>
</div>

<div class="pricing-modal" id="pricingModal">
    <div class="modal-inner">
        <button class="pricing-close" onclick="closePricingModal()">×</button>
        <div class="section-label"></div>
        <div class="option-group">
            <div class="option course-type-option selected" data-group="course-type">Online</div>
            <div class="option course-type-option" data-group="course-type">On-Site</div>
            <div class="option course-type-option" data-group="course-type">To-Home</div>
        </div>
        <div class="section-label">Way of teaching:</div>
        <div class="session-type-options option-group"></div>
        <div class="section-label">Number of Sessions:</div>
        <div class="num-session-options option-group sessions-group"></div>

        <div class="total">Total: <span class="price-total"></span></div>
        <div class="modal-bottom-row">
            <div class="footer-left">
                <div class="dollar-box">
                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none">
                        <path
                            d="M6.66683 5.23242L6.6295 5.09342C6.48775 4.56196 6.16061 4.09015 5.70006 3.75296C5.23952 3.41578 4.67198 3.23256 4.08763 3.23242H3.53083C3.07458 3.23255 2.63262 3.38161 2.28085 3.654C1.92908 3.92639 1.68946 4.30511 1.60314 4.72511C1.51682 5.14512 1.58919 5.58019 1.80782 5.95562C2.02645 6.33104 2.3777 6.62338 2.80123 6.78242L5.1991 7.68242C5.62263 7.84147 5.97387 8.1338 6.1925 8.50923C6.41113 8.88465 6.4835 9.31973 6.39718 9.73973C6.31086 10.1597 6.07124 10.5385 5.71947 10.8108C5.3677 11.0832 4.92574 11.2323 4.4695 11.2324H3.91376C3.32923 11.2325 2.76145 11.0494 2.30068 10.7122C1.83992 10.375 1.51262 9.90305 1.37083 9.37142L1.3335 9.23242M4.00016 1.23242V3.23242M4.00016 11.2324V13.2324"
                            stroke="#2D2B32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="currency-label">Currency</div>
            </div>
            <button class="try-now" disabled>Try now</button>
        </div>

    </div>
</div>

<script>
    function setTab(tab) {
        const targetBtn = document.querySelector(`.toggle-button[onclick="setTab('${tab}')"]`);
        if (!targetBtn) return;

        document.querySelectorAll('.toggle-button').forEach(btn => btn.classList.remove('active'));
        targetBtn.classList.add('active');

        document.querySelectorAll('.tab-bg svg').forEach(svg => svg.classList.remove('active'));
        const svg = document.getElementById('bg-' + tab);
        if (svg) svg.classList.add('active');
    }

    function openPricingModal() {
        document.getElementById('pricingModal').classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closePricingModal() {
        document.getElementById('pricingModal').classList.remove('active');
        document.body.style.overflow = '';
    }

    document.querySelector('.footer-left').addEventListener('click', function (e) {
        e.stopPropagation();
        document.getElementById('currencyPopup').classList.add('active');
    });

    function closeCurrencyPopup() {
        document.getElementById('currencyPopup').classList.remove('active');
    }

    document.addEventListener('click', function (e) {
        const popup = document.getElementById('currencyPopup');
        const trigger = document.querySelector('.footer-left');

        if (!popup.contains(e.target) && !trigger.contains(e.target)) {
            popup.classList.remove('active');
        }
    });
</script>