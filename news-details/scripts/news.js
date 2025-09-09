const imgDir = "../resources/img/news/";
const pageData = document.getElementById("page-data");
const pageLang = pageData.dataset.lang;
const newsRef = pageData.dataset.ref;



//to determine if a section from news details will appear or not based on data presence
function updateSection(value, contentId, sectionClass) {
    if (value && value.trim() !== "") {
        document.getElementById(contentId).textContent = value;
    } else {
        document.querySelector(`.${sectionClass}`).style.display = "none";
    }
}
//to hide sections such as learning goals, activities, features, materials and teachers
function hideSection(sectionClass) {
    const section = document.querySelector(`.${sectionClass}`);
    if (section) section.style.display = "none";
}

const fetchNews = async () => {
    try {
        const response = await fetch("scripts/fetch-news.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `language=${encodeURIComponent(pageLang)}&news_ref_num=${encodeURIComponent(newsRef)}`
        });

        const data = await response.json();
        const news = data[0];

        document.getElementById("news-title").textContent = news.news_title;
        document.getElementById("news-date-posted").textContent = "Date Posted: " + news.date_posted;

        console.log("Fetched news data:", news);
        console.log("date_posted:", news.date_posted);
        console.log("date:", news.date);

        document.getElementById("news-story-source").textContent = news.story_source;
        document.getElementById("news-video-file").textContent = news.video_file;

    } catch (err) {
        console.error("Error fetching news details:", err);
    }
};

const fetchAndRenderList = async ({
    url,
    containerId,
    sectionClass = null,
    extractContent
}) => {
    try {
        const response = await fetch(url, {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `language=${encodeURIComponent(pageLang)}&news_ref_num=${encodeURIComponent(newsRef)}`
        });

        const data = await response.json();
        const container = document.getElementById(containerId);
        container.innerHTML = '';

        if (!Array.isArray(data) || data.length === 0) {
            if (sectionClass) hideSection(sectionClass);
            return;
        }

        data.forEach((item, index) => {
            const wrapper = document.createElement("div");
            wrapper.className = "news-section";
            wrapper.innerHTML = extractContent(item, index);
            container.appendChild(wrapper);
        });

    } catch (err) {
        console.error(`Error fetching from ${url}:`, err);
    }
};
const fetchNewsSection = () =>
    fetchAndRenderList({
        url: "scripts/fetch-news-section.php",
        containerId: "news-container",
        sectionClass: "news-section",
        extractContent: (item, index) => `
            <div class="container" style="margin-top:2rem;">
                ${item.section_title
                ? `
                <div class="row position-relative">
                    <div class="col-lg-12 text-center mb50" style="justify-items:center; font-family:'Poppins', sans-serif;">
                        <div class="zic-img" style="margin-bottom:1rem;">
                            <h2 class="text-left text-capitalize" style="margin:0 2rem; font-size:20px; font-weight:700;">${item.section_title}</h2>
                        </div>
                    </div>
                </div>
                `
                : ``
            }
                

                <div class="row justify-content-center align-items-center" style="margin-top:1rem; margin-bottom:1rem;">
                    ${item.photo
                ? `
                    <div class="col-12 d-flex justify-content-center mb-3">
                        <img src="${imgDir + item.photo}" alt="Section Image" style="max-width:100%; height:auto; border-radius:8px;"/>
                    </div>
                    <div class="col-12 d-flex">
                        <p style="text-align: left; margin:0 2rem; font-size:14px;">
                            ${item.section_detail}
                        </p>
                    </div>
                  `
                : `
                <div class="col-12 d-flex">
                    <p style="text-align: left; margin:0 2rem; font-size:14px;">
                        ${item.section_detail}
                    </p>
                </div>
              `
            }
                </div>
            </div>
        `
    });



// Run when page is ready
document.addEventListener("DOMContentLoaded", () => {
    fetchNews();
    fetchNewsSection();
});
