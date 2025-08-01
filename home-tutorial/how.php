<style>
    .enroll-container {
        margin: 150px 100px 0;
        font-family: 'Poppins', sans-serif;
    }

    .enroll-container h2 {
        font-size: 36px;
        font-weight: 700;
        color: #2D2B32;
        font-family: 'Poppins', sans-serif;
        margin: 0;
    }

    .enroll-steps {
        margin-top: 100px;
    }

    .enroll-step {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        border-top: 1px solid #CFCFCF;
        min-height: 112px;
        cursor: pointer;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .enroll-step:last-child {
        border-bottom: 1px solid #CFCFCF;
    }

    .enroll-step-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .enroll-step-text {
        font-size: 30px;
        font-weight: 500;
        line-height: 112px;
        letter-spacing: -0.06px;
        color: #444;
        opacity: 0.5;
        transition: all 0.3s ease;
    }

    .enroll-step-icon-wrapper {
        margin-right: 60px;
        position: relative;
        width: 49px;
        height: 49px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .enroll-step-icon-wrapper svg {
        width: 49px;
        height: 49px;
        transition: all 0.3s ease;
    }

    .enroll-step-icon-wrapper svg circle {
        fill: none;
        stroke: #707070;
        stroke-width: 2px;
        opacity: 0.5;
        transition: all 0.3s ease;
    }

    .enroll-step-icon-wrapper .enroll-arrow-icon {
        position: absolute;
        width: 22px;
        height: 22px;
        flex-shrink: 0;
        transition: all 0.3s ease;
    }

    .enroll-step-icon-wrapper .enroll-arrow-icon path {
        fill: #707070;
        opacity: 0.5;
        transition: all 0.3s ease;
    }

    .enroll-details {
        max-height: 0;
        opacity: 0;
        overflow: hidden;
        margin-left: 75px;
        padding-right: 60px;
        transform: translateX(-50px);
        padding-bottom: 0;
        transition:
            max-height 0.3s ease,
            opacity 0.3s ease,
            transform 0.3s ease,
            padding-bottom 0.3s ease;
        will-change: max-height, opacity, transform;
    }

    .enroll-step:hover .enroll-details {
        max-height: 500px;
        opacity: 1;
        transform: translateX(0);
        padding-bottom: 40px;
    }


    .enroll-details ul {
        margin: 0;
        padding: 0 0 0 20px;
        list-style: disc;
        color: #2D2B32;
    }

    .enroll-details ul li {
        list-style: disc !important;
    }


    .enroll-details li {
        font-size: 16px;
        line-height: 28px;
    }

    .enroll-step:hover .enroll-step-text {
        opacity: 1;
        color: #2D2B32;
    }

    .enroll-step:hover .enroll-step-icon-wrapper svg circle {
        fill: #444;
        stroke: #444;
        opacity: 1;
    }

    .enroll-step:hover .enroll-arrow-icon path {
        fill: #fff;
        opacity: 1;
    }

    .enroll-step:hover {
        border-top: 1px solid #2D2B32;
    }

    .enroll-step:hover .enroll-details {
        max-height: 500px;
        opacity: 1;
        transform: translateX(0);
        padding-bottom: 40px;
    }

    @media (max-width: 768px) {
        .enroll-container {
            margin: 50px 0 0;
        }

        .enroll-container h2 {
            font-size: 24px;
        }

        .enroll-step-text {
            font-size: 20px;
            line-height: 40px;
        }

        .enroll-step-icon-wrapper {
            margin-right: 20px;
            width: 36px;
            height: 36px;
        }

        .enroll-step-icon-wrapper svg {
            width: 36px;
            height: 36px;
        }

        .enroll-step-icon-wrapper .enroll-arrow-icon {
            width: 16px;
            height: 16px;
        }

        .enroll-details {
            margin-left: 0;
            padding-right: 0;
            padding-left: 16px;
            font-size: 14px;
        }

        .enroll-details li {
            font-size: 14px;
            line-height: 24px;
        }

        .enroll-step {
            min-height: 60px;
        }

        .enroll-steps {
            margin-top: 60px;
        }
    }
</style>



<div class="enroll-container">
    <h2 id="how-title">How to Enroll in the WeTalk Home Tutorial?</h2>
    <div class="enroll-steps">
        <!-- Step 1 -->
        <div class="enroll-step">
            <div class="enroll-step-top">
                <div id="step-1" class="enroll-step-text">1. Inquiry & Registration</div>
                <div class="enroll-step-icon-wrapper">
                    <svg viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="26.5" cy="27" r="25.5" />
                    </svg>
                    <svg class="enroll-arrow-icon" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.435271 1.98566C0.435272 1.43337 0.882987 0.985655 1.43527 0.985654L15.5774 0.985654C16.1297 0.985654 16.5774 1.43337 16.5774 1.98565V16.1278C16.5774 16.6801 16.1297 17.1278 15.5774 17.1278C15.0251 17.1278 14.5774 16.6801 14.5774 16.1278L14.5774 4.39987L1.84944 17.1277C1.45891 17.5182 0.825747 17.5182 0.435222 17.1277C0.0446978 16.7372 0.0446981 16.104 0.435222 15.7135L13.1632 2.98566L1.43527 2.98566C0.882987 2.98566 0.435272 2.53794 0.435271 1.98566Z" />
                    </svg>
                </div>
            </div>
            <div class="enroll-details">
                <ul>
                    <li id="step-1-1">Students/guardians inquire about the home tutorial program.</li>
                    <li id="step-1-2">Customer Service (CS) provides details on requirements, fees, and policies.</li>
                    <li id="step-1-3">Student completes the registration form.</li>
                </ul>
            </div>
        </div>

        <!-- Step 2 -->
        <div class="enroll-step">
            <div class="enroll-step-top">
                <div id="step-2" class="enroll-step-text">2. Level Test at Wetalk Center</div>
                <div class="enroll-step-icon-wrapper">
                    <svg viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="26.5" cy="27" r="25.5" />
                    </svg>
                    <svg class="enroll-arrow-icon" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.435271 1.98566C0.435272 1.43337 0.882987 0.985655 1.43527 0.985654L15.5774 0.985654C16.1297 0.985654 16.5774 1.43337 16.5774 1.98565V16.1278C16.5774 16.6801 16.1297 17.1278 15.5774 17.1278C15.0251 17.1278 14.5774 16.6801 14.5774 16.1278L14.5774 4.39987L1.84944 17.1277C1.45891 17.5182 0.825747 17.5182 0.435222 17.1277C0.0446978 16.7372 0.0446981 16.104 0.435222 15.7135L13.1632 2.98566L1.43527 2.98566C0.882987 2.98566 0.435272 2.53794 0.435271 1.98566Z" />
                    </svg>
                </div>
            </div>
            <div class="enroll-details">
                <ul>
                    <li id="step-2-1">Students must visit the Wetalk center to take a level test.</li>
                    <li id="step-2-2">The teacher administers the level test and determines the appropriate learning
                        plan based on the results.</li>
                </ul>
            </div>
        </div>

        <!-- Step 3 -->
        <div class="enroll-step">
            <div class="enroll-step-top">
                <div id="step-3" class="enroll-step-text">3. Verification of Student’s Location & Safety Check</div>
                <div class="enroll-step-icon-wrapper">
                    <svg viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="26.5" cy="27" r="25.5" />
                    </svg>
                    <svg class="enroll-arrow-icon" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.435271 1.98566C0.435272 1.43337 0.882987 0.985655 1.43527 0.985654L15.5774 0.985654C16.1297 0.985654 16.5774 1.43337 16.5774 1.98565V16.1278C16.5774 16.6801 16.1297 17.1278 15.5774 17.1278C15.0251 17.1278 14.5774 16.6801 14.5774 16.1278L14.5774 4.39987L1.84944 17.1277C1.45891 17.5182 0.825747 17.5182 0.435222 17.1277C0.0446978 16.7372 0.0446981 16.104 0.435222 15.7135L13.1632 2.98566L1.43527 2.98566C0.882987 2.98566 0.435272 2.53794 0.435271 1.98566Z" />
                    </svg>
                </div>
            </div>
            <div class="enroll-details">
                <ul>
                    <li id="step-3-1">CS verifies the student’s home/hotel address.</li>
                    <li id="step-3-2">Supervisor and Admin ensure it meets safety standards.</li>
                    <li id="step-3-3">If the student is staying in a hotel, the designated public space (lobby or
                        business center) is confirmed.</li>
                </ul>
            </div>
        </div>
        <!-- Step 4 -->
        <div class="enroll-step">
            <div class="enroll-step-top">
                <div id="step-4" class="enroll-step-text">4. Scheduling & Payment Confirmation</div>
                <div class="enroll-step-icon-wrapper">
                    <svg viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="26.5" cy="27" r="25.5" />
                    </svg>
                    <svg class="enroll-arrow-icon" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.435271 1.98566C0.435272 1.43337 0.882987 0.985655 1.43527 0.985654L15.5774 0.985654C16.1297 0.985654 16.5774 1.43337 16.5774 1.98565V16.1278C16.5774 16.6801 16.1297 17.1278 15.5774 17.1278C15.0251 17.1278 14.5774 16.6801 14.5774 16.1278L14.5774 4.39987L1.84944 17.1277C1.45891 17.5182 0.825747 17.5182 0.435222 17.1277C0.0446978 16.7372 0.0446981 16.104 0.435222 15.7135L13.1632 2.98566L1.43527 2.98566C0.882987 2.98566 0.435272 2.53794 0.435271 1.98566Z" />
                    </svg>
                </div>
            </div>
            <div class="enroll-details">
                <ul>
                    <li id="step-4-1">CS confirms the schedule with the student and assigns an available teacher.</li>
                    <li id="step-4-2">Payment must be completed before the first session.</li>
                </ul>
            </div>
        </div>

        <!-- Step 5 -->
        <div class="enroll-step">
            <div class="enroll-step-top">
                <div id="step-5" class="enroll-step-text">5. Teacher Assignment & Briefing</div>
                <div class="enroll-step-icon-wrapper">
                    <svg viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="26.5" cy="27" r="25.5" />
                    </svg>
                    <svg class="enroll-arrow-icon" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.435271 1.98566C0.435272 1.43337 0.882987 0.985655 1.43527 0.985654L15.5774 0.985654C16.1297 0.985654 16.5774 1.43337 16.5774 1.98565V16.1278C16.5774 16.6801 16.1297 17.1278 15.5774 17.1278C15.0251 17.1278 14.5774 16.6801 14.5774 16.1278L14.5774 4.39987L1.84944 17.1277C1.45891 17.5182 0.825747 17.5182 0.435222 17.1277C0.0446978 16.7372 0.0446981 16.104 0.435222 15.7135L13.1632 2.98566L1.43527 2.98566C0.882987 2.98566 0.435272 2.53794 0.435271 1.98566Z" />
                    </svg>
                </div>
            </div>
            <div class="enroll-details">
                <ul>
                    <li id="step-5-1">The Supervisor assigns a teacher based on availability and student’s level.</li>
                    <li id="step-5-2">The teacher is briefed on student details and expectations.</li>
                </ul>
            </div>
        </div>

        <!-- Step 6 -->
        <div class="enroll-step">
            <div class="enroll-step-top">
                <div id="step-6" class="enroll-step-text">6. Lesson Conducted</div>
                <div class="enroll-step-icon-wrapper">
                    <svg viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="26.5" cy="27" r="25.5" />
                    </svg>
                    <svg class="enroll-arrow-icon" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.435271 1.98566C0.435272 1.43337 0.882987 0.985655 1.43527 0.985654L15.5774 0.985654C16.1297 0.985654 16.5774 1.43337 16.5774 1.98565V16.1278C16.5774 16.6801 16.1297 17.1278 15.5774 17.1278C15.0251 17.1278 14.5774 16.6801 14.5774 16.1278L14.5774 4.39987L1.84944 17.1277C1.45891 17.5182 0.825747 17.5182 0.435222 17.1277C0.0446978 16.7372 0.0446981 16.104 0.435222 15.7135L13.1632 2.98566L1.43527 2.98566C0.882987 2.98566 0.435272 2.53794 0.435271 1.98566Z" />
                    </svg>
                </div>
            </div>
            <div class="enroll-details">
                <ul>
                    <li id="step-6-1">The teacher arrives on time at the agreed location.</li>
                    <li id="step-6-2">The lesson is conducted following Wetalk’s curriculum.</li>
                </ul>
            </div>
        </div>

        <!-- Step 7 -->
        <div class="enroll-step">
            <div class="enroll-step-top">
                <div id="step-7" class="enroll-step-text">7. Monitoring & Feedback</div>
                <div class="enroll-step-icon-wrapper">
                    <svg viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="26.5" cy="27" r="25.5" />
                    </svg>
                    <svg class="enroll-arrow-icon" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0.435271 1.98566C0.435272 1.43337 0.882987 0.985655 1.43527 0.985654L15.5774 0.985654C16.1297 0.985654 16.5774 1.43337 16.5774 1.98565V16.1278C16.5774 16.6801 16.1297 17.1278 15.5774 17.1278C15.0251 17.1278 14.5774 16.6801 14.5774 16.1278L14.5774 4.39987L1.84944 17.1277C1.45891 17.5182 0.825747 17.5182 0.435222 17.1277C0.0446978 16.7372 0.0446981 16.104 0.435222 15.7135L13.1632 2.98566L1.43527 2.98566C0.882987 2.98566 0.435272 2.53794 0.435271 1.98566Z" />
                    </svg>
                </div>
            </div>
            <div class="enroll-details">
                <ul>
                    <li id="step-7-1">CS checks in with students/guardians and teachers for feedback.</li>
                    <li id="step-7-2">Issues or concerns are documented and addressed.</li>
                </ul>
            </div>
        </div>

    </div>
</div>