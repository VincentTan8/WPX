<style>
    .carousel-section {
        margin: 100px auto;
        padding: 0 20px;
    }

    .carousel-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 40px;
    }

    .carousel-top-left {
        max-width: 60%;
    }

    .carousel-top-right {
        margin-top: 10px;
    }

    .carousel-header {
        font-size: 40px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        text-align: left;
        color: #444;
        font-family: 'Poppins', serif;
    }

    .carousel-desc {
        font-size: 18px;
        color: #666;
        font-family: 'Poppins', sans-serif;
        margin-top: 10px;
    }

    .carousel-wrapper {
        overflow-x: auto;
        scroll-behavior: smooth;
    }

    .carousel-wrapper::-webkit-scrollbar {
        display: none;
    }

    .carousel-track {
        display: flex;
        gap: 30px;
        min-width: max-content;
        padding-bottom: 10px;
    }

    .carousel-card {
        background: #fff;
        border-radius: 15px;
        box-shadow: 0px 0px 33px 5px rgba(0, 0, 0, 0.1);
        width: 400px;
        flex: 0 0 auto;
        padding: 15px;
        display: flex;
        flex-direction: column;
        text-align: center;
        margin-top: 50px;
        transition: transform 0.3s ease;
    }

    .carousel-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .carousel-card h3 {
        font-size: 23px;
        margin: 10px 0;
        text-align: left;
        color: #09CA91;
        font-style: normal;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
    }

    .carousel-subtitle {
        font-size: 18px;
        color: #444;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        margin-bottom: 30px;
        text-align: left;
        line-height: normal;
    }

    .carousel-card p {
        font-size: 16px;
        color: #444444;
        text-align: left;
        margin-bottom: 20px;
        flex-grow: 1;
        font-family: 'Poppins', sans-serif;
        letter-spacing: 0.32px;
        line-height: 25px;
    }

    .carousel-button {
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        border: 1px solid #444444;
        border-radius: 30px;
        width: 250px;
        height: 50px;
        gap: 15px;
        background: linear-gradient(to right, #F2AE14 0%, #F2AE14 0%) no-repeat;
        background-size: 0% 100%;
        background-position: left;
        transition: background-size 0.4s ease, color 0.4s ease;
        color: #18181B;
    }

    .carousel-button:hover {
        background-size: 100% 100%;
        color: #fff;
        border: 1px solid #F2AE14;
    }

    .carousel-button span {
        font-family: 'Poppins', serif;
        font-size: 18px;
        font-weight: 400;
        text-decoration: none;
    }

    .carousel-button svg path {
        transition: fill 0.4s ease;
    }

    .carousel-button:hover svg path {
        fill: #fff;
    }

    .carousel-wrapper.dragging {
        cursor: grabbing;
        cursor: -webkit-grabbing;
    }

    .carousel-wrapper {
        cursor: grab;
        cursor: -webkit-grab;
    }

    #carousel-anchor {
        scroll-margin-top: 100px;
    }


    @media (max-width: 768px) {
        .carousel-wrapper {
            overflow-x: auto;
            padding: 0 10px;
        }

        .carousel-section {
            margin: 50px auto;
            padding: 0 20px;
        }

        .carousel-track {
            gap: 16px;
            width: max-content;
            min-width: unset;
        }

        .carousel-top {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .carousel-top-left {
            max-width: 100%;
        }

        .carousel-top-right {
            margin-top: 20px;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .carousel-header {
            font-size: 26px;
        }

        .carousel-desc {
            font-size: 15px;
            margin-top: 8px;
        }

        .carousel-wrapper {
            padding: 0 10px;
        }

        .carousel-card {
            width: 280px;
            padding: 12px;
            margin-top: 30px;
        }

        .carousel-card img {
            height: 150px;
        }

        .carousel-card h3 {
            font-size: 18px;
        }

        .carousel-subtitle {
            font-size: 14px;
            margin-bottom: 15px;
        }

        .carousel-card p {
            font-size: 14px;
            line-height: 20px;
        }

        .carousel-button {
            width: 180px;
            height: 42px;
            font-size: 14px;
            margin: 0 auto;
        }

        .carousel-button span {
            font-size: 14px;
        }

        .carousel-button svg {
            width: 16px;
            height: 12px;
        }

        .carousel-header {
            font-size: 22px;
            text-align: center;
        }

        .carousel-desc {
            font-size: 14px;
            text-align: justify;
            text-align-last: left;
            margin-top: 10px;
        }

    }
</style>

<div class="carousel-section" style="background-color:white;">
    <div class="carousel-top">
        <div class="carousel-top-left">
            <h2 id="about-title" class="carousel-header">About WeTalk Study Tour</h2>
            <p id="about-subtitle" class="carousel-desc">WeTalk Study Tours are carefully curated journeys that combine
                language learning,
                cultural discovery, and hands-on exploration. Led by caring bilingual educators, each trip is designed
                to help children grow in confidence, curiosity, and communication.</p>
        </div>
        <div class="carousel-top-right">
            <a href="#carousel-anchor">
                <div
                    style="border-radius: 25px; background: #09CA91; width: 350px; height: 80px; padding: 25px 19px; display: flex; justify-content: center; align-items: center; color: white; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 400; cursor: pointer;">
                    <span id="hero-button-3" style=" margin-right: 15px;">Explore Our Destination</span><svg
                        xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                        <path d="M14 1L21 8M21 8L14 15M21 8H1" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <!-- Bottom Part: Carousel -->
    <div id="carousel-anchor" class="carousel-container">
        <div class="carousel-wrapper">
            <div id="carousel-parent" class="carousel-track">
                <!-- Example card: -->
                <!-- <div class="carousel-card">
                    <img src="img/singapore.png" alt="Singapore">
                    <h3>Singapore</h3>
                    <h4 class="carousel-subtitle">Small country, big possibilities</h4>
                    <p>A clean, safe and vibrant bilingual environment. Kids explore iconic sites like Gardens by the Bay, Science Centre, and Singapore’s colorful cultural districts — while practicing both English and Mandarin daily.</p>
                    <a href="#" class="carousel-button">
                        <span>About Singapore</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="23" viewBox="0 0 29 23" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.2929 1.02385C17.6834 0.633326 18.3166 0.633326 18.7071 1.02385L28.7071 11.0239C29.0976 11.4144 29.0976 12.0475 28.7071 12.4381L18.7071 22.4381C18.3166 22.8286 17.6834 22.8286 17.2929 22.4381C16.9024 22.0475 16.9024 21.4144 17.2929 21.0238L25.5858 12.731H1C0.447715 12.731 0 12.2832 0 11.731C0 11.1787 0.447715 10.731 1 10.731H25.5858L17.2929 2.43806C16.9024 2.04754 16.9024 1.41437 17.2929 1.02385Z"
                                fill="#18181B" />
                        </svg>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</div>

<script>
    const carouselWrapper = document.querySelector('.carousel-wrapper');

    let isDown = false;
    let startX;
    let scrollLeft;

    carouselWrapper.addEventListener('mousedown', (e) => {
        isDown = true;
        carouselWrapper.classList.add('dragging');
        startX = e.pageX - carouselWrapper.offsetLeft;
        scrollLeft = carouselWrapper.scrollLeft;
    });

    carouselWrapper.addEventListener('mouseleave', () => {
        isDown = false;
        carouselWrapper.classList.remove('dragging');
    });

    carouselWrapper.addEventListener('mouseup', () => {
        isDown = false;
        carouselWrapper.classList.remove('dragging');
    });

    carouselWrapper.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carouselWrapper.offsetLeft;
        const walk = (x - startX) * 1.5;
        carouselWrapper.scrollLeft = scrollLeft - walk;
    });
</script>