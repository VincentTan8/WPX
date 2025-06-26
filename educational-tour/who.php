<style>
    .curved-line-section {
        position: relative;
        padding: 90px 50px;
        overflow: visible;
        font-family: 'Poppins', sans-serif;
    }

    .curved-line-header {
        font-size: 40px;
        font-weight: 700;
        color: #444;
        margin-bottom: 80px;
        text-align: left;
        font-family: 'Poppins', sans-serif;
    }

    .curved-line-wrapper {
        position: relative;
        width: 100%;
        height: 400px;
    }

    .curved-line-wrapper img.curved-line {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 171%;
        max-width: none;
        z-index: 0;
    }

    .curve-markers {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1;
    }

    .curve-item {
        position: relative;
        width: 100px;
        text-align: center;
    }

    .curve-item img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 50%;
        border: 4px solid white;
        background: white;
        position: relative;
        z-index: 2;
    }

    .desc-top {
        position: absolute;
        bottom: 110%;
        left: 50%;
        transform: translateX(-50%);
        font-size: 18px;
        font-weight: 400;
        color: #444;
        width: 190px;
    }

    .desc-bottom {
        position: absolute;
        top: 110%;
        left: 50%;
        transform: translateX(-50%);
        font-size: 18px;
        font-weight: 400;
        color: #444;
        width: 190px;
    }

    @media (max-width: 768px) {
        .curved-line-section {
            padding: 80px 20px;
        }

        .curved-line-header {
            text-align: center;
            font-size: 28px;
            margin-bottom: 40px;
        }

        .curved-line-wrapper {
            height: auto;
            padding-top: 40px;
        }

        .curved-line-wrapper img.curved-line {
            display: none;
        }

        .curve-markers {
            flex-direction: column;
            gap: 80px;
        }

        .desc-top,
        .desc-bottom {
            position: static;
            transform: none;
            margin: 10px 0 0;
        }
    }

    @media (max-width: 768px) {
        .curved-line-section {
            padding: 80px 20px;
        }

        .curved-line-header {
            text-align: center;
            font-size: 28px;
            margin-bottom: 40px;
        }

        .curved-line-wrapper {
            height: auto;
            padding-top: 0;
        }

        .curved-line-wrapper img.curved-line {
            display: none;
        }

        .curve-markers {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px 20px;
            justify-items: center;
            text-align: center;
        }

        .curve-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .curve-item:nth-child(5) {
            grid-column: 1 / 3;

        }

        .curve-item img {
            order: 1;
            margin-bottom: 12px;
            width: 70px;
            height: 70px;
        }

        .desc-top,
        .desc-bottom {
            order: 2;
            position: static !important;
            transform: none !important;
            margin: 0;
            font-size: 16px;
            width: 200px;
        }

        .curve-item .desc-top,
        .curve-item .desc-bottom {
            min-height: 42px;

            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

    }
</style>

<div class="curved-line-section">
    <h2 id="who-title" class="curved-line-header">Who is it For?</h2>

    <div class="curved-line-wrapper">
        <img src="<?php echo $imgDir ?>line.png" alt="Curved Line" class="curved-line">

        <div class="curve-markers">
            <div class="curve-item" style="top:-12%;">
                <div id="who-1" class="desc-top">Kids aged 5–16</div>
                <img src="<?php echo $imgDir ?>who-1.png" alt="Step 1">
            </div>

            <div class="curve-item" style="top:26%; right:4%;">
                <img src="<?php echo $imgDir ?>who-2.png" alt="Step 2">
                <div id="who-2" class="desc-bottom">Parents who want
                    educational travel</div>
            </div>

            <div class="curve-item" style="top:31%; right:3%;">
                <div id="who-3" class="desc-top">Schools seeking curated
                    study tours</div>
                <img src="<?php echo $imgDir ?>who-3.png" alt="Step 3">
            </div>

            <div class="curve-item" style="bottom:25%; left:2%;">
                <img src="<?php echo $imgDir ?>who-4.png" alt="Step 4" style="transform:scale(1.30);">
                <div id="who-4" class=" desc-bottom">Bilingual or
                    heritage families
                </div>
            </div>

            <div class="curve-item" style="bottom:27%;">
                <div id="who-5" class="desc-top">First-time
                    international travelers</div>
                <img src="<?php echo $imgDir ?>who-5.png" alt="Step 5">
            </div>
        </div>
    </div>
</div>