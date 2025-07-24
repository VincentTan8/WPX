<style>
    .trial-class-container {
        background: url('../resources/img/courses/trial-bg.png') no-repeat center center/cover;
        padding: 80px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 971px;
        width: 1660px;
        border-radius: 40px 40px 0px 0px;
        margin-top: 150px;
    }

    .trial-class-inner {
        width: 100%;
        display: flex;
        border-radius: 20px;
        overflow: hidden;
        flex-wrap: nowrap;
    }

    .trial-left,
    .trial-right {
        flex: 1 1 50%;
        box-sizing: border-box;
    }

    .trial-left {
        width: 478px;
        height: 334px;
        margin-left: 0;
        background: transparent;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        padding: 0;
        color: white;
    }

    .trial-left h2 {
        color: #FFF;
        margin-top: 200px;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }

    .trial-left .subtitle {
        font-size: 18px;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 30px;
        color: white;
        text-align: center;
    }

    .check-list {
        list-style: none;
        padding: 0;
        margin: 0 0 30px;
        margin-left: 240px;
    }

    .check-list li {
        display: flex;
        align-items: flex-start;
        margin-bottom: 15px;
        gap: 26px;
        width: 383px;
    }

    .check-list img {
        width: 20px;
        margin-top: 4px;
        flex-shrink: 0;
    }

    .check-list p {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        line-height: 1.4;
        color: white;
        text-align: left;
        display: block;
    }

    .trial-image.people-img {
        width: 231px;
        height: 78px;
        object-fit: contain;
        margin-bottom: 20px;
        align-self: center;
    }

    .trial-image.zigzag-img {
        width: 108px;
        height: 13px;
        flex-shrink: 0;
        object-fit: contain;
        margin-bottom: 0;
        align-self: center;
    }

    .trial-right {
        padding: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-box {
        display: flex;
        width: 700px;
        height: 750px;
        padding: 23px 40px;
        flex-direction: column;
        align-items: center;
        gap: 50px;
        flex-shrink: 0;
        border-radius: 20px;
        background: #FFF;
        box-shadow: -14px 12px 13.8px -1px rgba(0, 0, 0, 0.25);
    }

    .form-box h3 {
        font-size: 30px;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        font-style: normal;
        line-height: normal;
        color: #2D2B32;
        margin: 0;
    }

    .choose-highlight {
        color: #FFCB99;
    }

    .flex-form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 100%;
    }

    .form-row {
        display: flex;
        gap: 15px;
    }

    .form-row.full {
        flex-direction: column;
    }

    input,
    select,
    textarea {
        flex: 1;
        padding: 12px 15px;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 14px;
        width: 100%;
    }

    .trial-submit-btn {
        margin-top: 10px;
        background: #EDB311;
        color: #fff;
        padding: 12px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-weight: 600;
    }

    @media (max-width:1710px) {
        .trial-class-container {
            width: 100%;


        }
    }

    @media (max-width: 1200px) {
        .trial-class-container {
            width: 100%;
            height: auto;
            padding: 60px 20px;
        }

        .trial-class-inner {
            flex-wrap: wrap;
        }

        .trial-left,
        .trial-right {
            flex: 1 1 100%;
        }

        .form-box {
            width: 100%;
            height: auto;
            padding: 20px;
            gap: 30px;
        }

        .form-box h3 {
            font-size: 26px;
        }

        .flex-form {
            gap: 10px;
        }

        .trial-left {
            width: 100%;
            height: auto;
            padding: 20px;
            margin-top: 0;
            align-items: center;
        }

        .trial-left h2 {
            margin-top: 0;
        }

        .check-list {
            margin-left: 0;
        }

        .check-list li {
            width: 100%;
        }
    }


    @media (max-width: 768px) {
        .form-row {
            flex-direction: column;
        }

        .trial-image.people-img,
        .trial-image.zigzag-img {
            margin-left: 0;
        }
    }
</style>

<div class="trial-class-container">
    <div class="trial-class-inner">

        <!-- Left Side -->
        <div class="trial-left">
            <h2>Apply Trial Class</h2>
            <p class="subtitle">Every month more than 3,000 students attend our trial class</p>

            <ul class="check-list">
                <li>
                    <img src="../resources/img/courses/check-trial.png" alt="Check">
                    <p>Accomplish the application information</p>
                </li>
                <li>
                    <img src="../resources/img/courses/check-trial.png" alt="Check">
                    <p>We will contact you as soon as possible and learn about your children’s needs.</p>
                </li>
                <li>
                    <img src="../resources/img/courses/check-trial.png" alt="Check">
                    <p>The course consultant will arrange an excellent teacher for the trial class.</p>
                </li>
            </ul>

            <img src="../resources/img/courses/people.png" alt="People" class="trial-image people-img">
            <img src="../resources/img/courses/zigzag.png" alt="Zigzag" class="trial-image zigzag-img">
        </div>

        <!-- Right Side -->
        <div class="trial-right">
            <div class="form-box">
                <h3><span class="choose-highlight">Choose</span> a Trial Class</h3>

                <form class="flex-form">
                    <div class="form-row">
                        <input type="text" placeholder="First Name" required>
                        <input type="text" placeholder="Last Name" required>
                    </div>
                    <div class="form-row">
                        <input type="email" placeholder="Email" required>
                        <input type="tel" placeholder="Contact Number" required>
                    </div>
                    <div class="form-row full">
                        <select required>
                            <option value="" disabled selected>Select a course</option>
                            <option>WeTalk Kids Chinese</option>
                            <option>English Programs</option>
                            <option>Chinese Programs</option>
                            <option>Family Package</option>
                            <option>School Package</option>
                            <option>Kids Courses</option>
                            <option>Adult Courses</option>
                            <option>Teens/Youth Courses</option>
                        </select>
                    </div>
                    <div class="form-row full">
                        <textarea placeholder="Message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="trial-submit-btn">Submit</button>
                </form>
            </div>
        </div>

    </div>
</div>