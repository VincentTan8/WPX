setTimeout(() => {
    const bubbles = document.querySelectorAll('.thought-img');
    const quote = document.querySelector('.quote-block');

    // Hide the quote first
    quote.style.animation = 'quoteHide 0.8s forwards';

    // Stagger bubble pop-outs AFTER quote starts
    bubbles.forEach((img, index) => {
        // Don't remove animation instantly—wait for pop-out time
        setTimeout(() => {
            img.style.animation = 'none'; // reset first
            void img.offsetWidth; // force reflow to allow animation restart

            img.style.animation = `bubblePopOut 0.6s forwards`;
        }, 800 + index * 400); // quoteHide takes 0.8s first
    });
}, 10000); // Start the sequence after 10 seconds