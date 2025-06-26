<style>
    .next-family-section {
        background-color: #916DFF;
        border-radius: 20px;
        padding: 0px 80px;
        display: flex;
        height: 600px;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        color: #fff;
        box-shadow: 0px 4px 19.3px 0px rgba(24, 24, 27, 0.25);
    }

    .steps-family-left {
        max-width: 620px;
        flex: 1;
    }

    .steps-family-left h2 {
        font-size: 36px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 30px;
        text-align: left;
        color: #fff;
    }

    .steps-list {
        list-style: none;
        padding: 0;
        margin-bottom: 40px;
    }

    .steps-list li {
        font-size: 18px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 20px;
        padding-left: 30px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        font-family: 'Poppins', sans-serif;
    }

    .family-right {
        flex: 1;
        text-align: center;
    }

    .family-right img {
        max-width: 100%;
        height: auto;
        position: absolute;
        height: 662px;
        width: 670px;
        left: 50%;
        top: -10.2%;
    }

    @media (max-width: 768px) {
        .next-family-section {
            flex-direction: column;
            height: auto;
            padding: 40px 20px;
            text-align: center;
        }

        .steps-family-left {
            max-width: 100%;
            width: 100%;
        }

        .steps-family-left h2 {
            text-align: center;
        }

        .steps-list {
            margin-top: 30px;
        }

        .steps-list li {
            padding-left: 0;
            /* remove padding on mobile */
            justify-content: center;
            text-align: left;
            white-space: normal;
        }

        .steps-list li span {
            display: inline-block;
            max-width: 260px;
        }

        .family-right {
            position: relative;
            margin-top: 2rem;
            width: 100%;
            text-align: center;
        }

        .family-right img {
            position: relative;
            top: 0;
            left: 0;
            width: 100%;
            max-width: 280px;
            height: auto;
            margin: 0 auto;
        }
    }
</style>

<div class="next-family-section">
    <div class="steps-family-left">
        <h2 id="family-title">Why Families Choose WeTalk</h2>
        <ul class="steps-list">
            <li><img src="<?php echo $imgDir ?>check-yellow.png" alt="✓"> <span id="step-text-1">Daily bilingual
                    guidance with safe accommodation</span>
            </li>
            <li><img src="<?php echo $imgDir ?>check-yellow.png" alt="✓"> <span id="step-text-2">Small groups with
                    personalized attention</span>
            </li>
            <li><img src="<?php echo $imgDir ?>check-yellow.png" alt="✓"> <span id="step-text-3">Pre-tour online prep &
                    post-tour learning</span></li>
            <li><img src="<?php echo $imgDir ?>check-yellow.png" alt="✓"> <span id="step-text-4">Not rushed sightseeing,
                    but intentional learning</span>
            </li>
            <li><img src="<?php echo $imgDir ?>check-yellow.png" alt="✓"> <span id="step-text-5">Strong focus on both
                    cultural value & language growth</span></li>
        </ul>
    </div>
    <div class="family-right">
        <img src="<?php echo $imgDir ?>kid.png" alt="Kid Girl">
    </div>
</div>