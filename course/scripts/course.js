const imgDir = "../resources/img/courses/";
const checkImg = imgDir + "check-yellow-list.png";
const pageData = document.getElementById("page-data");
const pageLang = pageData.dataset.lang;
const courseRef = pageData.dataset.mod;

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
        document.getElementById("course-subtitle").textContent = course.course_subtitle;
        document.getElementById("course-description").textContent = course.course_description;
        document.getElementById("course-thumbnail").textContent = course.thumbnail_tag;
        document.getElementById("course-suitable-for").textContent = course.suitable_for;
        document.getElementById("course-start-date").textContent = course.course_start_date;
        document.getElementById("course-class-hours").textContent = course.class_hours;
        document.getElementById("course-type").textContent = course.course_type;

        if (document.getElementById("course-img"))
            document.getElementById("course-img").src = imgDir + course.course_img;

    } catch (err) {
        console.error("Error fetching course details:", err);
    }
};

const fetchCourseMaterial = async () => {
    try {
        const response = await fetch("scripts/fetch-materials.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `language=${encodeURIComponent(pageLang)}&courses_ref_num=${encodeURIComponent(courseRef)}`
        });

        const data = await response.json();
        const container = document.getElementById("material-container");
        container.innerHTML = '';

        data.forEach(item => {
            const li = document.createElement("li");
            const img = document.createElement("img");
            img.src = checkImg;
            img.alt = "check";

            li.appendChild(img);
            li.append(" " + item.material);
            container.appendChild(li);
        });
    } catch (err) {
        console.error("Error fetching course material:", err);
    }
};

const fetchCourseFeatures = async () => {
    try {
        const response = await fetch("scripts/fetch-features.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `language=${encodeURIComponent(pageLang)}&courses_ref_num=${encodeURIComponent(courseRef)}`
        });

        const data = await response.json();

        const container = document.getElementById("feature-container");
        container.innerHTML = '';

        data.forEach(item => {
            const itemDiv = document.createElement("div");
            itemDiv.className = "goal-item";

            const img = document.createElement("img");
            img.src = checkImg;
            img.alt = "check";

            const textDiv = document.createElement("div");

            const strong = document.createElement("strong");
            strong.textContent = item.feature_bold;

            textDiv.appendChild(strong);
            textDiv.append(" " + item.feature);

            itemDiv.appendChild(img);
            itemDiv.appendChild(textDiv);

            container.appendChild(itemDiv);
        });
    } catch (err) {
        console.error("Error fetching course features:", err);
    }
};

const fetchCourseTeachers = async () => {
    try {
        const response = await fetch("scripts/fetch-teachers.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `language=${encodeURIComponent(pageLang)}&courses_ref_num=${encodeURIComponent(courseRef)}`
        });

        const data = await response.json();
        const container = document.getElementById("teacher-container");
        container.innerHTML = '';

        data.forEach(item => {
            const li = document.createElement("li");
            const img = document.createElement("img");
            img.src = checkImg;
            img.alt = "check";

            li.appendChild(img);
            li.append(" " + item.teacher);
            container.appendChild(li);
        });
    } catch (err) {
        console.error("Error fetching course teachers:", err);
    }
};

const fetchCourseGoals = async () => {
    try {
        const response = await fetch("scripts/fetch-learning-goals.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `language=${encodeURIComponent(pageLang)}&courses_ref_num=${encodeURIComponent(courseRef)}`
        });

        const data = await response.json();
        const container = document.getElementById("goal-container");
        container.innerHTML = '';

        data.forEach(item => {
            const itemDiv = document.createElement("div");
            itemDiv.className = "goal-item";

            const img = document.createElement("img");
            img.src = checkImg;
            img.alt = "check";

            const textDiv = document.createElement("div");
            textDiv.textContent = item.learning_goal;

            itemDiv.appendChild(img);
            itemDiv.appendChild(textDiv);
            container.appendChild(itemDiv);
        });
    } catch (err) {
        console.error("Error fetching course goals:", err);
    }
};

const fetchCourseActivities = async () => {
    try {
        const response = await fetch("scripts/fetch-activities.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `language=${encodeURIComponent(pageLang)}&courses_ref_num=${encodeURIComponent(courseRef)}`
        });

        const data = await response.json();
        const container = document.getElementById("activity-container");
        container.innerHTML = '';

        data.forEach(item => {
            const itemDiv = document.createElement("div");
            itemDiv.className = "goal-item";

            const img = document.createElement("img");
            img.src = checkImg;
            img.alt = "check";

            const textDiv = document.createElement("div");
            textDiv.textContent = item.activity;

            itemDiv.appendChild(img);
            itemDiv.appendChild(textDiv);
            container.appendChild(itemDiv);
        });
    } catch (err) {
        console.error("Error fetching course activities:", err);
    }
};

$(document).ready(function () {
    fetchCourseDetails();
    fetchCourseMaterial();
    fetchCourseFeatures();
    fetchCourseTeachers();
    fetchCourseGoals();
    fetchCourseActivities();
});
