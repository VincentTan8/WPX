const courseImgDir = "../resources/img/courses/";
let allCards = [];

const fetchCourses = async (filter = "") => {
    const pageData = document.getElementById("page-data");
    const pageLang = pageData.dataset.lang;

    try {
        const response = await fetch("scripts/fetch-all-courses.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `language=${encodeURIComponent(pageLang)}&filter=${encodeURIComponent(filter)}`
        });

        const data = await response.json();

        const track = document.getElementById("courseContainer");
        track.innerHTML = "";
        allCards = [];

        data.forEach(item => {
            const card = document.createElement("a");
            card.href = `../course?mod=${item.ref_num}`;
            card.className = "course-link";

            card.innerHTML = `
                <div class="course-card">
                    <div class="course-image-wrapper">
                        <img src="${courseImgDir}${item.course_img}" alt="Grid Image" class="image-grid" />
                        <img src="${courseImgDir}${item.course_list_img}" alt="List Image" class="image-list" />
                        <div class="course-badge">${item.thumbnail_tag}</div>
                    </div>
                    <div class="course-content">
                        <div class="course-rating-title-wrap">
                            <div class="course-title">${item.course_short_title}</div>
                            <div class="course-rating" style="display: flex; align-items: center; gap: 4px;">
                                ⭐ <span class="rating-text">5.0</span>
                                <span class="rating-text">(20)</span>
                            </div>
                        </div>
                        <div class="course-description">
                            ${item.course_description}
                        </div>
                        <div class="course-footer">${item.course_type}</div>
                    </div>
                </div>
            `;

            track.appendChild(card);
            allCards.push(card);
        });

        setupPagination();
    } catch (error) {
        console.error("Error fetching courses:", error);
    }
};


document.addEventListener("DOMContentLoaded", () => {
    const categoryFilter = document.querySelector(".category-filter");
    const searchTextBox = document.getElementById("searchTextBox");

    categoryFilter.addEventListener("change", () => {
        const selectedFilter = categoryFilter.value;
        fetchCourses(selectedFilter);
    });

    searchTextBox.addEventListener('input', () => {
        const query = searchTextBox.value;
        fetchCourses(query);
    });

    fetchCourses();
});
