<style>
    .related-section {
        margin-top: 80px;
    }

    .related-title {
        color: #18181B;
        font-family: 'Poppins', sans-serif;
        font-size: 30px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin-bottom: 30px;
        text-align: left;
        max-width: 1440px;
        margin-left: auto;
        margin-right: auto;
        padding: 0 20px;
    }

    .related-swiper {
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        overflow: hidden;
        padding: 0 20px;
    }

    .related-swiper .swiper-wrapper {
        height: 100%;
    }

    .related-swiper .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .course-card {
        border-radius: 10px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        width: 433px;
        height: 479.631px;
        background: #F0F8FF;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.25);
    }

    .course-image-wrapper {
        position: relative;
        width: 417px;
        height: 255px;
        flex-shrink: 0;
        overflow: hidden;
        align-self: center;
        margin-top: 6px;
        border-radius: 5px;
    }

    .course-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .course-badge {
        position: absolute;
        top: 10px;
        right: 10px;
        background: white;
        color: black;
        font-size: 12px;
        padding: 5px 10px;
        border-radius: 30px;
        width: 100px;
        text-align: center;
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
    }

    .course-content {
        padding: 15px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        gap: 10px;
    }

    .course-rating-title-wrap {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: space-between;
        gap: 8px;
        width: 100%;
    }

    .course-title {
        width: 314px;
        height: 51px;
        color: #18181B;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 700;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        text-align: left;
    }

    .course-rating {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .rating-text {
        color: #A8A0A0;
        font-family: 'Poppins', sans-serif;
        font-size: 14px;
        font-weight: 400;
    }

    .course-description {
        width: 415px;
        height: 84px;
        overflow: hidden;
        color: #18181B;
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: 400;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        text-overflow: ellipsis;
        text-align: left;
    }

    .course-footer {
        width: 248px;
        height: 28px;
        color: #4170FE;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: 700;
        text-align: left;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #4170FE;
    }

    .swiper-pagination-bullet {
        background: #ccc;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background: #4170FE;
    }

    @media (max-width: 768px) {
        .course-card {
            width: 100%;
            height: auto;
        }

        .course-image-wrapper {
            width: 100%;
            height: auto;
            aspect-ratio: 139 / 85;
        }

        .course-description,
        .course-title,
        .course-footer {
            width: 100%;
        }

        .related-title {
            font-size: 24px;
        }

        .related-swiper {
            padding: 0 16px;
        }

        .course-description {
            font-size: 14px;
        }

        .course-title,
        .course-footer {
            font-size: 16px;
        }
    }
</style>

<!-- Related Section -->
<div class="related-section">
    <h2 id="related-courses-title" class="related-title">Related Courses</h2>
    <div class="swiper related-swiper">
        <div class="swiper-wrapper">
            <!-- Course Slides -->
            <!-- <div class="swiper-slide">
                <div class="course-card">
                    <div class="course-image-wrapper">
                        <img src="../resources/img/course/course-1.png" alt="Course" />
                        <div class="course-badge">Level 1</div>
                    </div>
                    <div class="course-content">
                        <div class="course-rating-title-wrap">
                            <div class="course-title">WeTalk Kids Chinese Package 2（WK1–WK2） Kids Level 1</div>
                            <div class="course-rating">
                                ⭐ <span class="rating-text">5.0</span>
                                <span class="rating-text">(20)</span>
                            </div>
                        </div>
                        <div class="course-description">
                            The Package 1 course focuses on basic Chinese under greetings, family, fruits, and more,
                            using simple sentence patterns.
                        </div>
                        <div class="course-footer">WeTalk Kids Chinese</div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".related-swiper", {
            loop: false,
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            }
        });
    });
</script>