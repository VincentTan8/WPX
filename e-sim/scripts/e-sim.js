const pageData = document.getElementById("page-data");
const pageLang = pageData.dataset.lang;
const tabButtons = document.querySelectorAll('.country-tabs .tab');
const providerTableBody = document.querySelector('.provider-table tbody');
const stepsContainer = document.querySelector('.setup-steps');

let countryData = {};

if (pageLang === '_en') {
    countryData = {
        sg: {
            title: "Singapore eSIM Guide",
            providers: [
                { provider: 'GOMO by Singtel', plan: 'Tourist eSIM (7–12 days, 100GB)', link: 'https://www.gomo.sg/esim' },
                { provider: 'MI Prepaid eSIM', plan: 'Prepaid Tourist SIM', link: 'https://www.m1.com.sg/m1' },
                { provider: 'Airalo – Singapore', plan: '3GB–10GB options', link: 'https://www.airalo.com/sg' }
            ],
            steps: [
                '1. Choose and purchase your plan via provider website or app',
                '2. Scan the provided QR code',
                '3. Install eSIM on your phone',
                '4. Enable mobile data and roaming',
                '5. Done!'
            ]
        },
        ph: {
            title: "Philippines eSIM Guide",
            providers: [
                { provider: 'Globe Go eSIM', plan: 'Tourist SIM with 20GB+', link: 'https://www.globe.com.ph/esim.html' },
                { provider: 'M1 Prepaid eSIM', plan: 'Prepaid Travel SIM', link: 'https://smart.com.ph/Pages/esim' },
                { provider: 'Airalo – Philippines', plan: 'Local data (3GB–10GB)', link: 'https://www.airalo.com/philippines-esim' }
            ],
            steps: [
                '1. Select and purchase plan online',
                '2. Receive QR code',
                '3. Install eSIM profile',
                '4. Activate before travel or on arrival'
            ]
        },
        tw: {
            title: "Taiwan eSIM Guide",
            providers: [
                { provider: 'Chunghwa Telecom', plan: 'Tourist eSIM w/ unlimited data', link: 'https://www.cht.com.tw/en/home/cht' },
                { provider: 'Taiwan Mobile', plan: 'Local + Tourist Plans', link: 'https://www.taiwanmobile.com/english/services/esim.html' },
                { provider: 'Airalo – Taiwan', plan: '3GB–10GB options', link: 'https://www.airalo.com/taiwan-esim' }
            ],
            steps: [
                '1. Choose and buy plan',
                '2. Scan QR code or use app',
                '3. Install eSIM profile',
                '4. Turn on roaming',
                '5. Done!'
            ]
        },
        cn: {
            title: "China eSIM Guide",
            providers: [
                { provider: 'Airalo – China', plan: 'Local eSIM (2GB–10GB options)', link: 'https://www.airalo.com/china-esim' },
                { provider: 'Nomad eSIM', plan: 'China + Hong Kong options', link: 'https://www.getnomad.app/' },
                { provider: 'Holafly eSIM', plan: 'Unlimited data (Daily plans)', link: 'https://esim.holafly.com/china-esim/' }
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
}

if (pageLang === '_cn') {
    countryData = {
        sg: {
            title: "新加坡 eSIM 指南",
            providers: [
                { provider: 'GOMO by Singtel', plan: '游客 eSIM（7–12 天，100GB）', link: 'https://www.gomo.sg/esim' },
                { provider: 'MI 预付费 eSIM', plan: '预付费旅游 SIM', link: 'https://www.m1.com.sg/m1' },
                { provider: 'Airalo – 新加坡', plan: '3GB–10GB 选项', link: 'https://www.airalo.com/sg' }
            ],
            steps: [
                '1. 通过网站或应用选择并购买套餐',
                '2. 扫描提供的二维码',
                '3. 在手机上安装 eSIM',
                '4. 启用移动数据和漫游',
                '5. 完成！'
            ]
        },
        ph: {
            title: "菲律宾 eSIM 指南",
            providers: [
                { provider: 'Globe Go eSIM', plan: '游客 SIM，含 20GB+', link: 'https://www.globe.com.ph/esim.html' },
                { provider: 'M1 预付费 eSIM', plan: '旅游预付 SIM 卡', link: 'https://smart.com.ph/Pages/esim' },
                { provider: 'Airalo – 菲律宾', plan: '本地数据（3GB–10GB）', link: 'https://www.airalo.com/philippines-esim' }
            ],
            steps: [
                '1. 在线选择并购买套餐',
                '2. 获取二维码',
                '3. 安装 eSIM 配置文件',
                '4. 出发前或抵达后激活'
            ]
        },
        tw: {
            title: "台湾 eSIM 指南",
            providers: [
                { provider: '中华电信', plan: '游客 eSIM 无限流量', link: 'https://www.cht.com.tw/en/home/cht' },
                { provider: '台湾大哥大', plan: '本地及旅游套餐', link: 'https://www.taiwanmobile.com/english/services/esim.html' },
                { provider: 'Airalo – 台湾', plan: '3GB–10GB 选项', link: 'https://www.airalo.com/taiwan-esim' }
            ],
            steps: [
                '1. 选择并购买套餐',
                '2. 扫描二维码或使用应用',
                '3. 安装 eSIM 配置文件',
                '4. 打开漫游',
                '5. 完成！'
            ]
        },
        cn: {
            title: "中国 eSIM 指南",
            providers: [
                { provider: 'Airalo – 中国', plan: '本地 eSIM（2GB–10GB 选项）', link: 'https://www.airalo.com/china-esim' },
                { provider: 'Nomad eSIM', plan: '中国 + 香港选项', link: 'https://www.getnomad.app/' },
                { provider: 'Holafly eSIM', plan: '无限数据（日计划）', link: 'https://esim.holafly.com/china-esim/' }
            ],
            steps: [
                '1. 确保设备支持 eSIM 并已解锁',
                '2. 在线选择供应商并购买计划',
                '3. 保持 Wi-Fi 连接',
                '4. 接收并扫描二维码',
                '5. 安装 eSIM 配置文件',
                '6. 打开数据和漫游',
                '7. 注意：中国可能限制部分网站，请考虑提前下载 VPN'
            ]
        }
    };
}

// Reusable populate function
function populateTable(countryCode) {
    const country = countryData[countryCode];
    if (!country) return;

    // Active tab styling
    tabButtons.forEach(b => b.classList.remove('active'));
    document.getElementById(countryCode).classList.add('active');

    // Title (if needed)
    const titleEl = document.getElementById('country-title');
    if (titleEl) titleEl.textContent = country.title;

    // Providers
    providerTableBody.innerHTML = '';
    country.providers.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.provider}</td>
            <td>${item.plan}</td>
            <td><a href="${item.link}" target="_blank">${item.provider}</a></td>
        `;
        providerTableBody.appendChild(row);
    });

    // Steps
    stepsContainer.innerHTML = '';
    country.steps.forEach(step => {
        const li = document.createElement('li');
        li.textContent = step;
        stepsContainer.appendChild(li);
    });
}

// Update tab text
tabButtons.forEach(btn => {
    const key = btn.id;
    if (countryData[key]) {
        btn.textContent = countryData[key].title;
    }
});



// Event listeners
tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        populateTable(btn.id);
    });
});

const defaultActive = document.querySelector('.country-tabs .tab.active');
if (defaultActive) {
    populateTable(defaultActive.id);
}