<style>
    .e-sim {
        margin: 110px 110px 150px 110px;
    }

    .e-sim-title {
        color: #18181B;
        font-family: 'Poppins', sans-serif;
        font-size: 40px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin-bottom: 30px;
    }

    .e-sim-desc {
        color: #2D2B32;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 30px;
        max-width: 964px;
        margin-bottom: 30px;
    }

    .e-sim-cards {
        display: flex;
        gap: 30px;

    }

    .e-sim-card {
        width: 264px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 50px 0;

    }

    .e-sim-card img {
        width: 100px;
        height: 100px;
        margin-bottom: 43px;
    }

    .e-sim-card p {
        font-family: 'Poppins';
        font-size: 18px;
        color: #444;
        font-weight: 400;
    }

    @media (max-width: 1200px) {
        .e-sim-cards {
            flex-wrap: wrap;
            justify-content: center;
        }

        .e-sim-card {
            width: 100%;
            max-width: 264px;
        }
    }

    @media (max-width: 767px) {
        .e-sim {
            margin: 60px 0 0 0;
        }

        .e-sim-title {
            font-size: 28px;
        }

        .e-sim-desc {
            font-size: 15px;
        }

        .e-sim-card p {
            font-size: 15px;
        }
    }

    @media
</style>

<div class="e-sim">
    <h2 id="what-title" class="e-sim-title">What is an eSIM?</h2>
    <p id="what-subtitle" class="e-sim-desc">
        An eSIM (Embedded SIM) is a digital SIM built into your phone. It allows you to activate a mobile data plan
        without inserting a physical SIM card. Once activated, your phone connects instantly to a local network.
    </p>

    <div class="e-sim-cards">
        <div class="e-sim-card">
            <img src="../resources/img/e-sim/setup.png" alt="eSIM Feature 1" />
            <p id="what-card-1">Easy Setup</p>
        </div>
        <div class="e-sim-card">
            <img src="../resources/img/e-sim/activate.png" alt="eSIM Feature 2" />
            <p id="what-card-2">Instant Activation</p>
        </div>
        <div class="e-sim-card">
            <img src="../resources/img/e-sim/no.png" alt="eSIM Feature 3" />
            <p id="what-card-3">No need to swap SIM Cards</p>
        </div>
        <div class="e-sim-card">
            <img src="../resources/img/e-sim/expensive.png" alt="eSIM Feature 4" />
            <p id="what-card-4">Avoid Expensive Roaming Charges</p>
        </div>
        <div class="e-sim-card">
            <img src="../resources/img/e-sim/phone.png" alt="eSIM Feature 5" />
            <p id="what-card-5">Use your phone just like a local </p>
        </div>
    </div>
</div>