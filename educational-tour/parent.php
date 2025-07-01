<style>
    .parent-highlight-section {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        padding: 0 20px;
        justify-content: center;
        align-items: center;
    }

    .glow-bg {
        position: absolute;
        width: 900px;
        height: 500px;
        background: #66CDE7;
        filter: blur(218.25px);
        z-index: 0;
        pointer-events: none;
        border-radius: 301.5px;
        opacity: 0.76;
    }

    .testimonial-box {
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        max-width: 900px;
        height: 500px;
        border-radius: 25px;
        box-shadow: 0px 4px 25.7px 0px rgba(8, 77, 133, 0.25);
        padding-left: 158px;
        padding-right: 158px;
        padding-bottom: 3rem;
        background: white;
        overflow: hidden;
        z-index: 2;
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
        text-align: center;
    }

    .testimonial-author {
        font-family: 'Poppins';
        margin-top: 1rem;
        font-weight: 400;
        color: #555;
        text-align: center;
    }

    .quotes {
        position: absolute;
        top: -5px;
        width: 100%;
        max-width: 900px;
        height: auto;
        aspect-ratio: 903 / 556;
        background-image: url('<?php echo $imgDir ?>testimonial-quotes.png');
        background-repeat: no-repeat;
        background-size: contain;
        background-position: center;
        pointer-events: none;
        z-index: 3;
    }

    .stars {
        color: #f5c518;
        font-size: 1.5rem;
        margin-top: 1rem;
        text-align: center;
    }

    .stars .empty {
        color: #ccc;
    }

    .parent-test {
        padding: 1.5rem;
    }

    @media (max-width: 767px) {
        .testimonial-box {
            width: 100%;
            max-width: 100%;
            height: auto;
            padding: 1.5rem 1rem;
            border-radius: 20px;
            box-shadow: 0px 2px 12px rgba(8, 77, 133, 0.2);
        }

        .parent-test {
            padding: 0rem;
        }

        .testimonial-img {
            width: 60px;
            height: 60px;
            margin-bottom: 0.8rem;
        }

        .testimonial-text {
            font-size: 0.95rem;
            line-height: 1.5;
            margin-top: 0.5rem;
            text-align: center;
        }

        .testimonial-author {
            font-size: 0.85rem;
            margin-top: 0.75rem;
            text-align: center;
        }

        .stars {
            font-size: 1.1rem;
            margin-top: 0.75rem;
            text-align: center;
        }

        .quotes {
            display: none;
        }

        .glow-bg {
            max-width: 100%;
            height: 200px;
            filter: blur(100px);
        }

        .parent-highlight-section {
            padding: 0 10px;
        }

        .parent-highlight-section h3 {
            font-size: 26px !important;
            text-align: center;
        }
    }
</style>

<div class="container  position-relative parent-highlight-section">
    <!-- Header -->
    <div class="d-flex align-items-center justify-content-center gap-2 mb-4">
        <h3 id="testimonial-title"
            style="font-family:'Poppins', sans-serif; font-weight:700; font-size:40px; z-index: 2">
        </h3>
    </div>

    <!-- Glow Background -->
    <div class="glow-bg"></div>

    <!-- Main Box -->
    <div class="parent-test rounded-4 position-relative d-flex justify-content-center">
        <div class="testimonial-box">
            <div style="">
                <img src="<?php echo $imgDir ?>parent.png" alt="Profile" class="testimonial-img" />
                <p id="testimonial-text" class="testimonial-text"></p>
                <p id="testimonial-author" class="testimonial-author"></p>
                <div class="stars">
                    ★ ★ ★ ★ <span class="empty">★</span>
                </div>
            </div>
            <div class="testimonial-bar"></div>
        </div>
        <div class="quotes"></div>
    </div>
</div>