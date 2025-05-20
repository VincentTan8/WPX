const currentScriptUrl = import.meta.url; // this is the URL of translate.js
const currentScriptDir = currentScriptUrl.substring(0, currentScriptUrl.lastIndexOf('/'));

export function initTranslateButton() {
    // const translateBtn = document.getElementById('translate-btn');
    const translateBtn = document.getElementById('sr-nav-translate');
    const languageOptions = document.getElementById('language-options');

    if (!translateBtn || !languageOptions) return;

    translateBtn.addEventListener('click', (e) => {
        e.stopPropagation(); // prevent triggering the document click
        languageOptions.classList.remove('flip-left'); // Reset

        const isVisible = languageOptions.style.display === 'block';

        if (isVisible) {
            languageOptions.style.display = 'none';
        } else {
            languageOptions.style.display = 'block';
            const rect = languageOptions.getBoundingClientRect();
            const spaceRight = window.innerWidth - rect.right;
            if (spaceRight < 10) {
                languageOptions.classList.add('flip-left'); // Flip if not enough space
            }
        }
    });

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        const isClickInside = translateBtn.contains(e.target) || languageOptions.contains(e.target);
        if (!isClickInside) {
            languageOptions.style.display = 'none';
        }
    });

    const buttons = languageOptions.querySelectorAll('button');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            languageOptions.style.display = 'none';
            const lang = button.getAttribute('data-lang');
            setLanguage(lang);
        });
    });
}

//customize this according to the website's needs
async function setLanguage(lang) {
    const selectedLanguage = lang;
    const pageData = document.getElementById("page-data");
    const pageName = pageData.dataset.page; 

    try {
        const response = await fetch(`${currentScriptDir}/fetch-language-set.php`, {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `language=${encodeURIComponent(selectedLanguage)}` +
                  `&page=${encodeURIComponent(pageName)}`
        });
        const data = await response.json();

        const languageSet = data;
        
        translateElements(languageSet);
    } catch (error) {
        console.error("Error fetching language set:", error);
    }
}

function translateElements(languageSet) {
    languageSet.forEach(set => {
        const link = document.getElementById(set.element_id);
        //some text have accompanying icons
        if(link) {
            const icon = link.querySelector("i");
            if(icon) {
                link.innerHTML = set.text + " ";
                link.appendChild(icon);
            }
            else {
                link.innerHTML = set.text;
            }
        }
    })
}

$(document).ready(function () {
    //get quote of the day
    fetch(`${currentScriptDir}/get-quote-today.php`).catch(console.error);

    initTranslateButton();

    const pageData = document.getElementById("page-data");
    const pageLang = pageData.dataset.lang; 

    if(pageLang === '_cn') {
        setLanguage('cn');
    } else if(pageLang === '_en') {
        setLanguage('en');
    }
});
