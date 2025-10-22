<head>
    <!-- Bootstrap CSS (in <head>) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (before </body>) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <style>
        .zigzag-container {
            max-width: 900px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .zigzag-row {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }

        .zigzag-title {
            font-size: 28px;
            font-weight: bold;
            flex: 1 1 40%;
            padding-right: 20px;
            text-align: left;
            margin-top: 70px;
        }

        .zigzag-box {
            position: relative;
            flex: 0 0 auto;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            display: block;
            color: white;
            max-width: 45%;
            margin-left: 20px;
        }

        .zigzag-box h4 {

            color: black;
            font-weight: 700;
        }

        .zigzag-box img {
            width: 100%;
            height: 575px;
            display: block;
            border-radius: 20px;
            object-fit: cover;
        }

        .zigzag-box .text {
            position: absolute;
            bottom: 50px;
            left: 0;
            right: 0;
            padding: 15px 20px;
            border-radius: 0 0 20px 20px;
            z-index: 1;
            text-align: center;

        }

        .zigzag-box h4 {
            margin: 0 0 5px 0;
            font-size: 20px;
        }

        .zigzag-box p {
            margin: 0;
            font-size: 15px;
        }

        /* Desktop zigzag behavior */
        @media screen and (min-width: 769px) {
            .zigzag-row:nth-child(odd) {
                justify-content: flex-end;
            }

            .zigzag-row:nth-child(odd):not(:first-child),
            .zigzag-row:nth-child(even):not(:first-child) {
                margin-top: -250px;
            }

            .zigzag-row:nth-child(even) {
                justify-content: flex-start;
            }

            .zigzag-row:first-child {
                justify-content: flex-start;
                align-items: flex-start;
            }

            .zigzag-carousel {
                display: none !important;
            }
        }

        /* Mobile: switch to carousel layout */
        @media screen and (max-width: 768px) {
            .zigzag-row {
                display: none;
            }

            .zigzag-carousel {
                display: block;
            }

            .zigzag-carousel .carousel-item {
                padding: 10px 20px;
            }

            .zigzag-carousel .zigzag-box {
                max-width: 100%;
                margin: 0 auto;
            }

            .zigzag-box img {
                height: 400px;
            }

            .zigzag-box .text {
                bottom: 30px;
                font-size: 14px;
            }

            .zigzag-box h4 {
                font-size: 18px;
                color: black;
                font-weight: 700;
            }

            .swiper-slide img {
                width: 100%;
                height: auto;
                object-fit: cover;
                will-change: transform, opacity;
                backface-visibility: hidden;
                -webkit-backface-visibility: hidden;
                -webkit-transform-style: preserve-3d;
            }

            .swiper-slide {
                width: 100% !important;
                /* Make sure slide width fills container */
            }
        }
    </style>
</head>

<!-- DESKTOP ZIGZAG SECTION -->
<div class="zigzag-container">
    <div class="zigzag-row">
        <div class="zigzag-title" id="helping-title">Helping Those in Distress</div>
        <div class="zigzag-box">
            <img src="img/e-2.png" alt="Gathering goodhearted people" />
            <div class="text">
                <h4 id="helping-card-1-title">Gathering goodhearted people</h4>
                <p id="helping-card-1-detail">WeTalk’s platform gathers kind people who care...</p>
            </div>
        </div>
    </div>

    <div class="zigzag-row">
        <div class="zigzag-box">
            <img src="img/e-0.png" alt="Carrying forward philanthropic culture" />
            <div class="text">
                <h4 id="helping-card-2-title">Carrying forward philanthropic culture</h4>
                <p id="helping-card-2-detail">WeTalk enhances public awareness and passion for giving...</p>
            </div>
        </div>
    </div>

    <div class="zigzag-row">
        <div class="zigzag-box">
            <img src="img/e-3.png" alt="Sparing no effort" />
            <div class="text">
                <h4 id="helping-card-3-title">Sparing no effort to facilitate public welfare</h4>
                <p id="helping-card-3-detail">The dedicated spirit of helping runs through all WeTalk undertakings...
                </p>
            </div>
        </div>
    </div>

    <div class="zigzag-row">
        <div class="zigzag-box">
            <img src="img/e-1.png" alt="Partnering with philanthropic foundations" />
            <div class="text">
                <h4 id="helping-card-4-title">Partnering with philanthropic foundations</h4>
                <p id="helping-card-4-detail">WeTalk connects with like-minded organizations to expand impact...</p>
            </div>
        </div>
    </div>

    <div class="zigzag-row">
        <div class="zigzag-box">
            <img src="img/e-4.png" alt="Building a philanthropic highland together" />
            <div class="text">
                <h4 id="helping-card-5-title">Building a philanthropic highland together</h4>
                <p id="helping-card-5-detail">WeTalk brings warmth and meaning to the world...</p>
            </div>
        </div>
    </div>
</div>

<!-- MOBILE CAROUSEL SECTION -->
<div id="zigzagCarousel" class="carousel slide zigzag-carousel d-md-none" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="zigzag-box">
                <img src="img/e-2.png" alt="Gathering goodhearted people" />
                <div class="text">
                    <h4>Gathering goodhearted people</h4>
                    <p>WeTalk’s platform gathers kind people who care...</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="zigzag-box">
                <img src="img/e-0.png" alt="Carrying forward philanthropic culture" />
                <div class="text">
                    <h4>Carrying forward philanthropic culture</h4>
                    <p>WeTalk enhances public awareness and passion for giving...</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="zigzag-box">
                <img src="img/e-3.png" alt="Sparing no effort" />
                <div class="text">
                    <h4>Sparing no effort to facilitate public welfare</h4>
                    <p>The dedicated spirit of helping runs through all WeTalk undertakings...</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="zigzag-box">
                <img src="img/e-1.png" alt="Partnering with philanthropic foundations" />
                <div class="text">
                    <h4>Partnering with philanthropic foundations</h4>
                    <p>WeTalk connects with like-minded organizations to expand impact...</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="zigzag-box">
                <img src="img/e-4.png" alt="Building a philanthropic highland together" />
                <div class="text">
                    <h4>Building a philanthropic highland together</h4>
                    <p>WeTalk brings warmth and meaning to the world...</p>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    const swiper = new Swiper('.swiper', {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        speed: 150,           // faster transition (default was 250)
        touchRatio: 2,        // increase swipe sensitivity
        touchStartPreventDefault: false,  // improve swipe responsiveness on mobile
        grabCursor: true,     // cursor changes to grabbing hand on desktop
        preloadImages: true,
        updateOnImagesReady: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
</script>