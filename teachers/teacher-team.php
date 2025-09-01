<style>
    .teacher-team {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        padding: 50px;
    }

    .teacher-box {
        position: relative;
        border-radius: 20px;
        padding: 40px;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        box-shadow: 0 0 12px rgba(0, 0, 0, 0.05);
    }

    .teacher-box.green {
        background-image: url('img/1-1.png');
    }

    .teacher-box.purple {
        background-image: url('img/2-2.png');
    }

    .teacher-box.blue {
        background-image: url('img/3-3.png');
    }

    .teacher-box.orange {
        background-image: url('img/4-4.png');
    }

    .box-content {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .box-header {
        display: flex;
        align-items: flex-start;
        gap: 25px;
    }

    .box-icon {
        width: 80px;
        height: 80px;
        flex-shrink: 0;
    }

    .box-title-group {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .box-title-group h3 {
        margin: 0;
        font-size: 22px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
    }

    .subtitle {
        margin: 0;
        font-weight: 500;
        font-size: 16px;
        color: #222;
        font-family: 'Poppins', sans-serif;
    }

    .desc {
        margin-top: 50px;
        font-size: 14px;
        color: #444444;
        line-height: 1.6;
        font-family: 'Poppins', sans-serif;
    }

    @media (max-width: 768px) {
        .teacher-team {
            grid-template-columns: 1fr;
            padding: 20px;
            gap: 30px;
        }

        .teacher-box {
            padding: 30px;
            background-size: 100% 100%;
        }

        .box-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 12px;
        }

        .box-icon {
            width: 60px;
            height: 60px;
        }

        .desc {
            margin-top: 30px;
        }
    }
</style>

<div class="teacher-team">
    <div class="teacher-box green">
        <div class="box-content">
            <div class="box-header">
                <img src="img/1.png" class="box-icon" alt="Icon 1">
                <div class="box-title-group">
                    <h3 id="teacher-title-1">Excellent Team</h3>
                    <p class="subtitle" id="teacher-subtitle-1">Experienced teachers and experts offer high-quality
                        education</p>
                </div>
            </div>
            <p class="desc" id="teacher-desc-1">
                WeTalk International has built a strong, high-level faculty team, consisting of both
                highly respected senior scholars and young outstanding experts. At WeTalk International,
                this faculty team plays a key role in cultivating excellent talent as well as inheriting
                and innovating traditional culture.
            </p>
        </div>
    </div>

    <div class="teacher-box purple">
        <div class="box-content">
            <div class="box-header">
                <img src="img/2.png" class="box-icon" alt="Icon 2">
                <div class="box-title-group">
                    <h3 id="teacher-title-2">Strict Screening</h3>
                    <p class="subtitle" id="teacher-subtitle-2">Strict screening aims to match each student with more
                        suitable teachers.</p>
                </div>
            </div>
            <p class="desc" id="teacher-desc-2">
                WeTalk International "recruits a good teacher before opening a class". Every
                teacher here has been subject to six rounds of strict interviews, from sending a resume to officially
                taking up the post. We are eager to recruit professional educators with a global vision, extensive
                knowledge, and a better understanding of transnational culture and local markets so as to build an
                international high-quality faculty team.
            </p>
        </div>
    </div>

    <div class="teacher-box blue">
        <div class="box-content">
            <div class="box-header">
                <img src="img/3.png" class="box-icon" alt="Icon 3">
                <div class="box-title-group">
                    <h3 id="teacher-title-3">Lean Cultivation</h3>
                    <p class="subtitle" id="teacher-subtitle-3">Persistent improvement and training enhancement provide
                        the best services for
                        you.</p>
                </div>
            </div>
            <p class="desc" id="teacher-desc-3">
                WeTalk International provides pre-work and in-service training for its teachers as well as skill
                training for teachers at different levels. The online-offline training system motivates every teacher to
                keep improving their competence and teaching levels so as to offer students better services.
            </p>
        </div>
    </div>

    <div class="teacher-box orange">
        <div class="box-content">
            <div class="box-header">
                <img src="img/4.png" class="box-icon" alt="Icon 4">
                <div class="box-title-group">
                    <h3 id="teacher-title-4">Regular Assessment</h3>
                    <p class="subtitle" id="teacher-subtitle-4">Regular assessment helps teachers continue to improve
                        their teaching quality and
                        facilitate the growth of both teachers and students</p>
                </div>
            </div>
            <p class="desc" id="teacher-desc-4">
                WeTalk International provides its teachers with high-quality international teaching communication forums
                and frequently organizes activities like student analysis, experience exchange, attending, giving, and
                evaluating lectures, and teaching competitions, in a bid to stimulate teachers to keep improving their
                teaching
                quality.
            </p>
        </div>
    </div>
</div>