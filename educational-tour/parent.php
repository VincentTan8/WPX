<style>
    .parent-highlight-section {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
    }

    .glow-bg {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 900px;
        height: 500px;
        background: #66CDE7;
        transform: translate(-50%, -50%);
        filter: blur(218.25px);
        z-index: 0;
        pointer-events: none;
        border-radius: 301.5px;
    }

    .testimonial-box {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 900px;
        height: 500px;
        border-radius: 25px;
        box-shadow: 0px 4px 25.7px 0px rgba(8, 77, 133, 0.25);
        padding-left: 158px;
        padding-right: 158px;
        padding-bottom: 3rem;
        background: white;
        overflow: hidden;
    }

    .testimonial-bar {
        position: absolute;
        bottom: 0;
        left: -10px;
        width: 110%;
        height: 10px;
        background: #916DFF;
        border-radius: 8px;
    }

    .testimonial-img {
        width: 82px;
        height: 82px;
        border-radius: 50%;
        object-fit: cover;
        margin: 0 auto 1rem;
    }

    .testimonial-text {
        font-family: 'Poppins';
        font-size: 1.1rem;
        margin-top: 1rem;
        font-weight: 600;
        color: #333;
    }

    .testimonial-author {
        font-family: 'Poppins';
        margin-top: 1rem;
        font-weight: 400;
        color: #555;
    }

    .quotes {
        position: absolute;
        top: -5px;
        width: 903px;
        height: 556px;
        background-image: url('<?php echo $imgDir ?>testimonial-quotes.png');
        background-repeat: no-repeat;
    }

    .stars {
        color: #f5c518;
        font-size: 1.5rem;
        margin-top: 1rem;
    }

    .stars .empty {
        color: #ccc;
    }
</style>

<div class="container py-5 position-relative parent-highlight-section">
    <!-- Header -->
    <div class="d-flex align-items-center justify-content-center gap-2 mb-4">
        <h3 style="font-family:'Poppins', sans-serif; font-weight:700; font-size:40px; z-index: 2">Parent Testimonials
        </h3>
    </div>

    <!-- Glow Background -->
    <div class="glow-bg"></div>

    <!-- Main Box -->
    <div class="p-4 rounded-4 position-relative d-flex justify-content-center">
        <div class="testimonial-box">
            <div style="">
                <img src="<?php echo $imgDir ?>parent.png" alt="Profile" class="testimonial-img" />
                <p class="testimonial-text">
                    “My daughter became more confident, more open, and came home asking deeper questions about the
                    world. It
                    wasn’t just a trip — it was an awakening.”
                </p>
                <p class="testimonial-author">— Mrs. Lee, parent from Singapore</p>
                <div class="stars">
                    ★ ★ ★ ★ <span class="empty">★</span>
                </div>
            </div>
            <div class="testimonial-bar"></div>
        </div>
        <div class="quotes"></div>
    </div>
</div>