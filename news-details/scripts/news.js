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
        document.getElementById("news-category").textContent = news.news_category;
        document.getElementById("news-description").textContent = news.news_description;
        document.getElementById("news-date-posted").textContent = news.date_posted;
        document.getElementById("news-date").textContent = news.date;
        document.getElementById("news-id").textContent = news.news_id;
        document.getElementById("news-lang").textContent = news.news_lang;

        // Set thumbnail image
        if (document.getElementById("news-thumbnail"))
            document.getElementById("news-thumbnail").src = imgDir + news.news_thumbnail;

        // Optional: story source and video file
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

        // 🔥 THIS is the missing part: rendering each item using extractContent
        data.forEach(item => {
            const wrapper = document.createElement("div");
            wrapper.className = "news-section";
            wrapper.innerHTML = extractContent(item);
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
        extractContent: item => `
            <div class="container" style="margin-top:2rem;">
                <div class="row position-relative">
                    <div class="col-lg-12 text-center mb50">
                        <div class="zic-img" style="margin-bottom:1rem;">
                            <h2 class="text-capitalize">${item.section_title}</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="tabs" style="margin-top:1rem; margin-bottom:1rem;">
                        ${item.photo ? `<img src="${imgDir + item.photo}" alt="Section Image" style="margin-bottom:1rem;"/>` : ""}
                        <p style="text-align: left; margin-left:2rem;margin-right:2rem; z-index:999;   ">${item.section_detail}</p>
                    </div>
                </div>
            </div>
        `
    });




// Run when page is ready
document.addEventListener("DOMContentLoaded", () => {
    fetchNews();
    fetchNewsSection();
});
