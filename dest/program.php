<style>
    .program-highlight-section {
        position: relative;
        z-index: 1;
    }

    .glow-bg {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 1345px;
        height: 603px;
        background: #66CDE7;
        transform: translate(-50%, -50%);
        filter: blur(218.25px);
        z-index: 0;
        pointer-events: none;
        border-radius: 301.5px;
    }

    .img-fluid {
        border-radius: 15px;
        height: 200px;
        width: 330px;
    }

    .highlight-box {
        background: #fff;
        border-radius: 20px;
        position: relative;
        z-index: 1;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
    }

    .highlight-card {
        background: #fff;
        border-radius: 15px;
        padding: 10px;
        height: auto;
        min-height: 350px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        text-align: center;
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

<div class="container py-5 position-relative program-highlight-section">
    <!-- Header -->
    <div class="d-flex align-items-center gap-2 mb-4">
        <h3 style="font-family:'Poppins', sans-serif; font-weight:700; font-size:40px;">Program Highlights</h3>
    </div>

    <!-- Glow Background -->
    <div class="glow-bg"></div>

    <!-- Main Box -->
    <div class=" p-4 rounded-4 position-relative">
        <!-- Top 4 Cards -->
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class=" highlight-card ">
                    <img src="img/landmark.png" alt="Cultural Landmarks" class="img-fluid mb-2">
                    <p class="highlight-title">Cultural Landmarks</p>
                    <p class="highlight-desc">Temples, old streets, tea houses & night markets</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="highlight-card ">
                    <img src="img/training.png" alt="Mandarin Confidence Training" class="img-fluid mb-2">
                    <p class="highlight-title">Mandarin Confidence Training</p>
                    <p class="highlight-desc">Speak with vendors, interview locals,
                        real-world language tasks</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="highlight-card ">
                    <img src="img/workshop.png" alt="DIY Creative Workshops" class="img-fluid mb-2">
                    <p class="highlight-title">DIY Creative Workshops</p>
                    <p class="highlight-desc">Make sky lanterns, glove puppets, aboriginal crafts</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="highlight-card ">
                    <img src="img/games.png" alt="Mandarin Drama Games" class="img-fluid mb-2">
                    <p class="highlight-title">Mandarin Drama Games</p>
                    <p class="highlight-desc">Use language to express, perform & connect</p>
                </div>
            </div>
        </div>

        <div class="row g-4 justify-content-center mt-3">
            <div class="col-md-3 col-6">
                <div class="highlight-card ">
                    <img src="img/food.png" alt="Food Tour" class="img-fluid mb-2">
                    <p class="highlight-title">Food Tour</p>
                    <p class="highlight-desc">Bubble tea, pineapple cakes, dumplings & shaved ice</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="highlight-card ">
                    <img src="img/nature.png" alt="Nature Trails & Eco Learning" class="img-fluid mb-2">
                    <p class="highlight-title">Nature Trails & Eco Learning</p>
                    <p class="highlight-desc">Explore mountains, waterfalls & wildlife</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="highlight-card ">
                    <img src="img/family.png" alt="Family Letter Project" class="img-fluid mb-2">
                    <p class="highlight-title">Family Letter Project</p>
                    <p class="highlight-desc">Write a postcard home in Chinese</p>
                </div>
            </div>
        </div>

    </div>
</div>