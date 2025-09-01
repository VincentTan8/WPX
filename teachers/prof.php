<style>
    .prof {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 40px;
        margin: 50px 0;
    }

    .prof-left {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .prof-left h2 {
        font-family: 'Poppins', sans-serif;
        text-align: left;
        font-size: 28px;
        font-weight: bold;
        margin: 0;
    }

    .prof-left p {
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        text-align: left;
        line-height: 2;
        color: gray;
    }

    .prof-left .prof-img {
        width: 100%;
        max-width: 336px;
        border-radius: 10px;
        margin-top: -18px;
    }

    .prof-left small {
        font-size: 14px;
        color: #666;
    }

    .prof-right {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .prof-right .prof-portrait {
        width: 100%;
        max-width: 550px;
        border-radius: 15px;
    }

    .subtitle-1 {
        font-size: 18px;
        color: black;
        text-align: left;
        font-family: 'Poppins', sans-serif;
    }

    @media (max-width: 768px) {
        .prof {
            flex-direction: column;
            align-items: left;
            text-align: left;
        }

        .prof-left h2,
        .prof-left p {
            text-align: left;
        }

        .prof-left .prof-img {
            margin-top: -19px;
            width: 85%;
            margin-left: -5px;
        }

        .prof-right {
            margin-top: 20px;
        }

        .prof-right .prof-portrait {
            max-width: 100%;
        }

        .subtitle-1 {
            font-size: 14px;
            color: black;
        }
    }
</style>
<div class="prof">
    <div class="prof-left">
        <h2 id="prof-title">Professional Teachers by Your Side</h2>
        <span id="prof-subtitle-1" class="subtitle-1">
            Excellent Teachers Empower Your Growth
        </span>
        <img src="img/underline.png" alt="Professor in action" class="prof-img">
        <p id="prof-subtitle-2">WeTalk International welcomes excellent and talented educators to contribute to
            international education across the world. We will provide stringent and rich training
            programs to cultivate professional educators who develop a global vision and have a
            deep understanding of transnational culture and local markets, with the ultimate goal of helping students
            achieve better growth. WeTalk International believes that "To teach well, you deeply dwell," aiming to offer
            alternative methods of proper education, in adherence with the doctrine of the Golden mean.</p>
    </div>

    <div class="prof-right">
        <img src="img/prof.png" alt="Professor Portrait" class="prof-portrait">
    </div>
</div>