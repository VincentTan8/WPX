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
        width: 900px;
        height: 500px;
        border-radius: 25px;
        background: #FFF;
        box-shadow: 0px 4px 25.7px 0px rgba(8, 77, 133, 0.25);
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
        <div class="testimonial-box"></div>
    </div>
</div>