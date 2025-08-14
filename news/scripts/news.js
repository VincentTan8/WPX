const newsImgDir = "../resources/img/news/";
let allCards = [];

const fetchNews = async (filter = "") => {
    const pageData = document.getElementById("page-data");
    const pageLang = pageData.dataset.lang;

    try {
        const response = await fetch("scripts/fetch-all-news.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `language=${encodeURIComponent(pageLang)}&filter=${encodeURIComponent(filter)}`
        });

        const data = await response.json();

        const track = document.getElementById("newsContainer");
        track.innerHTML = "";
        allCards = [];

        data.forEach(item => {
            // Create outer card div
            const columnItem = document.createElement("div");
            columnItem.className = "column-item";

            // Create link inside the card
            const link = document.createElement("a");
            link.href = `../news-details/index.php?ref=${item.ref_num}`;
            link.className = "news-link";

            // Build inner HTML
            link.innerHTML = `
                <div class="thumbnail-container">
                    ${item.news_thumbnail ? `<img src="${newsImgDir + item.news_thumbnail}" alt="News Thumbnail" class="thumbnail" style="height:300px;" />` : ""}
                </div>
                <p class="text-capitalize menu-heading mb-10">${item.news_title}</p>
                <p class="mb-4">${item.news_description}</p>
            `;

            // Append link into column-item
            columnItem.appendChild(link);
            track.appendChild(columnItem);
            allCards.push(columnItem);
        });
    } catch (error) {
        console.error("Error fetching news:", error);
    }
};

document.addEventListener("DOMContentLoaded", () => {
    fetchNews();
});
