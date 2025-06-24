const imgDir = "img/";

const fetchTour = async () => {
    const pageData = document.getElementById("page-data");
    const pageLang = pageData.dataset.lang;
    const destination = pageData.dataset.dest;

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

        document.getElementById('hero-section').style.backgroundImage = `url('${imgDir}${data.country_img}')`;
        document.getElementById('hero-title').innerHTML = `WeTalk <span id="hero-highlight" style="color:#F2AE14;">${data.country_name}</span> Study Tour`;
        document.getElementById('hero-subtitle').textContent = data.header_text;
        document.getElementById('reason-text').textContent = data.description;
        document.getElementById('why-country').textContent = data.country_name;
        document.getElementById('why-img').src = imgDir + data.country_why_img;

    } catch (error) {
        console.error("Error fetching tour page details:", error);
    }
};


$(document).ready(function () {
    fetchTour();
});
