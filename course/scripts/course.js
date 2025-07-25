const imgDir = "../resources/img/courses/";
const checkImg = imgDir + "check-yellow-list.png";
const pageData = document.getElementById("page-data");
const pageLang = pageData.dataset.lang;
const courseRef = pageData.dataset.mod;

//for rates usage and related courses usage later
let age_group = "";
let course_type = "";
let course_lang = "";
let activeSessionType = "";
let activeNumSessions = "";

//to determine if a section from course details will appear or not based on data presence
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

const fetchCourseDetails = async () => {
    try {
        const response = await fetch("scripts/fetch-course-details.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `language=${encodeURIComponent(pageLang)}&courses_ref_num=${encodeURIComponent(courseRef)}`
        });

        const data = await response.json();
        const course = data[0];

        document.getElementById("course-title").textContent = course.course_title;
        document.getElementById("breadcrumb-title").textContent = course.course_short_title;
        document.getElementById("breadcrumb-footer").innerHTML = course.course_type;
        document.getElementById("course-subtitle").textContent = course.course_subtitle;
        document.getElementById("course-description").textContent = course.course_description;
        document.getElementById("course-thumbnail").textContent = course.thumbnail_tag;

        //idk bout this one mehn
        document.getElementById("try-button").dataset.id = course.course_title;  //I used id coz un ung ginamit ni sir sa footer.php
        document.getElementById("try-button").dataset.ref_num = courseRef;

        updateSection(course.class_hours, "course-class-hours", "class-hours-section");
        updateSection(course.suitable_for, "course-suitable-for", "suitable-for-section");
        updateSection(course.course_type, "course-type", "course-type-section");
        updateSection(course.course_start_date, "course-start-date", "start-date-section");

        if (document.getElementById("course-img"))
            document.getElementById("course-img").src = imgDir + course.course_img;

        //get needed info for rates
        age_group = course.age_group;
        course_type = course.course_type_en;
        fetchPriceConfigs();
        course_lang = course.language;
        //fetch related courses based on current course age group and course language
        fetchRelatedCourses();

    } catch (err) {
        console.error("Error fetching course details:", err);
    }
};

const fetchAndRenderList = async ({
    url,
    containerId,
    sectionClass = null, // Optional: for hideSection
    extractContent
}) => {
    try {
        const response = await fetch(url, {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `language=${encodeURIComponent(pageLang)}&courses_ref_num=${encodeURIComponent(courseRef)}`
        });

        const data = await response.json();
        const container = document.getElementById(containerId);
        container.innerHTML = '';

        if (!Array.isArray(data) || data.length === 0) {
            if (sectionClass) hideSection(sectionClass);
            return;
        }

        data.forEach(item => {
            const itemElem = document.createElement("div");
            itemElem.className = "course-item";

            const img = document.createElement("img");
            img.src = checkImg;
            img.alt = "check";
            itemElem.appendChild(img);

            const content = extractContent(item);
            if (typeof content === "string") {
                itemElem.append(" " + content);
            } else {
                itemElem.appendChild(content);
            }

            container.appendChild(itemElem);
        });

    } catch (err) {
        console.error(`Error fetching from ${url}:`, err);
    }
};

const fetchLearningGoals = () =>
    fetchAndRenderList({
        url: "scripts/fetch-learning-goals.php",
        containerId: "goal-container",
        sectionClass: "learning-goals-section",
        extractContent: item => item.learning_goal
    });

const fetchCourseActivities = () =>
    fetchAndRenderList({
        url: "scripts/fetch-activities.php",
        containerId: "activity-container",
        sectionClass: "activities-section",
        extractContent: item => item.activity
    });

const fetchCourseFeatures = () =>
    fetchAndRenderList({
        url: "scripts/fetch-features.php",
        containerId: "feature-container",
        sectionClass: "features-section",
        extractContent: item => {
            const div = document.createElement("div");
            const strong = document.createElement("strong");
            strong.textContent = item.feature_bold;
            div.appendChild(strong);
            div.append(" " + item.feature);
            return div;
        }
    });

const fetchCourseMaterials = () =>
    fetchAndRenderList({
        url: "scripts/fetch-materials.php",
        containerId: "material-container",
        sectionClass: "materials-section",
        extractContent: item => item.material
    });

const fetchCourseTeachers = () =>
    fetchAndRenderList({
        url: "scripts/fetch-teachers.php",
        containerId: "teacher-container",
        sectionClass: "teachers-section",
        extractContent: item => item.teacher
    });

const fetchPriceConfigs = async () => {
    try {
        const response = await fetch("scripts/fetch-price-config.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `age_group=${encodeURIComponent(age_group)}&course_type=${encodeURIComponent(course_type)}` +
                  `&language=${encodeURIComponent(pageLang)}`
        });

        const data = await response.json();

        const typesContainers = document.querySelectorAll('.session-type-options');
        const sessionNumContainers = document.querySelectorAll('.num-session-options');

        let preselect = 0;

        typesContainers.forEach(typesContainer => {
            typesContainer.innerHTML = '';
            data.session_types.forEach((item, index) => {
                const itemDiv = document.createElement("div");
                itemDiv.className = "option" + (index === preselect ? " selected" : "");
                itemDiv.dataset.group = "teaching";
                itemDiv.textContent = item.display_name;
                itemDiv.dataset.ref_num = item.ref_num;
                typesContainer.appendChild(itemDiv);
            });
        });
        
        sessionNumContainers.forEach(sessionNumContainer => {
            sessionNumContainer.innerHTML = '';
            data.num_sessions.forEach((item, index) => {
                const itemDiv = document.createElement("div");
                itemDiv.className = "option" + (index === preselect ? " selected" : "");
                itemDiv.dataset.group = "sessions";
                if (pageLang == "_en") itemDiv.textContent = item.num_sessions + " Sessions";
                if (pageLang == "_cn") itemDiv.textContent = item.num_sessions + " 单节课时";
                itemDiv.dataset.num = item.num_sessions;
                
                sessionNumContainer.appendChild(itemDiv);
            });
        });
        //Preselected item
        activeSessionType = data.session_types.length ? data.session_types[preselect].ref_num : "";
        activeNumSessions = data.num_sessions.length ? data.num_sessions[preselect].num_sessions : "";
        fetchPrice();
        
        document.querySelectorAll('.option').forEach(option => {
            option.addEventListener('click', () => {
                const group = option.dataset.group;
                document.querySelectorAll(`.option[data-group="${group}"]`).forEach(opt => {
                    opt.classList.remove('selected');
                });
                option.classList.add('selected');
                if (group == "teaching") activeSessionType = option.dataset.ref_num;
                if (group == "sessions") activeNumSessions = option.dataset.num;

                fetchPrice();
            });
        });

    } catch (err) {
        console.error("Error fetching price configs:", err);
    }
};

const fetchPrice = async () => {
    try {
        const session_type_ref_num = activeSessionType;
        const num_sessions = activeNumSessions;

        const tryButton = document.querySelectorAll('.try-now');

        //disable buttons while we wait for new price to be fetched
        tryButton.forEach(button => { button.disabled = true; });

        if(session_type_ref_num != "" && num_sessions != "") {
            const response = await fetch("scripts/fetch-price.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `age_group=${encodeURIComponent(age_group)}&course_type=${encodeURIComponent(course_type)}` + 
                    `&session_type_ref_num=${encodeURIComponent(session_type_ref_num)}&num_sessions=${encodeURIComponent(num_sessions)}`
            });

            const data = await response.json();

            const totalSpans = document.querySelectorAll('.price-total');
            const item = data[0];
            totalSpans.forEach(total => {
                total.textContent = item.currency + " " + item.price;
            });
            tryButton.forEach(button => {
                button.disabled = false;
            });
        } 
    } catch (err) {
        console.error("Error fetching price:", err);
    }
}

const fetchRelatedCourses = async () => {
    try {
        const response = await fetch("scripts/fetch-related-courses.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `lang_filter=${encodeURIComponent(course_lang)}&age_filter=${encodeURIComponent(age_group)}` + 
                  `&curr_ref_num=${encodeURIComponent(courseRef)}&language=${encodeURIComponent(pageLang)}`
        });

        const data = await response.json();
        const swiperWrapper = document.querySelector('.swiper-wrapper');
        swiperWrapper.innerHTML = '';

        data.forEach(item => {
            const slide = document.createElement("div");
            slide.className = "swiper-slide";
            const card = document.createElement("a");
            card.href = `../course?mod=${item.ref_num}`;
            card.className = "course-link";

            card.innerHTML = `
                <div class="course-card">
                    <div class="course-image-wrapper">
                        <img src="${imgDir}${item.course_img}" alt="Course"/>
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
            slide.appendChild(card);
            swiperWrapper.appendChild(slide);
        });

        //Initialize swiper when data has finished loaded
        new Swiper(".related-swiper", {
            loop: false,
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    } catch (err) {
        console.error("Error fetching related courses:", err);
    }
}

$(document).ready(function () {
    fetchCourseDetails();
    fetchCourseMaterials();
    fetchCourseFeatures();
    fetchCourseTeachers();
    fetchLearningGoals();
    fetchCourseActivities();
});
