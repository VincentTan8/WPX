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
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
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
</style>

<div class="program-highlight-section mx-5" style="margin-top: 5rem;">
    <!-- Glow Background -->
    <div class="glow-bg"></div>

    <div>
        <!-- Header -->
        <div class="d-flex align-items-center gap-2 mb-4" style="padding-left: 14px;">
            <h3 style="font-family:'Poppins', sans-serif; font-weight:700; font-size:40px;">Program
                Highlights
            </h3>
        </div>

        <!-- Main Box -->
        <div class="highlight-box">
            <div class=" highlight-card ">
                <img src="<?php echo $imgDir ?>landmark.png" alt="Cultural Landmarks" class="img-fluid mb-2">
                <p class="highlight-title">Cultural Landmarks</p>
                <p class="highlight-desc">Temples, old streets, tea houses & night markets</p>
            </div>
            <div class="highlight-card ">
                <img src="<?php echo $imgDir ?>training.png" alt="Mandarin Confidence Training" class="img-fluid mb-2">
                <p class="highlight-title">Mandarin Confidence Training</p>
                <p class="highlight-desc">Speak with vendors, interview locals,
                    real-world language tasks</p>
            </div>
            <div class="highlight-card ">
                <img src="<?php echo $imgDir ?>workshop.png" alt="DIY Creative Workshops" class="img-fluid mb-2">
                <p class="highlight-title">DIY Creative Workshops</p>
                <p class="highlight-desc">Make sky lanterns, glove puppets, aboriginal crafts</p>
            </div>
            <div class="highlight-card ">
                <img src="<?php echo $imgDir ?>games.png" alt="Mandarin Drama Games" class="img-fluid mb-2">
                <p class="highlight-title">Mandarin Drama Games</p>
                <p class="highlight-desc">Use language to express, perform & connect</p>
            </div>
            <div class="highlight-card ">
                <img src="<?php echo $imgDir ?>food.png" alt="Food Tour" class="img-fluid mb-2">
                <p class="highlight-title">Food Tour</p>
                <p class="highlight-desc">Bubble tea, pineapple cakes, dumplings & shaved ice</p>
            </div>
            <div class="highlight-card ">
                <img src="<?php echo $imgDir ?>nature.png" alt="Nature Trails & Eco Learning" class="img-fluid mb-2">
                <p class="highlight-title">Nature Trails & Eco Learning</p>
                <p class="highlight-desc">Explore mountains, waterfalls & wildlife</p>
            </div>
            <div class="highlight-card ">
                <img src="<?php echo $imgDir ?>family.png" alt="Family Letter Project" class="img-fluid mb-2">
                <p class="highlight-title">Family Letter Project</p>
                <p class="highlight-desc">Write a postcard home in Chinese</p>
            </div>
        </div>
    </div>
</div>