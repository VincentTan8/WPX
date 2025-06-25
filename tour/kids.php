<style>
    .two-side-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 180px;
        padding: 60px 15px;

        flex-wrap: wrap;
    }

    .left-side {
        flex: 1;
        min-width: 300px;
        display: flex;
        flex-direction: column;
        justify-content: left;
    }

    .left-header {
        font-size: 40px;
        margin-bottom: 30px;
        color: #333;
        text-align: left;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
    }

    .checklist {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .checklist li {
        display: flex;
        align-items: center;
        font-size: 1.1rem;
        margin-bottom: 15px;
        color: #555;
    }

    .checklist li img {
        width: 24px;
        height: 24px;
        margin-right: 30px;
    }

    .right-side {
        flex: 1;
        min-width: 300px;
        display: flex;
        justify-content: center;
    }

    .right-side img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }
</style>
<div class="two-side-container">
    <div class="left-side">
        <h2 class="left-header">What Kids Will Take Away</h2>
        <ul class="checklist">
            <li>
                <img src="img/check.png" alt="check"> Greater confidence in speaking Mandarin
            </li>
            <li>
                <img src="img/check.png" alt="check"> Cultural curiosity through food, art, and tradition
            </li>
            <li>
                <img src="img/check.png" alt="check"> Memories of creativity, nature, and kindness
            </li>
            <li>
                <img src="img/check.png" alt="check"> Real-life application of language in fun scenarios
            </li>
        </ul>
    </div>
    <div class="right-side">
        <img src="img/kids.png" alt="Kids Group">
    </div>
</div>