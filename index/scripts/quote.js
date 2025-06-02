let popOutTimeout;
let isFirstLoad = true;

function playPopInAnimation() {
    const bubbles = Array.from(document.querySelectorAll('.thought-img'));
    const quote = document.querySelector('.quote-block');
    if (!bubbles.length || !quote) return;

    // Reset animations
    quote.style.animation = 'none';
    void quote.offsetWidth;
    quote.style.opacity = '0';

    // Wait until all images are fully loaded if it's the first load
    const waitAndStart = () => {
        const totalBubbles = bubbles.length;
        bubbles.forEach((img, index) => {
            img.style.animation = 'none';
            void img.offsetWidth;
            const delay = (totalBubbles - 1 - index) * 0.5;
            img.style.animation = `bubblePop 0.6s forwards`;
            img.style.animationDelay = `${delay}s`;
            img.style.opacity = '0';
        });

        const maxBubbleDelay = (totalBubbles - 1) * 0.5;
        setTimeout(() => {
            quote.style.animation = 'quoteReveal 0.8s forwards';
        }, (maxBubbleDelay + 0.6) * 1000);

        if (popOutTimeout) clearTimeout(popOutTimeout);
        popOutTimeout = setTimeout(playPopOutAnimation, (maxBubbleDelay + 0.6 + 25) * 1000);
    };

    if (isFirstLoad) {
        isFirstLoad = false;
        setTimeout(waitAndStart, 1800); // delay only on first load
    } else {
        waitAndStart(); // no delay on subsequent calls
    }
}



function playPopOutAnimation() {
    console.log('playPopInAnimation called');
    const bubbles = document.querySelectorAll('.thought-img');
    const quote = document.querySelector('.quote-block');
    if (!bubbles.length || !quote) return;

    // Hide the quote first
    quote.style.animation = 'quoteHide 0.8s forwards';

    // Stagger bubble pop-outs AFTER quote starts
    bubbles.forEach((img, index) => {
        setTimeout(() => {
            img.style.animation = 'none';
            void img.offsetWidth;
            img.style.animation = `bubblePopOut 0.6s forwards`;
        }, 800 + index * 400);
    });
}

// Export this to be called on language change to reset and restart animation
export function resetQuoteAnimation() {
    // Clone elements to fully reset CSS animations
    const bubbles = document.querySelectorAll('.thought-img');
    const quote = document.querySelector('.quote-block');
    if (!bubbles.length || !quote) return;

    const newQuote = quote.cloneNode(true);
    quote.parentNode.replaceChild(newQuote, quote);

    bubbles.forEach((bubble) => {
        const newBubble = bubble.cloneNode(true);
        bubble.parentNode.replaceChild(newBubble, bubble);
    });

    // Play pop-in animation immediately after resetting
    playPopInAnimation();
}




