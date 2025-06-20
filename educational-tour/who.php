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
        width: 135px;
    }

    .desc-bottom {
        position: absolute;
        top: 110%;
        left: 50%;
        transform: translateX(-50%);
        font-size: 18px;
        font-weight: 400;
        color: #444;
        width: 135px;
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
</style>

<div class="curved-line-section">
    <h2 class="curved-line-header">Who is it For?</h2>

    <div class="curved-line-wrapper">
        <img src="img/line.png" alt="Curved Line" class="curved-line">

        <div class="curve-markers">
            <div class="curve-item" style="top:-15%;">
                <div class="desc-top">Kids aged 5–16</div>
                <img src="img/who-1.png" alt="Step 1">
            </div>

            <div class="curve-item" style="top:24%; right:4%;">
                <img src="img/who-2.png" alt="Step 2">
                <div class="desc-bottom">Parents who want
                    educational travel</div>
            </div>

            <div class="curve-item" style="top:27%; right:3%;">
                <div class="desc-top">Schools seeking curated
                    study tours</div>
                <img src="img/who-3.png" alt="Step 3">
            </div>

            <div class="curve-item" style="bottom:26%; left:2%;">
                <img src="img/who-4.png" alt="Step 4" style="transform:scale(1.30);">
                <div class=" desc-bottom">Bilingual or
                    heritage families
                </div>
            </div>

            <div class="curve-item" style="bottom:30%;">
                <div class="desc-top">First-time
                    international travelers</div>
                <img src="img/who-5.png" alt="Step 5">
            </div>
        </div>
    </div>
</div>