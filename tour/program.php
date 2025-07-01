<style>
    .program-highlight-section {
        position: relative;
        z-index: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .glow-bg {
        position: absolute;
        width: 1345px;
        height: 603px;
        background: #66CDE7;
        filter: blur(218.25px);
        pointer-events: none;
        border-radius: 301.5px;
        opacity: 0.76;
        z-index: -1;
    }

    .img-fluid {
        border-radius: 5px;
        height: 200px;
        width: 330px;
    }

    .highlight-box {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        width: calc(0.76 * 100vw);
        height: auto;
        justify-content: center;
        align-items: center;
        align-content: center;

    }

    .highlight-card {
        background: #fff;
        border-radius: 15px;
        padding: 10px;
        height: 350px;
        width: 350px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        text-align: center;
        margin: 7px;
    }

    .highlight-title {
        font-size: 1rem;
        font-weight: 700;
        margin-bottom: 20px;
        margin-top: 20px;
        text-align: left;
    }

    .highlight-desc {
        font-size: .85rem;
        color: #555;
        margin-bottom: 0;
        text-align: left;
    }

    .highlight-card p {
        line-height: 1rem;
        font-family: 'Poppins', sans-serif;
        color: black;
    }

    @media (max-width: 768px) {

        .program-highlight-section {
            margin-bottom: 15px;
        }

        .glow-bg {
            width: 100%;
            height: 300px;
            filter: blur(150px);
            border-radius: 150px;
        }

        .highlight-box {
            width: 100%;
            flex-direction: column;
        }

        .highlight-card {
            width: 100%;
            background-color: #f0f0f0;
            max-width: 100%;
            height: auto;
            padding: 20px;
            margin: 10px 0;
            text-align: left;
        }

        .img-fluid {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .highlight-title {
            font-size: 1rem;
            margin-bottom: 12px;
        }

        .highlight-desc {
            font-size: 0.9rem;
            line-height: 1.4;
            text-align: justify;
        }

    }
</style>

<div class="program-highlight-section mx-5" style="margin-top: 5rem;">
    <!-- Glow Background -->
    <div class="glow-bg"></div>

    <div>
        <!-- Header -->
        <div class="d-flex align-items-center gap-2 mb-4" style="padding-left: 14px;">
            <h3 id="program-title" style="font-family:'Poppins', sans-serif; font-weight:700; font-size:40px;"></h3>
        </div>

        <!-- Main Box -->
        <div id="highlight-parent" class="highlight-box">
            <!-- Sample card -->
            <!-- <div class=" highlight-card ">
                <img src="<?php //echo $imgDir ?>landmark.png" alt="Cultural Landmarks" class="img-fluid mb-2">
                <p class="highlight-title">Cultural Landmarks</p>
                <p class="highlight-desc">Temples, old streets, tea houses & night markets</p>
            </div> -->
        </div>
    </div>
</div>