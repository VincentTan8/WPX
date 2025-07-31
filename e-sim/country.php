<style>
    .set-up-guides {
        margin-top: 150px;
        font-family: 'Poppins', sans-serif;
    }

    .set-up-guides-header-container {
        padding: 0 110px;
    }

    .set-up-guides-header {
        font-size: 40px;
        font-weight: 700;
        color: #18181B;
        margin-bottom: 40px;
        font-family: 'Poppins', sans-serif;
    }

    .country-tabs {
        display: flex;
        gap: 83px;
        margin-bottom: 50px;
    }

    .country-tabs .tab {
        font-size: 20px;
        color: #444;
        background: transparent;
        border: none;
        cursor: pointer;
        padding: 12px 30px;
        border-radius: 50px;
        transition: all 0.3s ease;
        font-family: 'Poppins', sans-serif;
    }

    .country-tabs .tab.active {
        background: #007CFF;
        color: #fff;
        font-family: 'Poppins', sans-serif;
    }

    .setup-content-box {
        border-radius: 50px;
        background: #FFF;
        box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.25);
        padding: 50px 100px;
    }

    .setup-inner-content {
        display: flex;
        gap: 17px;
        align-items: center;
    }

    .setup-left {
        width: 887px;
        flex-shrink: 0;
    }

    .setup-right {
        flex: 1;
        display: flex;
        align-items: center;
    }

    .setup-subheading {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #18181B;
        font-family: 'Poppins', sans-serif;
    }

    .provider-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0 50px;
        table-layout: auto;
    }

    .provider-table th,
    .provider-table td {
        text-align: left;
        font-size: 16px;
        color: #2D2B32;
        padding: 0;
        vertical-align: middle;
        font-family: 'Poppins', sans-serif;
    }

    .provider-table th:not(:last-child),
    .provider-table td:not(:last-child) {
        padding-right: 58px;
    }

    .provider-table th {
        font-weight: 600;
    }

    .provider-table a {
        color: #007CFF;
        text-decoration: none;
        white-space: nowrap;
    }

    .setup-steps {
        font-size: 18px;
        color: #2D2B32;
        display: flex;
        flex-direction: column;
        gap: 10px;
        line-height: 30px;
        padding-left: 20px;
        width: 528px;
        font-family: 'Poppins', sans-serif;
    }


    .provider-table td,
    th {
        border-bottom: none;
    }

    .provider-table a {
        color: #007CFF;
        text-decoration: none;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        max-width: 100%;
    }

    @media (max-width: 768px) {
        .set-up-guides-header-container {
            padding: 0 20px;
        }

        .set-up-guides-header {
            font-size: 28px;
            text-align: left;
        }

        .country-tabs {
            flex-wrap: nowrap;
            overflow-x: auto;
            gap: 16px;
            padding-bottom: 10px;
        }

        .country-tabs .tab {
            white-space: nowrap;
            font-size: 18px;
            padding: 10px 20px;
        }

        .setup-content-box {
            padding: 30px 20px;
            border-radius: 20px;
        }

        .setup-inner-content {
            flex-direction: column;
            gap: 40px;
        }

        .setup-left {
            width: 100%;
        }

        .setup-right {
            width: 100%;
            justify-content: center;
        }

        .setup-steps {
            padding-left: 0;
            width: 100%;
            text-align: left;
        }

        .provider-table th,
        .provider-table td {
            font-size: 14px;
        }

        .provider-table {
            border-spacing: 0 30px;
        }

        .provider-table td:last-child a {
            max-width: 50px;

            display: inline-block;
        }
    }
</style>

<div class="set-up-guides">
    <div class="set-up-guides-header-container">
        <h2 id="country-title" class="set-up-guides-header">Country-Specific eSIM Setup Guides</h2>

        <div class="country-tabs">
            <button class="tab active" id="sg">Singapore eSIM Guide</button>
            <button class="tab" id="ph">Philippines eSIM Guide</button>
            <button class="tab" id="tw">Taiwan eSIM Guide</button>
            <button class="tab" id="cn">China eSIM Guide</button>
        </div>
    </div>

    <div class="setup-content-box">
        <div class="setup-inner-content">
            <div class="setup-left">
                <h3 class="setup-subheading">Recommended Providers</h3>
                <table class="provider-table">
                    <thead>
                        <tr>
                            <th>Provider</th>
                            <th>Plan Type</th>
                            <th>Links</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="setup-right">
                <ol class="setup-steps">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ol>
            </div>
        </div>
    </div>
</div>