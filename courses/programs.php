<style>
    .course-section {
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 30px 20px;
        overflow-x: hidden;
    }

    .controls-container {
        display: flex;
        align-items: center;
        gap: 30px;
        padding: 20px 0;
        flex-wrap: wrap;
        margin-bottom: 50px;
    }

    .view-toggle {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .toggle-btn {
        border: none;
        background: none;
        cursor: pointer;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
    }

    .toggle-btn.active-toggle svg rect:first-child {
        fill: #4170FE;
    }

    .toggle-btn svg rect:first-child {
        fill: #E6E6E6;
    }

    .toggle-btn.active-toggle svg rect:not(:first-child),
    .toggle-btn.active-toggle svg line,
    .toggle-btn.active-toggle svg path {
        stroke: white;
    }

    .toggle-btn svg rect:not(:first-child),
    .toggle-btn svg line,
    .toggle-btn svg path {
        stroke: #2D2B32;
    }

    .page-info {
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #2D2B32;
    }

    .filter-container {
        display: flex;
        align-items: center;
        margin-left: auto;
        gap: 20px;
        flex-wrap: wrap;
    }

    .category-filter {
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
    }

    .search-box {
        display: flex;
        align-items: center;
        position: relative;
        width: 250px;
    }

    .search-box input {
        width: 100%;
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 5px 0 0 5px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
    }

    .search-btn {
        width: 45px;
        height: 45px;
        border-radius: 0 5px 5px 0;
        background: #4170FE;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        position: absolute;
        right: 0;
        top: 0;
    }

    .search-btn svg {
        width: 20px;
        height: 20px;
        stroke-width: 3px;
        stroke: #FFF;
    }

    .all-programs-title {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: bold;
        color: #2D2B32;
        margin-top: 51px;
        margin-bottom: 20px;
    }

    .course-cards.grid-view {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
    }

    .course-cards.list-view {
        display: flex;
        flex-direction: column;
        gap: 50px;
    }

    .course-card {
        border-radius: 10px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        width: 433px;
        height: 479.631px;
        background: #F0F8FF;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);
    }

    .course-cards.list-view .course-card {
        flex-direction: row;
        width: 100%;
        max-width: 1439px;
        height: 450px;
        background: #FFF;
        box-shadow: 0px 0px 36.5px rgba(0, 0, 0, 0.25);
        align-items: center;
        padding: 20px;
        margin: 0 auto;
    }

    .course-image-wrapper {
        position: relative;
        width: 417px;
        height: 255px;
        flex-shrink: 0;
        overflow: hidden;
        align-self: center;
        margin-top: 6px;
        border-radius: 5px;
    }

    .course-cards.list-view .course-image-wrapper {
        width: 565.5px;
        height: 430px;
        margin-top: 0;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .course-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .course-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background: white;
        color: black;
        font-size: 12px;
        padding: 5px 10px;
        border-radius: 30px;
        width: 100px;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
    }

    .course-content {
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 10px;
    }

    .course-cards.list-view .course-content {
        width: 731px;
        height: 381px;
        flex-direction: column;
        align-items: flex-start;
        gap: 22px;
        flex-shrink: 0;
        margin-right: 86.5px;
        margin-left: 45px;
        padding: 0;
    }

    .course-title {
        width: 314px;
        height: 51px;
        color: #18181B;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 700;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        text-align: left;
    }

    .rating-text {
        color: #A8A0A0;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 400;
    }

    .course-description {
        width: 415px;
        height: 83px;
        overflow: hidden;
        color: #18181B;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 400;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
    }

    .course-footer {
        width: 248px;
        height: 28px;
        color: #4170FE;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 700;
    }

    .image-grid {
        display: block;
    }

    .image-list {
        display: none;
    }

    .course-cards.list-view .image-grid {
        display: none;
    }

    .course-cards.list-view .image-list {
        display: block;
    }

    .course-rating-title-wrap {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-between;
        gap: 8px;
        width: 100%;
    }

    .course-cards.list-view .course-rating-title-wrap {
        flex-direction: column;
        align-items: flex-start;
        gap: 6px;
    }

    .course-cards.list-view .course-rating-title-wrap .course-rating {
        order: 1;
    }

    .course-cards.list-view .course-rating-title-wrap .course-title {
        order: 2;
    }

    .course-cards.list-view .course-title {
        width: auto;
        height: auto;
        -webkit-line-clamp: unset;
        display: block;
    }

    .course-cards.list-view .course-description {
        width: auto;
        height: auto;
        -webkit-line-clamp: unset;
        display: block;
    }

    .course-cards.list-view .course-footer {
        width: auto;
        height: auto;
    }

    .pagination-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
        gap: 35px;
    }

    .pagination-box {
        width: 50px;
        height: 50px;
        border-radius: 5px;
        border: 1px solid #D9D9D9;
        background: #FFF;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.3s, border-color 0.3s;
    }

    .pagination-box span {
        width: 12px;
        height: 20px;
        color: #B7B6B6;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }

    /* Active page */
    .pagination-box.active {
        background: #09CA91;
        border: 1px solid #E3E3E3;
    }

    .pagination-box.active span {
        color: #FFF;
    }

    @media (max-width: 1024px) {
        .course-cards.list-view .course-card {
            flex-direction: column;
            align-items: flex-start;
            height: auto;
            padding: 20px;
        }

        .course-cards.list-view .course-image-wrapper {
            width: 100%;
            height: auto;
            max-height: 300px;
        }

        .course-cards.list-view .course-content {
            margin: 20px 0 0;
            width: 100%;
            height: auto;
        }

        .course-cards.list-view .course-title,
        .course-cards.list-view .course-description,
        .course-cards.list-view .course-footer {
            width: 100%;
        }

        .course-cards.list-view .course-rating-title-wrap {
            gap: 10px;
        }
    }

    @media (max-width: 768px) {
        .controls-container {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .filter-container {
            width: 100%;
            justify-content: space-between;
        }

        .search-box {
            width: 100%;
        }

        .all-programs-title {
            font-size: 20px;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .pagination-container {
            gap: 20px;
        }

        .pagination-box {
            width: 40px;
            height: 40px;
        }

        .pagination-box span {
            font-size: 16px;
        }


        .view-toggle {
            display: none;
        }


        .course-cards.grid-view {
            flex-direction: column;
        }


        .filter-container {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .search-box {
            order: -1;

        }


        .course-description {
            -webkit-line-clamp: 3;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 14px;
        }

        .course-cards.list-view .course-title,
        .course-cards.list-view .course-footer {
            font-size: 18px;
        }

        .course-cards.list-view .course-description {
            width: 100%;
            height: auto;
            font-size: 16px;
            -webkit-line-clamp: 3;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
        }


        .course-cards.list-view .course-card {
            padding: 15px;
            gap: 20px;
        }

        .course-cards.list-view .course-content {
            margin: 15px 0 0;
            gap: 15px;
        }


    }
</style>


<div class="course-section" id="courseSection">
    <div class="controls-container">
        <div class="view-toggle">
            <button class="toggle-btn active-toggle" id="gridToggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <rect width="40" height="40" rx="5" />
                    <rect x="11.5" y="10.5" width="8" height="8" rx="0.5" />
                    <rect x="11.5" y="20.5" width="8" height="8" rx="0.5" />
                    <rect x="21.5" y="20.5" width="8" height="8" rx="0.5" />
                    <rect x="21.5" y="10.5" width="8" height="8" rx="0.5" />
                </svg>
            </button>
            <button class="toggle-btn" id="listToggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                    <rect width="40" height="40" rx="5" />
                    <g transform="translate(12, 14)">
                        <line y1="1" x2="2" y2="1" stroke="#2D2B32" stroke-width="2" />
                        <line x1="5" y1="1" x2="15" y2="1" stroke="#2D2B32" stroke-width="2" stroke-linecap="square" />
                        <line y1="6" x2="2" y2="6" stroke="#2D2B32" stroke-width="2" />
                        <line x1="5" y1="6" x2="15" y2="6" stroke="#2D2B32" stroke-width="2" stroke-linecap="square" />
                        <line y1="11" x2="2" y2="11" stroke="#2D2B32" stroke-width="2" />
                        <line x1="5" y1="11" x2="15" y2="11" stroke="#2D2B32" stroke-width="2"
                            stroke-linecap="square" />
                    </g>
                </svg>
            </button>
            <div class="page-info" id="pageInfo"></div>

        </div>

        <div class="filter-container">
            <select class="category-filter">
                <option id="filter-all" value=""></option>
                <option id="filter-eng" value="English Programs">English Programs</option>
                <option id="filter-chi" value="Chinese Programs">Chinese Programs</option>
                <option id="filter-fam" value="Family Package">Family Package</option>
                <option id="filter-school" value="School Package">School Package</option>
                <option id="filter-kids" value="Kids Courses">Kids Courses</option>
                <option id="filter-adults" value="Adult Courses">Adult Courses</option>
                <!-- <option id="filter-teens" value="Teens/Youth Courses">Teens/Youth Courses</option> -->
            </select>
            <!-- <div class="search-box">
                <input type="text" placeholder="Search..." />
                <div class="search-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M16.2172 16.2346L22 22M18.6667 10.3333C18.6667 14.9357 14.9357 18.6667 10.3333 18.6667C5.73096 18.6667 2 14.9357 2 10.3333C2 5.73096 5.73096 2 10.3333 2C14.9357 2 18.6667 5.73096 18.6667 10.3333Z"
                            stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div> -->
        </div>
    </div>

    <div class="all-programs-title" id="allProgramsTitle"></div>

    <div class="course-cards grid-view" id="courseContainer"></div>

    <div class="pagination-container" id="paginationContainer"></div>

</div>
<script>
    function setupPagination() {
        const container = document.getElementById("courseContainer");
        const paginationContainer = document.getElementById("paginationContainer");
        const pageInfo = document.getElementById("pageInfo");
        const gridBtn = document.getElementById("gridToggle");
        const listBtn = document.getElementById("listToggle");

        const GRID_ITEMS_PER_PAGE = 9;
        const LIST_ITEMS_PER_PAGE = 5;

        let currentPage = 1;
        let currentView = container.classList.contains("list-view") ? "list" : "grid";

        function setActive(btn) {
            [gridBtn, listBtn].forEach(b => b.classList.remove("active-toggle"));
            btn.classList.add("active-toggle");
        }

        function getItemsPerPage() {
            return currentView === "grid" ? GRID_ITEMS_PER_PAGE : LIST_ITEMS_PER_PAGE;
        }

        function getTotalPages() {
            return Math.ceil(allCards.length / getItemsPerPage());
        }

        function renderPaginationButtons() {
            paginationContainer.innerHTML = "";
            const totalPages = getTotalPages();

            for (let i = 1; i <= totalPages; i++) {
                const box = document.createElement("div");
                box.classList.add("pagination-box");
                if (i === currentPage) box.classList.add("active");

                const span = document.createElement("span");
                span.textContent = i;

                box.appendChild(span);
                paginationContainer.appendChild(box);

                box.addEventListener("click", () => {
                    setPage(i);
                    const title = document.getElementById("allProgramsTitle");
                    const offset = -250;
                    const top = title.getBoundingClientRect().top + window.pageYOffset + offset;

                    window.scrollTo({
                        top: top,
                        behavior: "smooth"
                    });
                });
            }

            paginationContainer.style.display = totalPages > 1 ? "flex" : "none";
        }

        function updatePaginationView() {
            const itemsPerPage = getItemsPerPage();
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;

            allCards.forEach((card, index) => {
                card.style.display = (index >= start && index < end) ? "block" : "none";
            });
        }

        function updatePageInfo() {
            const totalPages = getTotalPages();
            if ('<?= $lang ?>' == '_en')
                pageInfo.textContent = `Page ${currentPage} of ${totalPages}`;
            if ('<?= $lang ?>' == '_cn')
                pageInfo.textContent = `第${currentPage}页 / 共${totalPages}页`;
        }

        function setPage(pageNum) {
            currentPage = pageNum;
            renderPaginationButtons();
            updatePaginationView();
            updatePageInfo();
        }

        // View Toggle
        gridBtn.addEventListener("click", () => {
            container.classList.remove("list-view");
            container.classList.add("grid-view");
            currentView = "grid";
            setActive(gridBtn);
            setPage(1);
        });

        listBtn.addEventListener("click", () => {
            container.classList.remove("grid-view");
            container.classList.add("list-view");
            currentView = "list";
            setActive(listBtn);
            setPage(1);
        });

        // Initialize default
        if (window.innerWidth <= 768) {
            container.classList.remove("grid-view");
            container.classList.add("list-view");
            currentView = "list";
            setActive(listBtn);
        } else {
            setActive(gridBtn);
        }

        setPage(1);
    }
</script>