<style>
    .offer-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 0 50px;
        gap: 52px;
        margin-top: 136px;
    }

    .offer-image {
        width: 740px;
        flex-shrink: 0;
        aspect-ratio: 740 / 493;
        border-radius: 15px;
        object-fit: cover;
    }

    .offer-text {
        width: 696px;
        color: #444;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        gap: 20px;

    }

    .offer-text h2 {
        font-size: 40px;
        font-style: normal;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
    }

    .offer-text p {
        font-size: 18px;
        font-family: 'Poppins', sans-serif;
    }

    @media (max-width: 768px) {
        .offer-container {
            flex-direction: column-reverse;
            margin: 60px 20px 0 20px;
            gap: 40px;
            align-items: flex-start;
        }

        .offer-text {
            width: 100%;
            flex-shrink: 1;
        }

        .offer-text h2 {
            font-size: 24px;
        }

        .offer-text p {
            font-size: 16px;
        }

        .offer-image {
            width: 100%;
            max-width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 15px;
            flex-shrink: 1;
        }
    }
</style>

<div class="offer-container">
    <img src="../resources/img/tutorial/offer.png" alt="Descriptive Alt Text" class="offer-image">
    <div class="offer-text">
        <h2 id="offer-title"></h2>
        <p id="offer-subtitle"></p>
    </div>
</div>