<style>
    .next-steps-section {
        background-color: #09CA91;
        border-radius: 20px;
        padding: 0px 80px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        color: #fff;
    }

    .steps-left {
        max-width: 550px;
        flex: 1;
    }

    .steps-left h2 {
        font-size: 36px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
        text-align: left;
        color: #fff;
    }

    .steps-left p {
        font-size: 18px;
        font-family: 'Poppins', sans-serif;
        line-height: 1.6;
        margin-bottom: 40px;
        color: #fff;
        text-align: left;
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

    .steps-buttons svg {
        margin-left: 10px;
    }

    .steps-right {
        flex: 1;
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
            gap: 30px;
        }

        .steps-left,
        .steps-right {
            max-width: 100%;
            width: 100%;
            flex: unset;
        }

        .steps-left h2,
        .steps-left p {
            text-align: center;
        }

        .steps-buttons {
            flex-direction: column;
            gap: 15px;
            justify-content: center;
            align-items: center;
        }

        .steps-buttons .button {
            width: 100%;
            max-width: 280px;
            justify-content: center;
        }

        .steps-right img {
            max-width: 90%;
            margin: 0 auto;
            display: block;
        }
    }
</style>

<div class="next-steps-section">
    <div class="steps-left">
        <h2 id="talk-title">Ready to Talk?</h2>
        <p id="talk-subtitle">Whether you're a curious parent or a school looking to partner, we’re here to help.Let’s
            discuss the right
            program for your child’s goals.</p>

        <div class="steps-buttons">
            <div class="button button-register">
                <span id="talk-contact">Contact Us</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="16" viewBox="0 0 22 16" fill="none">
                    <path d="M14 1L21 8M21 8L14 15M21 8H1" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>

            <a class="button button-outline"
                href="https://wa.me/6597582288?text=Hi%20WeTalk%2C%20I%27d%20like%20to%20book%20a%20call%20with%20your%20team."
                target="_blank">
                <span style="color:black;" id="talk-book">Book a Call</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 22 16" fill="none">
                    <path d="M14 1L21 8M21 8L14 15M21 8H1" stroke="black" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>

        </div>
    </div>
    <div class="steps-right">
        <img src="<?php echo $imgDir ?>girl.png" alt="Girl with Laptop">
    </div>
</div>