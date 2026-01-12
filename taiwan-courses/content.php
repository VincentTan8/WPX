<?php
$params = [
    'course_name' => 'English Immersion Course',
    'currency_code' => 'TWD'
];

$url1 = 'https://wetalk.com/pay?' . http_build_query($params);

$params = [
    'course_name' => 'Private English Course',
    'currency_code' => 'TWD'
];

$url2 = 'https://wetalk.com/pay?' . http_build_query($params);
?>
<div class="rounded-container">
    <h1>Available Programs</h1>

    <div class="inner-container" style="margin-bottom: 100px;">
        <p class="dark">1. English Immersion Course</p>

        <div class="indent">
            <p>Group Class | 25 sessions</p>
            <p>Tuition Fee: TWD 22,250</p>
        </div>

        <div class="mb-30-desktop">
            <p class="dark">Programme Overview</p>
            <p>The English Immersion Course is designed for learners who want to build confidence and fluency through
                consistent, real world English use.</p>
        </div>

        <p class="mb-30-desktop">Classes are conducted primarily in English, allowing students to develop natural
            listening, speaking, and thinking skills from the first lesson. Through guided discussions, practical
            scenarios, and interactive activities, students strengthen their ability to communicate clearly in everyday,
            academic, and professional contexts.</p>

        <p class="mb-30-desktop">This programme is suitable for learners who wish to move beyond textbook
            learning and start using English more naturally.</p>

        <a class="taiwan-btn" href="<?= htmlspecialchars($url1) ?>">
            <span
                style="font-family: Poppins; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;">Proceed
                to Pay</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="22" viewBox="0 0 29 22" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.2929 0.292893C17.6834 -0.0976311 18.3166 -0.0976311 18.7071 0.292893L28.7071 10.2929C29.0976 10.6834 29.0976 11.3166 28.7071 11.7071L18.7071 21.7071C18.3166 22.0976 17.6834 22.0976 17.2929 21.7071C16.9024 21.3166 16.9024 20.6834 17.2929 20.2929L25.5858 12H1C0.447715 12 0 11.5523 0 11C0 10.4477 0.447715 10 1 10H25.5858L17.2929 1.70711C16.9024 1.31658 16.9024 0.683417 17.2929 0.292893Z"
                    fill="white" />
            </svg>
        </a>
    </div>

    <div class="inner-container" style="margin-bottom: 100px;">
        <p class="dark">2. Private English Course</p>

        <div class="indent">
            <p>One to One | 25 hours</p>
            <p>Tuition Fee: TWD 32,400</p>
        </div>

        <div class="mb-30-desktop">
            <p class="dark">Programme Overview</p>
            <p>The Private English Course offers personalised one to one instruction tailored to each learner's goals,
                level, and pace.</p>
        </div>

        <p class="mb-30-desktop">Lessons focus on practical communication skills, including speaking, listening,
            reading, and writing. Content is customised to support daily conversation, academic needs, or professional
            communication. Learners receive direct feedback and guided practice throughout each session.</p>

        <p class="mb-30-desktop">This programme is ideal for students who prefer individual attention or have
            specific learning objectives.</p>

        <a class="taiwan-btn" href="<?= htmlspecialchars($url2) ?>">
            <span
                style="font-family: Poppins; font-size: 18px; font-style: normal; font-weight: 400; line-height: normal;">Proceed
                to Pay</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="22" viewBox="0 0 29 22" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.2929 0.292893C17.6834 -0.0976311 18.3166 -0.0976311 18.7071 0.292893L28.7071 10.2929C29.0976 10.6834 29.0976 11.3166 28.7071 11.7071L18.7071 21.7071C18.3166 22.0976 17.6834 22.0976 17.2929 21.7071C16.9024 21.3166 16.9024 20.6834 17.2929 20.2929L25.5858 12H1C0.447715 12 0 11.5523 0 11C0 10.4477 0.447715 10 1 10H25.5858L17.2929 1.70711C16.9024 1.31658 16.9024 0.683417 17.2929 0.292893Z"
                    fill="white" />
            </svg>
        </a>
    </div>

    <h1>Classroom Photo Gallery</h1>

    <div class="">
        <div id="item-slider" class="owl-carousel owl-theme">
            <div class="item">
                <img class="gallery-img" src="assets/img-1.png">
            </div>

            <div class="item">
                <img class="gallery-img" src="assets/img-2.png">
            </div>

            <div class="item">
                <img class="gallery-img" src="assets/img-3.png">
            </div>

            <div class="item">
                <img class="gallery-img" src="assets/img-4.png">
            </div>

            <div class="item">
                <img class="gallery-img" src="assets/img-5.png">
            </div>
        </div>
    </div>
</div>