<style>
    .what-container {
        display: flex;
        justify-content: space-between;
        align-items: center;

        margin: 0 50px;
        gap: 52px;
        margin-top: 108px;
    }

    .what-text {
        width: 696px;
        color: #444;
        flex-shrink: 0;
        display: flex;
        font-family: 'Poppins', sans-serif;
        flex-direction: column;
        gap: 20px;

    }

    .what-text h2 {
        font-size: 40px;
        font-style: normal;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
    }

    .what-text p {
        letter-spacing: normal;
        font-size: 18px;
        font-family: 'Poppins', sans-serif;
    }

    .what-image {
        width: 740px;
        flex-shrink: 0;
        aspect-ratio: 740 / 493;
        border-radius: 15px;
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .what-container {
            flex-direction: column;
            margin: 60px 20px 0 20px;
            gap: 24px;
            align-items: flex-start;
        }

        .what-text {
            width: 100%;
            max-width: 100%;
            gap: 16px;
        }

        .what-text h2 {
            font-size: 24px;
        }

        .what-text p {
            font-size: 16px;
        }

        .what-image {
            width: 100%;
            max-width: 100%;
            height: auto;
            aspect-ratio: auto;
        }
    }
</style>

<div class="what-container">
    <div class="what-text">
        <h2 id="what-title">What is WeTalk Home Tutorial?</h2>
        <p id="what-subtitle-1">WeTalk Home Tutorial is designed to provide a comprehensive and immersive learning
            experience in the Philippines. This package is ideal for international learners seeking focused, one-on-one
            instruction in a comfortable and convenient environment.</p>
        <p id="what-subtitle-2">Our Home Tutorial program is currently available for children aged 3 to 14.</p>
    </div>
    <img src="../resources/img/tutorial/what.png" alt="Descriptive Alt Text" class="what-image">
</div>