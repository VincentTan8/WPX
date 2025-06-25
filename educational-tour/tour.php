<style>
    .image-text-section {
        margin: 100px auto;
        font-family: 'Poppins', sans-serif;
    }

    .image-text-section h2 {
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 40px;
        text-align: left;
        color: #333;
    }

    .image-columns {
        display: flex;
        gap: 30px;
        flex-wrap: wrap;
    }

    .left-column {
        flex: 1;
    }

    .right-column {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .image-box {
        position: relative;
        width: 100%;
        height: 100%;
        min-height: 250px;
        overflow: hidden;
        border-radius: 10px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .image-caption {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: red;
        color: white;
        padding: 10px 20px;
        text-align: left;
        font-size: 23px;
        font-weight: 700;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        font-family: 'Poppins', sans-serif;
    }

    @media (max-width: 768px) {
        .image-columns {
            flex-direction: column;
        }
    }
</style>

<div class="image-text-section">
    <h2 style="font-family: 'Poppins', sans-serif;">Upcoming Tours</h2>

    <div class="image-columns">
        <!-- Left column -->
        <div class="left-column">
            <div class="image-box" style="height: 100%; background-image: url('<?php echo $imgDir ?>singapore.png');">
                <div class="image-caption">Singapore - Aug 2025</div>
            </div>
        </div>

        <!-- Right column -->
        <div class="right-column">
            <div class="image-box" style="height: 250px; background-image: url('<?php echo $imgDir ?>japan.png');">
                <div class="image-caption">Japan - Sept 2025</div>
            </div>
            <div class="image-box"
                style="height: 250px; background-image: url('<?php echo $imgDir ?>taiwan-card.png');">
                <div class="image-caption">Taiwan - December 2025</div>
            </div>
        </div>
    </div>
</div>