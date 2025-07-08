const imgDir = "../resources/img/courses/";
const pageData = document.getElementById("page-data");
const pageLang = pageData.dataset.lang;
const destination = pageData.dataset.dest;

//todo change everything here

const fetchCourse = async () => {
    try {
        const response = await fetch("scripts/fetch-tour-details.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `language=${encodeURIComponent(pageLang)}` +
                `&destination_ref_num=${encodeURIComponent(destination)}`
        });
        const entry = await response.json();
        const data = entry[0];

        let study_tour = " Study Tour";
        let why = "Why ";
        if (pageLang === '_cn') {  //will have to add for other languages since this is not part of the data in db :<
            study_tour = "游学团";
            why = "为什么选择";
        }

        document.getElementById('hero-section').style.backgroundImage = `url('${imgDir}${data.country_img}')`;
        document.getElementById('hero-title').innerHTML = `WeTalk <span id="hero-highlight" style="color:#F2AE14;">${data.country_name}</span>${study_tour}`;
        document.getElementById('hero-subtitle').textContent = data.header_text;
        document.getElementById('reason-text').textContent = data.description;
        document.getElementById('why-country').textContent = `${why}${data.country_name}?`;
        document.getElementById('why-img').src = imgDir + data.country_why_img;

        return data.ref_num;
    } catch (error) {
        console.error("Error fetching tour page details:", error);
    }
};

const fetchLearningGoals = async (courses_ref_num) => {
    try {
        const response = await fetch("scripts/fetch-program-details.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `language=${encodeURIComponent(pageLang)}` +
                `&tour_details_ref_num=${encodeURIComponent(tour_ref_num)}`
        });
        const data = await response.json();

        const container = document.getElementById('highlight-parent');
        container.innerHTML = ''; // Clear existing static content if any

        data.forEach(item => {
            const card = document.createElement("div");
            card.className = "highlight-card";
            card.innerHTML = `
            <img src="${imgDir}${item.program_img}" alt="${item.title}" class="img-fluid mb-2">
            <p class="highlight-title">${item.title}</p>
            <p class="highlight-desc">${item.description}</p>
            `;

            container.appendChild(card);
        });
        document.querySelector('.glow-bg').style.background = `#66CDE7`;
    } catch (error) {
        console.error("Error fetching program details:", error);
    }
}


const fetchNextSteps = async (tour_ref_num) => {
    try {
        const response = await fetch("scripts/fetch-next-steps.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `language=${encodeURIComponent(pageLang)}` +
                `&tour_details_ref_num=${encodeURIComponent(tour_ref_num)}`
        });
        const entry = await response.json();
        const data = entry[0];

        document.getElementById('next-tour').textContent = data.info_1;
        document.getElementById('next-date').textContent = data.info_2;
        document.getElementById('early-bird').textContent = data.info_3;
        document.getElementById('early-deadline').textContent = data.info_4;
        document.getElementById('suitable-for').textContent = data.info_5;
        document.getElementById('next-includes').textContent = data.info_6;
    } catch (error) {
        console.error("Error fetching next steps:", error);
    }
}

$(document).ready(async function () {
    const courses_ref_num = await fetchCourse();
    fetchLearningGoals(courses_ref_num);
});
