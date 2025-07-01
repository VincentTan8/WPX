<style>
    .w-journey-section {
        margin: 100px 130px;
        padding-bottom: 120px;
        position: relative;
        overflow: hidden;
    }

    .it-con {
        margin-top: 2rem;
        ;
    }

    .w-path-wrapper {
        position: relative;
        width: 100%;
        max-width: 1200px;
        margin: 60px auto 0;

    }

    .w-path-img {
        width: 100%;
        margin-top: 6rem;
        height: auto;
        display: block;
    }

    .day-marker {
        position: absolute;
        display: flex;
        align-items: center;
        width: 326px;
        font-size: 18px;
        text-align: left;
        font-family: 'Poppins', sans-serif;
    }

    .day-marker p {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
    }

    .day-circle {
        background-color: #FFC107;
        width: 80px;
        height: 80px;
        color: white;
        border-radius: 50%;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: 'Poppins', sans-serif;
        line-height: 1.1;
    }

    .day-circle span:first-child {
        font-size: 18px;
        font-weight: 700;
    }

    .day-circle span:last-child {
        font-size: 18px;
        font-weight: 700;
    }

    .day-marker p {

        text-align: center;
        width: 100%;

    }

    .day-1,
    .day-4 {
        flex-direction: row;
    }

    .day-1 {
        top: -17%;
        left: -3%;
    }

    .day-4 {
        top: 32%;
        right: 12%;
    }

    .day-2,
    .day-5 {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .day-2 {
        top: 100%;
        left: 11%;
    }

    .day-5 {
        top: 100%;
        right: 11%;
    }

    .day-3,
    .day-6 {
        flex-direction: row-reverse;
        text-align: right;
    }

    .day-3 {
        top: 32%;
        left: 14%;
    }

    .day-6 {
        top: -17%;
        right: -3%;
    }

    .day-3 p,
    .day-6 p {
        margin: 0 10px 0 0;
    }

    @media (max-width: 768px) {
        .w-journey-section {
            margin: 60px 20px;
            padding-bottom: 60px;
        }

        .w-path-wrapper {
            margin-top: 40px;
        }

        .w-path-img {
            display: none;

        }

        .day-marker {
            position: static !important;
            flex-direction: row;
            align-items: center;
            justify-content: flex-start;
            gap: 16px;
            width: 100%;
            max-width: 320px;
            margin: 0 auto 24px;
            font-size: 16px;
        }

        .day-circle {
            width: 70px;
            height: 70px;
            font-size: 14px;
        }

        .day-circle span:first-child,
        .day-circle span:last-child {
            font-size: 14px;
        }

        .day-marker p {
            margin: 0;
            text-align: left;
            font-size: 16px;
            width: auto;
            max-width: 220px;
        }
    }
</style>

<div class="it-con container position-relative" style="margin-bottom:30px;">
    <h3 id="itinerary-title" class="mb-5"
        style="text-align:left; font-weight:700; font-family:'Poppins', sans-serif; font-size:40px; margin-bottom:30px;">
    </h3>
    <div class="w-path-wrapper position-relative">
        <img src="<?php echo $imgDir ?>w.png" alt="W Path" class="w-path-img">

        <!-- Day Circles (content are replaced dynamically but must exist to be targeted) -->
        <div class="day-marker day-1">
            <div class="day-circle"><span></span></div>
            <p></p>
        </div>
        <div class="day-marker day-2">
            <div class="day-circle"><span></span></div>
            <p></p>
        </div>
        <div class="day-marker day-3">
            <div class="day-circle"><span></span></div>
            <p></p>
        </div>
        <div class="day-marker day-4">
            <div class="day-circle"><span></span></div>
            <p></p>
        </div>
        <div class="day-marker day-5">
            <div class="day-circle"><span></span></div>
            <p></p>
        </div>
        <div class="day-marker day-6">
            <div class="day-circle"><span></span></div>
            <p></p>
        </div>
    </div>
</div>