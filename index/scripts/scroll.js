window.addEventListener('load', () => {
    const paper = document.querySelector('.paper-wrapper');
    const scrollContainer = document.querySelector('.scroll-container');

    // Delay a bit to ensure layout is stable before animating
    setTimeout(() => {
        //paper element pushes scrolls apart
        paper.style.width = '150px'; // reveal paper
    }, 1500); // Adjusted to match the fade-in delay

    // Initially, make the scroll container appear after a delay (1.5s)
    scrollContainer.style.visibility = 'visible'; // Make container visible after fade-in
    scrollContainer.style.opacity = '1'; // Fade it in
});
document.addEventListener('DOMContentLoaded', function () {
    var scrollContainer = document.querySelector('.scroll-container');

    // Add the .visible class after the animation delay
    setTimeout(function () {
        scrollContainer.classList.add('visible');
    }, 350); // Match this delay with your CSS animation delay
});
