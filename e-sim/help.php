<style>
    .start-container {
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        background: #09CA91;
        border-radius: 25px 25px 0px 0px;
        margin: 150px 50px 0 50px;
        padding: 60px;
        overflow: hidden;
        height: 500px;
        font-family: 'Poppins', sans-serif;
    }

    .start-left {
        z-index: 2;
        max-width: 600px;
        display: flex;
        flex-direction: column;
        gap: 30px;
        color: white;
        margin-top: 50px;
    }

    .start-left h2 {
        font-size: 40px;
        font-weight: 700;
        margin: 0;
        color: #fff;
        font-family: 'Poppins', sans-serif;

    }

    .start-left p {
        font-size: 18px;
        margin: 0;
        font-family: 'Poppins', sans-serif;
        color: #fff;
        width: 729px;
    }

    .start-buttons {
        display: flex;
        gap: 30px;
        flex-wrap: wrap;
        margin: 90px 0 44px 0;
    }

    .start-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 250px;
        height: 80px;
        padding: 25px 15px;
        border-radius: 25px;
        font-size: 18px;
        gap: 15px;
        cursor: pointer;
        flex-shrink: 0;
    }

    .start-button span {
        display: inline-block;
    }

    .contact-us {
        background: #444;
        color: white;
    }

    .contact-us svg {
        width: 29px;
        height: 22px;
    }

    .book-call {
        background: white;
        color: #444;
    }

    .book-call svg {
        width: 35px;
        height: 25px;

        flex-shrink: 0;

    }

    .start-right {
        position: absolute;
        bottom: 0;
        right: 115px;
        z-index: 1;
    }

    .start-right img {
        width: 502.57px;
        height: auto;
        object-fit: fill;

    }

    @media (max-width: 768px) {
        .start-container {
            flex-direction: column;
            align-items: center;
            height: auto;
            padding: 40px 20px;
            margin: 60px 0 0 0;
        }

        .start-left {
            margin-top: 0;
            max-width: 100%;
            align-items: center;
            text-align: center;
        }

        .start-left h2 {
            font-size: 24px;
        }

        .start-left p {
            width: 100%;
            font-size: 16px;
        }

        .start-buttons {
            margin: 50px 0 30px;
            justify-content: center;
        }

        .start-right {
            position: static;
            margin-top: 30px;
        }

        .start-right img {
            width: 100%;
            max-width: 350px;
            height: auto;
        }
    }
</style>

<div class="start-container">
    <div class="start-left">
        <h2 id="help-title">Need Help Choosing?</h2>
        <p id="help-title-p">Our WeTalk team can help you select the best eSIM plan based on your destination, phone
            model, and travel
            duration.</p>
        <div class="start-buttons">
            <div class="start-button contact-us">
                <span id="help-contact">Contact Us</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="22" viewBox="0 0 29 22" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.2929 0.292893C17.6834 -0.0976311 18.3166 -0.0976311 18.7071 0.292893L28.7071 10.2929C29.0976 10.6834 29.0976 11.3166 28.7071 11.7071L18.7071 21.7071C18.3166 22.0976 17.6834 22.0976 17.2929 21.7071C16.9024 21.3166 16.9024 20.6834 17.2929 20.2929L25.5858 12H1C0.447715 12 0 11.5523 0 11C0 10.4477 0.447715 10 1 10H25.5858L17.2929 1.70711C16.9024 1.31658 16.9024 0.683417 17.2929 0.292893Z"
                        fill="white" />
                </svg>
            </div>
            <div class="start-button book-call">
                <span id="help-book">Book a Call</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="25" viewBox="0 0 18 26" fill="none">
                    <path
                        d="M17.0757 11.4446C18.066 12.2451 18.066 13.7549 17.0757 14.5554L3.50724 25.5227C2.19935 26.5798 0.249999 25.6489 0.249999 23.9672L0.25 2.03277C0.25 0.351073 2.19936 -0.579799 3.50724 0.477349L17.0757 11.4446Z"
                        fill="#444444" />
                </svg>
            </div>
        </div>
    </div>
    <div class="start-right">
        <img src="../resources/img/tutorial/girl.png" alt="Start Image" />
    </div>
</div>