<style>
    .img-fluid {
        position: relative;
        top: 100px;
    }

    .section-desc {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        color: #555;
    }

    .feature-card {
        background-color: #f9f9f9;
        border-radius: 15px;
        padding: 1.5rem;
        height: 100%;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .feature-icon {
        width: 50px;
        height: auto;
        margin-bottom: 1rem;

    }

    .feature-title {
        font-family: 'PoppinsBold', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .feature-desc {
        font-family: 'Poppins', sans-serif;
        font-size: 0.95rem;
        color: #333;
    }

    @media (max-width: 767px) {
        .feature-card {
            padding: 1.2rem;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
        }

        .section-title {
            font-size: 1.5rem;
        }

        .img-fluid {
            top: -10px;
            right: 23px
        }

        .col-sm-6 {
            margin-top: 1rem;
        }
    }
</style>
<div class="container my-5" style="background: #FEF6E1; padding:30px;">
    <div class="row g-4 align-items-center " style="margin-top:20px;">
        <!-- Left Side -->
        <div class="col-md-6">
            <div class="d-flex flex-column justify-content-between h-100">
                <h2 class="section-title mb-3" style=" text-align:center; padding-top:50px;" id="good-title">Good Deeds
                    for People and
                    the World</h2>
                <img src="img/intro-bg.png" alt="Support" class="img-fluid"
                    style="max-width:none; width:120%; height:auto;">
            </div>
        </div>

        <!-- Right Side -->
        <div class="col-md-6">
            <div class="row g-3">
                <!-- Box 1 -->
                <div class="col-sm-6 mb-3">
                    <div class="feature-card ">
                        <img src="img/intro-0.png" class="feature-icon " alt="Icon 1">
                        <h5 class="feature-title" id="good-card-1-title">Doing good deeds to deliver hope</h5>
                        <p class="feature-desc" id="good-card-1-detail">Any user on WeTalk's platform can| directly make
                            caring donations to
                            major charity foundations.
                        </p>
                    </div>
                </div>
                <!-- Box 2 -->
                <div class="col-sm-6 mb-3">
                    <div class="feature-card ">
                        <img src="img/intro-1.png" class="feature-icon" alt="Icon 2">
                        <h5 class="feature-title" id="good-card-2-title">Helping others to benefit yourself</h5>
                        <p class="feature-desc" id="good-card-2-detail">Participate in charity and dedication,
                            and your small act of kindness will benefit both others and yourself.</p>
                    </div>
                </div>
                <!-- Box 3 -->
                <div class="col-sm-6">
                    <div class="feature-card ">
                        <img src="img/intro-2.png" class="feature-icon" alt="Icon 3">
                        <h5 class="feature-title" id="good-card-3-title">Inheriting from generation to generation</h5>
                        <p class="feature-desc" id="good-card-3-detail">Throughout the history, China has developed the
                            everlasting virtue of
                            benevolence to light up an ordinary life.</p>
                    </div>
                </div>
                <!-- Box 4 -->
                <div class="col-sm-6">
                    <div class="feature-card ">
                        <img src="img/intro-3.png" class="feature-icon" alt="Icon 4" style="width:85px;">
                        <h5 class="feature-title" id="good-card-4-title">Many a little makes a mickle</h5>
                        <p class="feature-desc" id="good-card-4-detail">Great virtue is deposited in every small act.
                            WeTalk invites all of you
                            to sow the seed of benevolence and pool all caring forces to nurture more people in need of
                            help.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>