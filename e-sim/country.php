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
            max-width: 100px;

            display: inline-block;
        }
    }
</style>

<div class="set-up-guides">
    <div class="set-up-guides-header-container">
        <h2 class="set-up-guides-header">Country-Specific eSIM Setup Guides</h2>

        <div class="country-tabs">
            <button class="tab active">Singapore eSIM Guide</button>
            <button class="tab">Philippines eSIM Guide</button>
            <button class="tab">Taiwan eSIM Guide</button>
            <button class="tab">China eSIM Guide</button>
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
                            <td>GOMO by Singtel</td>
                            <td>Tourist eSIM (7–12 days, 100GB)</td>
                            <td><a href="https://www.gomo.sg/esim">https://www.gomo.sg/esim</a></td>
                        </tr>
                        <tr>
                            <td>MI Prepaid eSIM</td>
                            <td>Prepaid Tourist SIM</td>
                            <td><a href="https://www.m1.com.sg/m1">https://www.m1.com.sg/m1</a></td>
                        </tr>
                        <tr>
                            <td>Airalo – Singapore</td>
                            <td>3GB–10GB options</td>
                            <td><a href="https://www.airalo.com/sg">https://www.airalo.com/sg</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="setup-right">
                <ol class="setup-steps">
                    <li>1.Choose and purchase your plan via provider website or app</li>
                    <li>2.Scan the provided QR code</li>
                    <li>3.Install eSIM on your phone</li>
                    <li>4.Enable mobile data and roaming</li>
                    <li>5.Done!</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<script>
    const tabButtons = document.querySelectorAll('.country-tabs .tab');
    const providerTableBody = document.querySelector('.provider-table tbody');
    const stepsContainer = document.querySelector('.setup-steps');

    const countryData = {
        'Singapore eSIM Guide': {
            providers: [
                {
                    provider: 'GOMO by Singtel',
                    plan: 'Tourist eSIM (7–12 days, 100GB)',
                    link: 'https://www.gomo.sg/esim'
                },
                {
                    provider: 'MI Prepaid eSIM',
                    plan: 'Prepaid Tourist SIM',
                    link: 'https://www.m1.com.sg/m1'
                },
                {
                    provider: 'Airalo – Singapore',
                    plan: '3GB–10GB options',
                    link: 'https://www.airalo.com/sg'
                }
            ],
            steps: [
                '1. Choose and purchase your plan via provider website or app',
                '2. Scan the provided QR code',
                '3. Install eSIM on your phone',
                '4. Enable mobile data and roaming',
                '5. Done!'
            ]
        },
        'Philippines eSIM Guide': {
            providers: [
                {
                    provider: 'Globe Go eSIM',
                    plan: 'Tourist SIM with 20GB+',
                    link: 'https://www.globe.com.ph/esim.html'
                },
                {
                    provider: 'M1 Prepaid eSIM',
                    plan: 'Prepaid Travel SIM',
                    link: 'https://smart.com.ph/Pages/esim'
                },
                {
                    provider: 'Airalo – Singapore',
                    plan: 'Local data (3GB–10GB)',
                    link: 'https://www.airalo.com/philippines-esim'
                },

            ],
            steps: [
                '1. Select and purchase plan online',
                '2. Receive QR code',
                '3. Install eSIM profile',
                '4. Activate before travel or on arrival'
            ]
        },
        'Taiwan eSIM Guide': {
            providers: [
                {
                    provider: 'Chunghwa Telecom',
                    plan: 'Tourist eSIM w/ unlimited data',
                    link: 'https://www.cht.com.tw/en/home/cht'
                },
                {
                    provider: 'Taiwan Mobile',
                    plan: 'Local + Tourist Plans',
                    link: 'https://www.taiwanmobile.com/english/services/esim.html'
                },
                {
                    provider: 'Airalo – Taiwan',
                    plan: '3GB–10GB options',
                    link: 'https://www.airalo.com/taiwan-esim'
                }
            ],
            steps: [
                '1. Choose and buy plan',
                '2. Scan QR code or use app',
                '3. Install eSIM profile',
                '4. Turn on roaming',
                '5. Done!'
            ]
        },
        'China eSIM Guide': {
            providers: [
                {
                    provider: 'Airalo – China',
                    plan: 'Local eSIM (2GB–10GB options)',
                    link: 'https://www.airalo.com/china-esim'
                },
                {
                    provider: 'Nomad eSIM',
                    plan: 'China + Hong Kong options',
                    link: 'https://www.getnomad.app/'
                },
                {
                    provider: 'Holafly eSIM',
                    plan: 'Unlimited data (Daily plans)',
                    link: 'https://esim.holafly.com/china-esim/'
                }
            ],
            steps: [
                '1. Ensure your device supports eSIM and is unlocked.',
                '2. Choose a provider and purchase a plan online.',
                '3. Stay connected to Wi-Fi.',
                '4. Receive and scan the QR code provided by the provider.',
                '5. Install the eSIM profile on your phone.',
                '6. Turn on mobile data and roaming.',
                '7. Note: Some websites and apps may be restricted in China. Consider downloading a VPN before your trip.'
            ]
        }
    };

    tabButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            // Activate tab visually
            tabButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const selected = btn.textContent.trim();
            const selectedData = countryData[selected];

            // Update provider table
            providerTableBody.innerHTML = '';
            selectedData.providers.forEach(item => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${item.provider}</td>
                    <td>${item.plan}</td>
                    <td><a href="${item.link}" target="_blank">${item.link}</a></td>
                `;
                providerTableBody.appendChild(row);
            });

            // Update setup steps
            stepsContainer.innerHTML = '';
            selectedData.steps.forEach(step => {
                const li = document.createElement('li');
                li.textContent = step;
                stepsContainer.appendChild(li);
            });
        });
    });
</script>