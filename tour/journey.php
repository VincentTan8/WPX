<style>
    .carousel-container {
        margin: 100px auto;
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
        padding: 15px;
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
        line-height: normal;
        font-family: 'Poppins', serif;
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

    .carousel-subtitle {
        font-size: 18px;
        color: #444;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        line-height: normal;
        margin-bottom: 30px;
    }

    .carousel-card h3,
    .carousel-card h4 {
        text-align: left;
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
</style>

<div class="carousel-container">
    <h2 id="journey-title" class="carousel-header">Other learning journeys you might be interested in</h2>
    <div class="carousel-wrapper">
        <div id="carousel-parent" class="carousel-track">
            <!-- <div class="carousel-card">
                <img src="img/singapore.png" alt="Singapore">
                <h3>Singapore</h3>
                <h4 class="carousel-subtitle">Small country, big possibilities</h4>
                <p>A clean, safe and vibrant bilingual environment. Kids explore iconic sites like Gardens by the Bay,
                    Science Centre, and Singapore’s colorful cultural districts — while practicing both English and
                    Mandarin daily.</p>
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