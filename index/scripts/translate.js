const currentScriptUrl = import.meta.url; // this is the URL of translate.js
const currentScriptDir = currentScriptUrl.substring(0, currentScriptUrl.lastIndexOf('/'));

export function initTranslateButton() {
    const translateBtn = document.getElementById('translate-btn');
    const languageOptions = document.getElementById('language-options');

    if (!translateBtn || !languageOptions) return;

    translateBtn.addEventListener('click', () => {
        const isVisible = languageOptions.style.display === 'block';
        languageOptions.style.display = isVisible ? 'none' : 'block';
        
    });

    const buttons = languageOptions.querySelectorAll('button');
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const lang = button.getAttribute('data-lang');
            setLanguage(lang);
        });
    });
}

//customize this according to the website's needs
async function setLanguage(lang) {
    // add translation logic here, such as:
    // if(lang === 'en') {
    //     const link = document.getElementById("open-link");
    //     const icon = link.querySelector("i");
    //     link.innerHTML = "Play Now ";
    //     link.appendChild(icon);
    // } else {
    //     const link = document.getElementById("open-link");
    //     const icon = link.querySelector("i");
    //     link.innerHTML = "点击开始 ";
    //     link.appendChild(icon);
    // }

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
        const icon = link.querySelector("i");
        if(icon) {
            link.innerHTML = set.text + " ";
            link.appendChild(icon);
        }
        else {
            link.innerHTML = set.text;
        }
        
    })
}


$(document).ready(function () {
    initTranslateButton();
});
