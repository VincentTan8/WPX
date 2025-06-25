<style>
    .w-journey-section {
        margin: 100px 130px;
        padding-bottom: 120px;
        position: relative;
        overflow: hidden;
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
</style>

<div class="container py-5 position-relative" style="margin-bottom:30px;">
    <h3 class="mb-5"
        style="text-align:left; font-weight:700; font-family:'Poppins', sans-serif; font-size:40px; margin-bottom:30px;">
        Sample 6-Day Itinerary
    </h3>
    <div class="w-path-wrapper position-relative">
        <img src="<?php echo $imgDir ?>w.png" alt="W Path" class="w-path-img">

        <!-- Day Circles -->
        <div class="day-marker day-1">
            <div class="day-circle"><span>Day</span><span>1</span></div>
            <p>Arrival, orientation, welcome ceremony</p>
        </div>
        <div class="day-marker day-2">
            <div class="day-circle"><span>Day</span><span>2</span></div>
            <p>Temple visit, language scavenger hunt, night market food tour</p>
        </div>
        <div class="day-marker day-3">
            <div class="day-circle"><span>Day</span><span>3</span></div>
            <p>Lantern-making, Mandarin drama games, eco trail walk</p>
        </div>
        <div class="day-marker day-4">
            <div class="day-circle"><span>Day</span><span>4</span></div>
            <p>Puppet theater visit + DIY workshop, postcard home activity</p>
        </div>
        <div class="day-marker day-5">
            <div class="day-circle"><span>Day</span><span>5</span></div>
            <p>Traditional cooking class + souvenir hunt using Chinese phrases</p>
        </div>
        <div class="day-marker day-6">
            <div class="day-circle"><span>Day</span><span>6</span></div>
            <p>Reflection, student performance, certificate ceremony</p>
        </div>
    </div>
</div>