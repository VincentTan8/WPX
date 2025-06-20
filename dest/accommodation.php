<style>
    .custom-header {
        font-size: 40px;
        margin-bottom: 40px;
        color: #333;
        text-align: left;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
    }

    .custom-box {
        background: #916DFF;
        border-radius: 15px;
        box-shadow: 0px 0px 33px 5px rgba(0, 0, 0, 0.15);
        height: 300px;
        padding: 50px 33px;
        gap: 20px;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .box-top {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80px;
        margin-bottom: 43px;
    }

    .box-top img {
        width: 100px;
        height: 100px;
        object-fit: contain;
    }

    .box-bottom {
        display: flex;
        justify-content: center;
        align-items: flex-start;

        height: 100px;
        /* Equal height to enforce alignment */
    }

    .box-bottom p {
        margin: 0;
        font-size: 18px;
        font-weight: 400;
        line-height: 1.5;
        color: white;
        font-family: 'Poppins', sans-serif;
        max-width: 100%;
    }


    @media (max-width: 768px) {
        .custom-header {
            text-align: center;
        }
    }
</style>

<div class="container py-5 position-relative" style="margin-top:100px;">
    <h2 class="custom-header">Accommodation & Safety</h2>
    <div class="row g-4">
        <div class="col-md-3 col-sm-6">
            <div class="custom-box">
                <div class="box-top">
                    <img src="img/trust.png" alt="Feature 1">
                </div>
                <div class="box-bottom">
                    <p>Trusted, kid-friendly hotel or serviced residence</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="custom-box">
                <div class="box-top">
                    <img src="img/supervised.png" alt="Feature 2">
                </div>
                <div class="box-bottom">
                    <p>24/7 adult supervision</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="custom-box">
                <div class="box-top">
                    <img src="img/instagram.png" alt="Feature 3">
                </div>
                <div class="box-bottom">
                    <p>Daily check-ins and progress notes for parents</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="custom-box">
                <div class="box-top">
                    <img src="img/health.png" alt="Feature 4">
                </div>
                <div class="box-bottom">
                    <p>Travel insurance and emergency support included</p>
                </div>
            </div>
        </div>
    </div>
</div>