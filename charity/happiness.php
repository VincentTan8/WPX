<style>
    .section-title {
        font-family: 'PoppinsBold', sans-serif;
        font-size: 1.8rem;
        font-weight: 700;
        text-align: left;
        margin-bottom: 2rem;
    }

    .feature-box {
        border-radius: 15px;
        padding: 1.5rem;
        height: 100%;
        display: flex;
        flex-direction: column;
        text-align: left;
    }

    .feature-img {
        width: 100%;
        border-radius: 10px;
        object-fit: cover;
        margin-bottom: 1rem;
        height: 180px;
        /* fixed height for consistent box size */
    }

    .feature-title {
        font-family: 'PoppinsBold', sans-serif;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .feature-desc {
        font-family: 'Poppins', sans-serif;
        font-size: 1rem;
        color: #333;
        margin: 0;
        flex-grow: 1;
        /* make desc fill available vertical space */
    }

    /* Responsive tweak: smaller image height on mobile */
    @media (max-width: 767.98px) {
        .feature-img {
            height: 140px;
        }

        .feature-box {
            padding: 0;
            margin-top: 20px;

        }

    }
</style>

<div class="container my-5">
    <h2 class="section-title" id="happiness-title">For the Happiness of Mankind</h2>

    <div class="row g-4">
        <!-- Box 1 -->
        <div class="col-md-6">
            <div class="feature-box">
                <img src="img/c-0.png" alt="Public welfare for the world" class="feature-img" />
                <h4 class="feature-title" id="happiness-card-1-title">Public welfare for the world</h4>
                <p class="feature-desc" id="happiness-card-1-detail">
                    Uniting all possible forces across the world and integrating Chinese wisdom into the world's public
                    welfare projects, WeTalk endeavors to enhance human well-being and help realize the good aspiration
                    of the sustainable development of international public welfare.
                </p>
            </div>
        </div>

        <!-- Box 2 -->
        <div class="col-md-6">
            <div class="feature-box">
                <img src="img/c-1.png" alt="Public welfare for children" class="feature-img" />
                <h4 class="feature-title" id="happiness-card-2-title">Public welfare for children</h4>
                <p class="feature-desc" id="happiness-card-2-detail">
                    Focusing on children's public welfare, WeTalk links philanthropy with children's growth. It has
                    organized various public welfare lectures and built a platform for children's public welfare to help
                    children grow up healthily and happily.
                </p>
            </div>
        </div>

        <!-- Box 3 -->
        <div class="col-md-6">
            <div class="feature-box">
                <img src="img/c-2.png" alt="Public welfare for education" class="feature-img" />
                <h4 class="feature-title" id="happiness-card-3-title">Public welfare for education</h4>
                <p class="feature-desc" id="happiness-card-3-detail">
                    WeTalk devotes itself to public welfare for education by donating teaching materials, sending
                    teachers to support education, and providing free open classes to facilitate the balanced
                    development of superior educational resources.
                </p>
            </div>
        </div>

        <!-- Box 4 -->
        <div class="col-md-6">
            <div class="feature-box">
                <img src="img/c-3.png" alt="Public welfare for the elderly" class="feature-img" />
                <h4 class="feature-title" id="happiness-card-4-title">Public welfare for the elderly</h4>
                <p class="feature-desc" id="happiness-card-4-detail">
                    Respecting the aged and caring for the young are the traditional virtues of Chinese culture. WeTalk
                    carries forward the spirit that elders in the families of others shall be similarly treated and
                    supports featured, diversified, and influential public welfare projects for the elderly.
                </p>
            </div>
        </div>
    </div>
</div>