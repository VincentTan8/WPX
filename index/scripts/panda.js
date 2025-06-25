
export function animatePanda() {
    const panda = document.querySelector('.panda-wrapper');
    const chatBubble = panda.querySelector('.chat-bubble');

    if (!panda || !chatBubble) return;

    panda.classList.add('slide-in');
    setTimeout(() => {
        chatBubble.classList.add('show-bubble');
    }, 1400);
}

// Internal utility function
export function waitForImages(selector, callback) {
    const container = document.querySelector(selector);
    const images = container ? container.querySelectorAll('img') : [];

    let loaded = 0;
    if (images.length === 0) {
        callback();
        return;
    }

    images.forEach(img => {
        if (img.complete) {
            loaded++;
            if (loaded === images.length) callback();
        } else {
            img.addEventListener('load', () => {
                loaded++;
                if (loaded === images.length) callback();
            });
        }
    });
}

// Main execution
document.addEventListener('DOMContentLoaded', () => {


    const closeBtn = document.getElementById("close-bubble");
    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            const wrapper = document.querySelector(".panda-wrapper");
            if (wrapper) {
                wrapper.classList.remove("slide-in");
                wrapper.classList.add("slide-out");
            }
        });
    }
});
