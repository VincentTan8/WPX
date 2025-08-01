<style>
    .e-sim-activation {
        margin-left: 100px;
        margin-right: 100px;
        margin-top: 150px;
    }

    .e-sim-activation-header {
        font-size: 40px;
        font-weight: 700;
        color: #18181B;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 30px;
    }

    .e-sim-activation-list {
        list-style: decimal inside;
        padding-left: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 40px;
        color: #2D2B32;
        font-size: 18px;
        line-height: 30px;
    }


    .e-sim-activation-list>li {
        position: relative;
        padding-left: 24px;
        font-size: 18px;
        line-height: 30px;
    }

    .e-sim-activation-list>li>p {
        margin: 10px 0;
        font-size: 18px;
        color: #2D2B32;
    }

    .check-list {
        list-style: none;
        padding-left: 0;
        margin-top: 10px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .check-list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 18px;
        color: #2D2B32;
    }

    .check-list img {
        width: 20px;
        height: 20px;
        margin-top: 4px;
    }

    .method {
        margin-top: 15px;
    }

    .method p {
        font-size: 18px;
        font-weight: 600;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 10px;
    }

    .method ol {
        list-style: decimal;
        margin: 0 0 20px 20px;
        padding-left: 10px;
    }

    .method ol li {
        margin-bottom: 6px;
        font-weight: 400;
        font-size: 18px;
        color: #2D2B32;
    }

    .e-sim-activation-list,
    .e-sim-activation-list>li {
        list-style: decimal;
        list-style-position: inside;
    }

    @media (max-width: 768px) {

        .e-sim-activation {
            margin: 60px 0 0 0;

        }

        .e-sim-activation-list>li {
            padding-left: 0px;
        }

        .e-sim-activation-header {
            font-size: 28px;
        }



        .e-sim-activation-list>li>p {
            font-size: 14px;
        }

        .check-list li {
            font-size: 14px;
        }

        .method p {
            font-size: 14px;
        }

        .method ol li {
            font-size: 14px;
        }
    }
</style>
<div class="e-sim-activation">
    <h2 class="e-sim-activation-header" id="activate-title">How to Activate eSIM Data Plans</h2>

    <ol class="e-sim-activation-list">
        <li>
            <strong id="active-list-1">Supported Devices</strong>
            <p id="activate-list-1-p">Ensure your device is eSIM-compatible, such as:</p>
            <ul class="check-list">
                <li><img src="../resources/img/e-sim/check-yellow-list.png" alt="check"> <span
                        id="actiave-list-1-b-1">Smartphones (e.g.,
                        iPhone,
                        Samsung, Google Pixel)</span></li>
                <li><img src="../resources/img/e-sim/check-yellow-list.png" alt="check"> <span
                        id="activate-list-1-b-2">Tablets and iPads (e.g.,
                        iPad
                        Pro)</span></li>
                <li><img src="../resources/img/e-sim/check-yellow-list.png" alt="check"> <span
                        id="activate-list-1-b-3">Wearables (e.g., Apple
                        Watch,
                        Huawei Watch 3 Pro)</span></li>
            </ul>
        </li>

        <li>
            <strong id="activate-list-2">Purchase an eSIM Data Plan</strong>
            <ul class="check-list">
                <li><img src="../resources/img/e-sim/check-yellow-list.png" alt="check"> <span
                        id="activate-list-2-b-1">Local carriers (e.g.,
                        China
                        Unicom, T-Mobile, Vodafone)</span></li>
                <li><img src="../resources/img/e-sim/check-yellow-list.png" alt="check"> <span
                        id="activate-list-2-b-2">Third-party platforms
                        (e.g.,
                        Airalo, Nomad, Holafly)</span></li>
            </ul>
        </li>

        <li>
            <strong id="activate-list-3">Activation Steps</strong>

            <div class="method">
                <p><strong id="activate-list-3-p-1">Method 1:</strong> <span id="activate-list-3-p-2">Carrier’s Official
                        App (e.g., China Unicom, My MI+)</span></p>
                <ol>
                    <li id="activate-list-3-b-1">1. Download the carrier’s app</li>
                    <li id="activate-list-3-b-2">2. Complete identity verification (if required)</li>
                    <li id="activate-list-3-b-3">3. Select and purchase a data plan</li>
                    <li id="activate-list-3-b-4">4. Scan the QR code provided to activate your eSIM</li>
                </ol>

                <p><strong id="activate-list-3-p-3">Method 2:</strong> <span id="activate-list-3-p-4">Third-Party eSIM
                        Providers (e.g., Airalo)</span></p>
                <ol>
                    <li id="activate-list-3-b-5">1. Buy a plan on the provider’s website or app</li>
                    <li id="activate-list-3-b-6">2. Receive QR code or activation link via email</li>
                    <li id="activate-list-3-b-7">3. Go to Settings > Cellular > Add eSIM > Scan QR code</li>
                </ol>
            </div>
        </li>

        <li>
            <strong id="activate-list-4">Key Notes</strong>
            <ul class="check-list">
                <li><img src="../resources/img/e-sim/check-yellow-list.png" alt="check"> <span
                        id="activate-list-4-b-1">Ensure your device is
                        unlocked
                        and supports eSIM</span></li>
                <li><img src="../resources/img/e-sim/check-yellow-list.png" alt="check"> <span
                        id="activate-list-4-b-2">Stay connected to Wi-Fi
                        during
                        setup</span></li>
                <li><img src="../resources/img/e-sim/check-yellow-list.png" alt="check"> <span
                        id="activate-list-4-b-3">You can store multiple
                        eSIMs,
                        but usually only one active at a
                        time (varies by device)</span></li>
            </ul>
        </li>
        <li>
            <strong id="activate-list-5">Monitoring Usage</strong>
            <p id="activate-list-5-p">Track your data usage through:</p>
            <ul class="check-list">
                <li><img src="../resources/img/e-sim/check-yellow-list.png" alt="check"> <span
                        id="activate-list-5-b-1">The carrier’s app (e.g., “My
                        T-Mobile”, “My M1+”)</span></li>
                <li><img src="../resources/img/e-sim/check-yellow-list.png" alt="check"> <span
                        id="activate-list-5-b-2">Device settings (Settings >
                        Cellular > Data Usage)</span></li>
            </ul>
        </li>

    </ol>
</div>