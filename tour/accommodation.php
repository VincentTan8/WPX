<style>
    .custom-header {
        font-size: 40px;
        margin-bottom: 40px;
        color: #333;
        text-align: left;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
    }

    .accommodation-con {
        margin-top: 230px;
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

        .accommodation-con {
            margin-top: 10px;
        }

        .custom-header {
            text-align: center;
            font-size: 28px;
            margin-bottom: 30px;
        }

        .custom-box {
            height: auto;
            padding: 30px 20px;
            gap: 16px;
            margin-bottom: 1rem;
        }

        .box-top {
            height: 60px;
            margin-bottom: 20px;
        }

        .box-top img {
            width: 60px;
            height: 60px;
        }

        .box-bottom {
            height: auto;
        }

        .box-bottom p {
            font-size: 14px;
            line-height: 1.4;
        }
    }
</style>

<div class="accommodation-con container  position-relative">
    <h2 id="accom-title" class="custom-header">Accommodation & Safety</h2>
    <div class="row g-4">
        <div class="col-md-3 col-sm-6">
            <div class="custom-box">
                <div class="box-top">
                    <img src="<?php echo $imgDir ?>trust.png" alt="Feature 1">
                </div>
                <div class="box-bottom">
                    <p id="accom-text-1">Trusted, kid-friendly hotel or serviced residence</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="custom-box">
                <div class="box-top">
                    <img src="<?php echo $imgDir ?>supervised.png" alt="Feature 2">
                </div>
                <div class="box-bottom">
                    <p id="accom-text-2">24/7 adult supervision</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="custom-box">
                <div class="box-top">
                    <img src="<?php echo $imgDir ?>instagram.png" alt="Feature 3">
                </div>
                <div class="box-bottom">
                    <p id="accom-text-3">Daily check-ins and progress notes for parents</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="custom-box">
                <div class="box-top">
                    <img src="<?php echo $imgDir ?>health.png" alt="Feature 4">
                </div>
                <div class="box-bottom">
                    <p id="accom-text-4">Travel insurance and emergency support included</p>
                </div>
            </div>
        </div>
    </div>
</div>