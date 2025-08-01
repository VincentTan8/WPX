<style>
    .e-sim-journey {
        margin: 150px 100px 0 100px;
    }

    .e-sim-journey-header {
        font-family: 'Poppins', sans-serif;
        font-size: 40px;
        font-weight: 700;
        color: #18181B;
        margin-bottom: 30px;
    }

    .e-sim-journey-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 52px;
    }

    .e-sim-journey-left {
        width: 696px;

        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        gap: 50px;

        line-height: 30px;
    }

    .e-sim-journey-left p {
        color: #2D2B32;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 400;
    }


    .e-sim-journey-right img {
        width: 740px;
        flex-shrink: 0;
        aspect-ratio: 740 / 493;
        border-radius: 15px;
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .e-sim-journey {
            margin: 60px 0 0 0;
        }

        .e-sim-journey-header {
            font-size: 28px;
        }

        .e-sim-journey-content {
            flex-direction: column;
            gap: 24px;
            align-items: flex-start;
        }

        .e-sim-journey-left {
            width: 100%;
            max-width: 100%;
            gap: 16px;
            font-size: 14px;
            line-height: 28px;
        }

        .e-sim-journey-right img {
            width: 100%;
            max-width: 100%;
            height: auto;
            aspect-ratio: auto;
        }
    }
</style>

<div class="e-sim-journey">
    <h2 id="journey-title" class="e-sim-journey-header">Your eSIM Companion for the Journey</h2>

    <div class="e-sim-journey-content">
        <div class="e-sim-journey-left">
            <p id="journey-subtitle-1">You are free to choose any eSIM provider you prefer, but the below
                recommendations will save you time and
                ensure smoother connectivity.</p>
            <p id="journey-subtitle-2">As part of your WeTalk Study Tour preparation, WeTalk has prepared this guide to
                recommend trusted eSIM
                options in Singapore, Philippines, and Taiwan. These are all traveler-friendly options with easy setup
                and solid network coverage.</p>
            <p><strong id="journey-subtitle-3">Note:</strong> <span id="journey-subtitle-4">WeTalk does not sell or
                    activate eSIMs. This page is
                    for
                    informational purposes to
                    help you prepare
                    for your journey.</span></p>
        </div>

        <div class="e-sim-journey-right">
            <img src="../resources/img/e-sim/journey.png" alt="eSIM Journey Illustration" />
        </div>
    </div>
</div>