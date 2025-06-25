const imgDir = "img/";

const fetchDestinations = async () => {
    const pageData = document.getElementById("page-data");
    const pageLang = pageData.dataset.lang;

    try {
        const response = await fetch("scripts/fetch-all-destinations.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `language=${encodeURIComponent(pageLang)}`
        });
        const data = await response.json();

        const track = document.getElementById('carousel-parent');
        track.innerHTML = ''; // Clear existing static content if any

        data.forEach(item => {
            const card = document.createElement('div');
            card.className = 'carousel-card';
            card.innerHTML = `
                <img src="${imgDir}${item.country_img}" alt="${item.country_name}">
                <h3>${item.country_name}</h3>
                <h4 class="carousel-subtitle">${item.card_header_text}</h4>
                <p>${item.card_description}</p>
                <a href="../tour?dest=${item.ref_num}" class="carousel-button">
                    <span>About ${item.country_name}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="23" viewBox="0 0 29 23" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17.2929 1.02385C17.6834 0.633326 18.3166 0.633326 18.7071 1.02385L28.7071 11.0239C29.0976 11.4144 29.0976 12.0475 28.7071 12.4381L18.7071 22.4381C18.3166 22.8286 17.6834 22.8286 17.2929 22.4381C16.9024 22.0475 16.9024 21.4144 17.2929 21.0238L25.5858 12.731H1C0.447715 12.731 0 12.2832 0 11.731C0 11.1787 0.447715 10.731 1 10.731H25.5858L17.2929 2.43806C16.9024 2.04754 16.9024 1.41437 17.2929 1.02385Z"
                            fill="#18181B" />
                    </svg>
                </a>
            `;
            track.appendChild(card);
        });
        
    } catch (error) {
        console.error("Error fetching destinations:", error);
    }
};


$(document).ready(function () {
    fetchDestinations();
});
