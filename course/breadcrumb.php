<style>
    .breadcrumb-container {

        margin: 0 auto;
        padding: 20px 240px 0 240px;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        color: #777;
        display: block;
        text-align: left;

        align-items: center;
    }

    .breadcrumb {
        padding: 0;
    }

    .breadcrumb-container .breadcrumb {
        display: flex;
        align-items: center;
        gap: 8px;
        background-color: white;
    }

    .breadcrumb-container .breadcrumb-item {
        color: #777;
    }

    .breadcrumb-container .breadcrumb-item.current {
        color: #036;

    }

    .breadcrumb-container .separator {
        width: 5px;
        height: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .breadcrumb-footer {

        margin: 0 auto;
        padding: 20px 240px 0 240px;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        color: #4170FE;
        text-align: left;


    }

    @media (max-width: 1710px) {

        .breadcrumb-container,
        .breadcrumb-footer {
            padding: 20px 120px 0 120px;

        }
    }

    @media (max-width: 768px) {
        .breadcrumb-container {
            display: none;
        }

        .breadcrumb-footer {
            display: none;
        }
    }
</style>


<div class="breadcrumb-container">
    <div class="breadcrumb">
        <span class="breadcrumb-item">Home</span>
        <span class="separator">
            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                <circle cx="2.5" cy="3" r="2.5" fill="#A7A7A7" />
            </svg>
        </span>
        <a class="breadcrumb-item" href="../courses">Courses</a>
        <span class="separator">
            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                <circle cx="2.5" cy="3" r="2.5" fill="#A7A7A7" />
            </svg>
        </span>
        <span id="breadcrumb-title" class="breadcrumb-item current">WeTalk Kids Chinese Package 1</span>
    </div>
</div>


<div style="height: 10px;"></div>


<div id="breadcrumb-footer" class="breadcrumb-footer">
    WeTalk Kids Chinese
</div>