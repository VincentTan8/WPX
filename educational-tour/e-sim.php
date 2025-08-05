<style>
    .e-sim-guide {
        width: 100%;
        height: 400px;
        background-image: url('../resources/img/educational-tour/e-sim-guide.png');
        background-size: cover;
        background-position: center;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        border-radius: 20px;
        overflow: hidden;
        margin: 100px 0;
    }

    .e-sim-content {
        background: rgba(255, 255, 255, 0.9);
        padding: 40px;
        max-width: 520px;
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .e-sim-text {
        color: #444;
        font-family: 'Poppins', sans-serif;
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: 40px;
    }

    .e-sim-button {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 14px 28px;
        background: #09CA91;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .e-sim-button:hover {
        background: #08b084;
    }

    .e-sim-button-text {
        color: #FFF;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    .e-sim-button svg {
        width: 29px;
        height: 22px;
        flex-shrink: 0;
        fill: #FFF;
    }

    @media (max-width: 768px) {
        .e-sim-guide {
            padding: 20px;
            justify-content: center;
            height: auto;
        }

        .e-sim-content {
            padding: 30px 20px;
            max-width: 100%;
        }

        .e-sim-text {
            font-size: 24px;
            line-height: 36px;
            text-align: center;
        }

        .e-sim-button {
            align-self: center;
            font-size: 16px;
            padding: 12px 20px;
        }

        .e-sim-button-text {
            font-size: 16px;
        }
    }
</style>

<div class="e-sim-guide">
    <div class="e-sim-content">
        <p class="e-sim-text">
            Make international travel easier with an eSIM. Here’s your Quick guide on how to get one.
        </p>
        <button class="e-sim-button">
            <span class="e-sim-button-text">Go to E-sim page</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="29" height="22" viewBox="0 0 29 22" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M17.2929 0.292893C17.6834 -0.0976311 18.3166 -0.0976311 18.7071 0.292893L28.7071 10.2929C29.0976 10.6834 29.0976 11.3166 28.7071 11.7071L18.7071 21.7071C18.3166 22.0976 17.6834 22.0976 17.2929 21.7071C16.9024 21.3166 16.9024 20.6834 17.2929 20.2929L25.5858 12H1C0.447715 12 0 11.5523 0 11C0 10.4477 0.447715 10 1 10H25.5858L17.2929 1.70711C16.9024 1.31658 16.9024 0.683417 17.2929 0.292893Z"
                    fill="white" />
            </svg>
        </button>
    </div>
</div>