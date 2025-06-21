<style>
    .carousel-section {
        max-width: 1300px;
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
        font-size: 1rem;
        color: #666;
        text-align: left;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .carousel-button {
        display: inline-flex;
        align-items: center;
        text-align: center;
        padding: 12px 25px;
        border: 1px solid #444444;
        border-radius: 30px;
        width: 250px;
        gap: 20px;
        align-self: flex-start;
        background: linear-gradient(to right, #F2AE14 0%, #F2AE14 0%) no-repeat;
        background-size: 0% 100%;
        background-position: left;
        color: #18181B;
        font-weight: 400;
        text-decoration: none;
        transition: background-size 0.4s ease, color 0.4s ease;
        font-family: 'Poppins', serif;
        font-size: 18px;
    }

    .carousel-button:hover {
        background-size: 100% 100%;
        color: #fff;
        border: 1px solid #F2AE14;
    }

    .carousel-button svg path {
        transition: fill 0.4s ease;
    }

    .carousel-button:hover svg path {
        fill: #fff;
    }

    @media (max-width: 768px) {
        .carousel-top {
            flex-direction: column;
            text-align: center;
        }

        .carousel-top-left {
            max-width: 100%;
        }

        .carousel-top-right {
            margin-top: 20px;
        }

        .carousel-button {
            margin: 0 auto;
        }
    }
</style>

<div class="carousel-section">
    <div class="carousel-top">
        <div class="carousel-top-left">
            <h2 class="carousel-header">About WeTalk Study Tour</h2>
            <p class="carousel-desc">WeTalk Study Tours are carefully curated journeys that combine language learning,
                cultural discovery, and hands-on exploration. Led by caring bilingual educators, each trip is designed
                to help children grow in confidence, curiosity, and communication.</p>
        </div>
        <div class="carousel-top-right">
            <div
                style="border-radius: 25px; background: #09CA91; width: 350px; height: 80px; padding: 25px 19px; display: flex; justify-content: center; align-items: center; color: white; font-family: 'Poppins', sans-serif; font-size: 18px; font-weight: 400; cursor: pointer;">
                <span style="margin-right: 15px;">Explore Our Destination</span><svg xmlns="http://www.w3.org/2000/svg"
                    width="22" height="16" viewBox="0 0 22 16" fill="none">
                    <path d="M14 1L21 8M21 8L14 15M21 8H1" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            </a>
        </div>
    </div>

    <!-- Bottom Part: Carousel -->
    <div class="carousel-container">
        <div class="carousel-wrapper">
            <div class="carousel-track">
                <!-- Insert your .carousel-card items here -->
                <!-- Example card: -->
                <div class="carousel-card">
                    <img src="img/singapore.png" alt="Singapore">
                    <h3>Singapore</h3>
                    <h4 class="carousel-subtitle">Small country, big possibilities</h4>
                    <p>A clean, safe and vibrant bilingual environment. Kids explore iconic sites like Gardens by the
                        Bay,
                        Science Centre, and Singapore’s colorful cultural districts — while practicing both English and
                        Mandarin daily.</p>
                    <a href="#" class="carousel-button">About Singapore
                        <svg xmlns="http://www.w3.org/2000/svg" width="29" height="23" viewBox="0 0 29 23" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.2929 1.02385C17.6834 0.633326 18.3166 0.633326 18.7071 1.02385L28.7071 11.0239C29.0976 11.4144 29.0976 12.0475 28.7071 12.4381L18.7071 22.4381C18.3166 22.8286 17.6834 22.8286 17.2929 22.4381C16.9024 22.0475 16.9024 21.4144 17.2929 21.0238L25.5858 12.731H1C0.447715 12.731 0 12.2832 0 11.731C0 11.1787 0.447715 10.731 1 10.731H25.5858L17.2929 2.43806C16.9024 2.04754 16.9024 1.41437 17.2929 1.02385Z"
                                fill="#18181B" />
                        </svg>
                    </a>
                </div>
                <div class="carousel-card">
                    <img src="img/japan.png" alt="Japan">
                    <h3>Japan</h3>
                    <h4 class="carousel-subtitle">Where Tradition Meets Technology</h4>
                    <p>Discover Japan’s rich culture through calligraphy, tea ceremony, and manga culture. Kids get to
                        try
                        basic Japanese phrases, visit shrines, and explore both ancient traditions and futuristic tech.
                    </p>
                    <a href="#" class="carousel-button">About Japan <svg xmlns="http://www.w3.org/2000/svg" width="29"
                            height="23" viewBox="0 0 29 23" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.2929 1.02385C17.6834 0.633326 18.3166 0.633326 18.7071 1.02385L28.7071 11.0239C29.0976 11.4144 29.0976 12.0475 28.7071 12.4381L18.7071 22.4381C18.3166 22.8286 17.6834 22.8286 17.2929 22.4381C16.9024 22.0475 16.9024 21.4144 17.2929 21.0238L25.5858 12.731H1C0.447715 12.731 0 12.2832 0 11.731C0 11.1787 0.447715 10.731 1 10.731H25.5858L17.2929 2.43806C16.9024 2.04754 16.9024 1.41437 17.2929 1.02385Z"
                                fill="#18181B" />
                        </svg></a>
                </div>

                <div class="carousel-card">
                    <img src="img/philippines.png" alt="Philippines">
                    <h3>Philippines</h3>
                    <h4 class="carousel-subtitle">Island Adventure with English Immersion</h4>
                    <p>A clean, safe and vibrant bilingual environment. Kids explore iconic sites like Gardens by the
                        Bay,
                        Science Centre, and Singapore’s colorful cultural districts — while practicing both English and
                        Mandarin daily.</p>
                    <a href="#" class="carousel-button">About Philippines <svg xmlns="http://www.w3.org/2000/svg"
                            width="29" height="23" viewBox="0 0 29 23" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.2929 1.02385C17.6834 0.633326 18.3166 0.633326 18.7071 1.02385L28.7071 11.0239C29.0976 11.4144 29.0976 12.0475 28.7071 12.4381L18.7071 22.4381C18.3166 22.8286 17.6834 22.8286 17.2929 22.4381C16.9024 22.0475 16.9024 21.4144 17.2929 21.0238L25.5858 12.731H1C0.447715 12.731 0 12.2832 0 11.731C0 11.1787 0.447715 10.731 1 10.731H25.5858L17.2929 2.43806C16.9024 2.04754 16.9024 1.41437 17.2929 1.02385Z"
                                fill="#18181B" />
                        </svg></a>
                </div>

                <div class="carousel-card">
                    <img src="img/china.png" alt="China">
                    <h3>China</h3>
                    <h4 class="carousel-subtitle">Roots, Language & Legacy</h4>
                    <p>A deep cultural journey through ancient cities like Xi’an, Beijing, or Shanghai. Students engage
                        in
                        idiom learning, calligraphy, martial arts, and explore Chinese medicine — perfect for cultural
                        heritage connection.</p>
                    <a href="#" class="carousel-button">About China <svg xmlns="http://www.w3.org/2000/svg" width="29"
                            height="23" viewBox="0 0 29 23" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.2929 1.02385C17.6834 0.633326 18.3166 0.633326 18.7071 1.02385L28.7071 11.0239C29.0976 11.4144 29.0976 12.0475 28.7071 12.4381L18.7071 22.4381C18.3166 22.8286 17.6834 22.8286 17.2929 22.4381C16.9024 22.0475 16.9024 21.4144 17.2929 21.0238L25.5858 12.731H1C0.447715 12.731 0 12.2832 0 11.731C0 11.1787 0.447715 10.731 1 10.731H25.5858L17.2929 2.43806C16.9024 2.04754 16.9024 1.41437 17.2929 1.02385Z"
                                fill="#18181B" />
                        </svg></a>
                </div>

                <div class="carousel-card">
                    <img src="img/taiwan-card.png" alt="Taiwan">
                    <h3>Taiwan</h3>
                    <h4 class="carousel-subtitle">Gentle Language Immersion</h4>
                    <p>Taiwan offers a warm and friendly setting for Mandarin practice. Kids visit temples, night
                        markets, and enjoy hands-on activities like lantern-making and aboriginal arts — all in a
                        slower-paced, nurturing environment.</p>
                    <a href="#" class="carousel-button">About Taiwan <svg xmlns="http://www.w3.org/2000/svg" width="29"
                            height="23" viewBox="0 0 29 23" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.2929 1.02385C17.6834 0.633326 18.3166 0.633326 18.7071 1.02385L28.7071 11.0239C29.0976 11.4144 29.0976 12.0475 28.7071 12.4381L18.7071 22.4381C18.3166 22.8286 17.6834 22.8286 17.2929 22.4381C16.9024 22.0475 16.9024 21.4144 17.2929 21.0238L25.5858 12.731H1C0.447715 12.731 0 12.2832 0 11.731C0 11.1787 0.447715 10.731 1 10.731H25.5858L17.2929 2.43806C16.9024 2.04754 16.9024 1.41437 17.2929 1.02385Z"
                                fill="#18181B" />
                        </svg></a>
                </div>

                <div class="carousel-card">
                    <img src="img/australia.png" alt="Australia">
                    <h3>Australia</h3>
                    <h4 class="carousel-subtitle">Language, Wildlife & the Outdoors</h4>
                    <p>Perfect for English immersion and nature exploration. Students interact with native speakers,
                        visit
                        wildlife sanctuaries, top universities, and learn about Aboriginal culture through real-life
                        activities.</p>
                    <a href="#" class="carousel-button">About Australia <svg xmlns="http://www.w3.org/2000/svg"
                            width="29" height="23" viewBox="0 0 29 23" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M17.2929 1.02385C17.6834 0.633326 18.3166 0.633326 18.7071 1.02385L28.7071 11.0239C29.0976 11.4144 29.0976 12.0475 28.7071 12.4381L18.7071 22.4381C18.3166 22.8286 17.6834 22.8286 17.2929 22.4381C16.9024 22.0475 16.9024 21.4144 17.2929 21.0238L25.5858 12.731H1C0.447715 12.731 0 12.2832 0 11.731C0 11.1787 0.447715 10.731 1 10.731H25.5858L17.2929 2.43806C16.9024 2.04754 16.9024 1.41437 17.2929 1.02385Z"
                                fill="#18181B" />
                        </svg></a>
                </div>
            </div>
        </div>
    </div>
</div>