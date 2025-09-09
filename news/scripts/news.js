const newsImgDir = "../resources/img/news/";
let allCards = [];

let currentPage = 1;
const itemsPerPage = 4;
let allNews = [];

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
        allNews = data; // store full news list
        renderNews();   // render first page
        renderPagination(); // create pagination controls
    } catch (error) {
        console.error("Error fetching news:", error);
    }
};

const renderNews = () => {
    const track = document.getElementById("newsContainer");
    track.innerHTML = "";

    const start = (currentPage - 1) * itemsPerPage;
    const end = start + itemsPerPage;
    const paginatedItems = allNews.slice(start, end);

    paginatedItems.forEach(item => {
        const columnItem = document.createElement("div");
        columnItem.className = "column-item";

        const link = document.createElement("a");
        link.href = `../news-details/index.php?ref=${item.ref_num}`;
        link.className = "news-link";

        link.innerHTML = `
            <div class="thumbnail-container">
                ${item.news_thumbnail ? `<img src="${newsImgDir + item.news_thumbnail}" alt="News Thumbnail" class="thumbnail" style="height:300px;" />` : ""}
            </div>
            <p class="text-capitalize menu-heading mb-10">${item.news_title}</p>
            <p class="mb-4">${item.news_description}</p>
        `;

        columnItem.appendChild(link);
        track.appendChild(columnItem);
    });
};

const renderPagination = () => {
    const paginationContainer = document.getElementById("pagination");
    paginationContainer.className = "pagination-container";
    paginationContainer.innerHTML = "";

    const totalPages = Math.ceil(allNews.length / itemsPerPage);

    // Prev button
    const prevBox = document.createElement("div");
    prevBox.className = "pagination-box";
    prevBox.innerHTML = `<span>&lt;</span>`;
    prevBox.style.opacity = currentPage === 1 ? "0.4" : "1";
    prevBox.style.pointerEvents = currentPage === 1 ? "none" : "auto";
    prevBox.onclick = () => {
        if (currentPage > 1) {
            currentPage--;
            renderNews();
            renderPagination();
        }
    };
    paginationContainer.appendChild(prevBox);

    // Page numbers
    for (let i = 1; i <= totalPages; i++) {
        const pageBox = document.createElement("div");
        pageBox.className = "pagination-box" + (i === currentPage ? " active" : "");
        pageBox.innerHTML = `<span>${i}</span>`;
        pageBox.onclick = () => {
            currentPage = i;
            renderNews();
            renderPagination();
        };
        paginationContainer.appendChild(pageBox);
    }

    // Next button
    const nextBox = document.createElement("div");
    nextBox.className = "pagination-box";
    nextBox.innerHTML = `<span>&gt;</span>`;
    nextBox.style.opacity = currentPage === totalPages ? "0.4" : "1";
    nextBox.style.pointerEvents = currentPage === totalPages ? "none" : "auto";
    nextBox.onclick = () => {
        if (currentPage < totalPages) {
            currentPage++;
            renderNews();
            renderPagination();
        }
    };
    paginationContainer.appendChild(nextBox);
};


document.addEventListener("DOMContentLoaded", () => {
    fetchNews();
});
