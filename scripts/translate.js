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
function setLanguage(lang) {
    // add translation logic here, such as:
    if(lang === 'en') {
        const link = document.getElementById("open-link");
        const icon = link.querySelector("i");
        link.innerHTML = "Play Now ";
        link.appendChild(icon);
    } else {
        const link = document.getElementById("open-link");
        const icon = link.querySelector("i");
        link.innerHTML = "点击开始 ";
        link.appendChild(icon);
    }
}


$(document).ready(function () {
    initTranslateButton();
});
