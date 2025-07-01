<style>
    .next-steps-section {
        background-color: #09CA91;
        border-radius: 20px;
        padding: 0px 68px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        color: #fff;
    }

    .steps-left {
        max-width: 600px;
        flex: 1;
    }

    .steps-left h2 {
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
    }

    .steps-buttons {
        display: flex;
        gap: 20px;
        justify-content: flex-start;
        flex-wrap: nowrap;
        margin-top: 30px;
    }

    .steps-buttons .button {
        font-size: 16px;
        font-family: 'Poppins', sans-serif;
        padding: 14px 28px;
        border-radius: 15px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        white-space: nowrap;
        cursor: pointer;
        box-shadow: 2px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .button-register {
        background: #000;
        color: #fff;
    }

    .button-outline {
        background: #fff;
        color: black;
        border: 1px solid #fff;

    }

    .consultation {
        background: none;
        color: #fff;

        font-size: 16px;
        font-family: 'Poppins', sans-serif;
        padding: 14px 28px;
        border-radius: 15px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        white-space: nowrap;
        cursor: pointer;
    }

    .consultation svg {
        margin-left: 10px;
    }

    .button svg {
        margin-left: 10px;
    }

    .steps-right {

        text-align: center;
    }

    .steps-right img {
        max-width: 100%;
        height: auto;
        position: relative;
        left: 5%;
    }

    @media (max-width: 768px) {
        .next-steps-section {
            flex-direction: column;
            padding: 40px 20px;
            text-align: center;
            gap: 40px;
        }

        .steps-left {
            max-width: 100%;
            flex: unset;
        }

        .steps-left h2 {
            font-size: 28px;
            margin-bottom: 20px;
            text-align: center;
        }

        .steps-list li {
            font-size: 16px;
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 16px;
            padding-left: 0;
            text-align: left;
            flex-wrap: nowrap;
        }

        .steps-list li img {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            margin-top: 4px;
        }

        .steps-list li span {
            flex: 1;
            white-space: normal;
            overflow-wrap: break-word;
        }

        .steps-buttons {
            flex-direction: column;
            align-items: center;
            gap: 16px;
            margin-top: 20px;
        }

        .steps-buttons .button,
        .consultation {
            padding: 12px 20px;
            font-size: 14px;
            width: 100%;
            max-width: 260px;
            justify-content: center;
        }

        .steps-right {
            max-width: 100%;
            text-align: center;
        }

        .steps-right img {
            max-width: 280px;
            left: 0;
            margin-bottom: -42px;
        }
    }
</style>

<div class="next-steps-section">
    <div class="steps-left">
        <h2 id="next-title"></h2>
        <ul class="steps-list">
            <li><img src="<?php echo $imgDir ?>white-check.png" alt="✓"> <span><strong id="next-tour"></strong> <span
                        id="next-date"></span></span></li>
            <li><img src="<?php echo $imgDir ?>white-check.png" alt="✓"> <span><strong id="early-bird"></strong> <span
                        id="early-deadline"></span></span></li>
            <li><img src="<?php echo $imgDir ?>white-check.png" alt="✓"> <span id="suitable-for"></span></li>
            <li><img src="<?php echo $imgDir ?>white-check.png" alt="✓"> <span id="next-includes"></span></li>
        </ul>

        <div class="steps-buttons">
            <a class="button button-register"
                href="https://wa.me/6597582288?text=Hi%20WeTalk%2C%20I%27d%20like%20to%20book%20a%20call%20with%20your%20team."
                target="_blank">
                <span id="next-register" style="color:white;"></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                    <path d="M14 1L21 8M21 8L14 15M21 8H1" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
            <div class="button button-outline">
                <span id="next-download"></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 22 16" fill="none">
                    <path d="M14 1L21 8M21 8L14 15M21 8H1" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <a class=" button-outline consultation"
                href="https://wa.me/6597582288?text=Hi%20WeTalk%2C%20I%27d%20like%20to%20book%20a%20call%20with%20your%20team."
                target="_blank">
                <span id="next-consult" style="color:white;"></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 22 16" fill="none">
                    <path d="M14 1L21 8M21 8L14 15M21 8H1" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
    <div class="steps-right">
        <img src="<?php echo $imgDir ?>girl.png" alt="Girl with Laptop">
    </div>
</div>