<style>
    span {
        display: inline;
        letter-spacing: normal;
    }

    .location-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        background: #007CFF;
        border-radius: 25px;
        box-shadow: 0px 4px 19.3px 0px rgba(24, 24, 27, 0.25);
        margin: 120px 0px 0 0px;
        gap: 50px;
        color: white;
        font-family: 'Poppins', sans-serif;
    }

    .location-text {
        width: 693px;
        margin-top: 65px;
        display: flex;
        flex-direction: column;
        margin-left: 65px;
        gap: 30px;
    }

    .location-text h2 {
        font-size: 40px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        color: #fff;
        margin: 0;
    }

    .check-list {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .check-item {
        display: flex;
        align-items: center;
        gap: 30px;
        font-size: 18px;
        align-items: flex-start;
    }

    .check-icon {
        width: 30px;
        height: 30px;
        flex-shrink: 0;
        margin-top: 3px;
    }

    .location-image {
        width: 733px;
        flex-shrink: 0;
        border-radius: 15px;
        overflow: hidden;
        margin: 20px 20px 20px 0;
    }

    .location-image img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 15px;
    }

    @media (max-width: 768px) {
        .location-container {
            flex-direction: column;
            padding: 40px 20px;
            margin: 80px 0 0 0;
            gap: 40px;
        }

        .location-text {
            width: 100%;
            margin: 0;
        }

        .location-text h2 {
            font-size: 24px;
        }

        .check-item {
            font-size: 16px;
        }

        .location-image {
            width: 100%;
        }
    }
</style>

<div class="location-container">
    <div class="location-text">
        <h2 id="location-title">Location Covered</h2>
        <div class="check-list">
            <div class="check-item">
                <div class="check-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M30 15C30 23.2842 23.2842 30 15 30C6.71572 30 0 23.2842 0 15C0 6.71572 6.71572 0 15 0C23.2842 0 30 6.71572 30 15ZM21.0455 10.4545C21.4848 10.8938 21.4848 11.6062 21.0455 12.0455L13.5455 19.5455C13.1061 19.9848 12.3939 19.9848 11.9545 19.5455L8.9545 16.5455C8.51517 16.1061 8.51517 15.3939 8.9545 14.9545C9.39384 14.5152 10.1062 14.5152 10.5455 14.9545L12.75 17.1589L16.1022 13.8068L19.4545 10.4545C19.8939 10.0152 20.6061 10.0152 21.0455 10.4545Z"
                            fill="#FAD414" />
                    </svg>
                </div>
                <span>
                    <span id="home-item-1">Home tutorial services are available only within the</span> <strong
                        id="home-item-2">Bonifacio Global City (BGC)</strong> <span id="home-item-3">area.</span></span>
            </div>
            <div class="check-item">
                <div class="check-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M30 15C30 23.2842 23.2842 30 15 30C6.71572 30 0 23.2842 0 15C0 6.71572 6.71572 0 15 0C23.2842 0 30 6.71572 30 15ZM21.0455 10.4545C21.4848 10.8938 21.4848 11.6062 21.0455 12.0455L13.5455 19.5455C13.1061 19.9848 12.3939 19.9848 11.9545 19.5455L8.9545 16.5455C8.51517 16.1061 8.51517 15.3939 8.9545 14.9545C9.39384 14.5152 10.1062 14.5152 10.5455 14.9545L12.75 17.1589L16.1022 13.8068L19.4545 10.4545C19.8939 10.0152 20.6061 10.0152 21.0455 10.4545Z"
                            fill="#FAD414" />
                    </svg>
                </div>
                <span>
                    <span id="home-item-4">Tutorials are available from</span> <strong id="home-item-5">9:00 AM to 9:00
                        PM.</strong>
                </span>
            </div>
            <div class="check-item">
                <div class="check-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M30 15C30 23.2842 23.2842 30 15 30C6.71572 30 0 23.2842 0 15C0 6.71572 6.71572 0 15 0C23.2842 0 30 6.71572 30 15ZM21.0455 10.4545C21.4848 10.8938 21.4848 11.6062 21.0455 12.0455L13.5455 19.5455C13.1061 19.9848 12.3939 19.9848 11.9545 19.5455L8.9545 16.5455C8.51517 16.1061 8.51517 15.3939 8.9545 14.9545C9.39384 14.5152 10.1062 14.5152 10.5455 14.9545L12.75 17.1589L16.1022 13.8068L19.4545 10.4545C19.8939 10.0152 20.6061 10.0152 21.0455 10.4545Z"
                            fill="#FAD414" />
                    </svg>
                </div>
                <span>
                    <span id="home-item-6">Locations outside BGC are</span> <strong id="home-item-7">NOT</strong> <span
                        id="home-item-8">eligible for home tutorials.</span>
                </span>
            </div>
            <div class="check-item">
                <div class="check-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M30 15C30 23.2842 23.2842 30 15 30C6.71572 30 0 23.2842 0 15C0 6.71572 6.71572 0 15 0C23.2842 0 30 6.71572 30 15ZM21.0455 10.4545C21.4848 10.8938 21.4848 11.6062 21.0455 12.0455L13.5455 19.5455C13.1061 19.9848 12.3939 19.9848 11.9545 19.5455L8.9545 16.5455C8.51517 16.1061 8.51517 15.3939 8.9545 14.9545C9.39384 14.5152 10.1062 14.5152 10.5455 14.9545L12.75 17.1589L16.1022 13.8068L19.4545 10.4545C19.8939 10.0152 20.6061 10.0152 21.0455 10.4545Z"
                            fill="#FAD414" />
                    </svg>
                </div>
                <span>
                    <span id="home-item-9">Tutorial will be conducted in a public area</span> <strong
                        id="home-item-10">(lobby, business center).</strong>
                </span>
            </div>
            <div class="check-item">
                <div class="check-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M30 15C30 23.2842 23.2842 30 15 30C6.71572 30 0 23.2842 0 15C0 6.71572 6.71572 0 15 0C23.2842 0 30 6.71572 30 15ZM21.0455 10.4545C21.4848 10.8938 21.4848 11.6062 21.0455 12.0455L13.5455 19.5455C13.1061 19.9848 12.3939 19.9848 11.9545 19.5455L8.9545 16.5455C8.51517 16.1061 8.51517 15.3939 8.9545 14.9545C9.39384 14.5152 10.1062 14.5152 10.5455 14.9545L12.75 17.1589L16.1022 13.8068L19.4545 10.4545C19.8939 10.0152 20.6061 10.0152 21.0455 10.4545Z"
                            fill="#FAD414" />
                    </svg>
                </div>
                <span>
                    <span id="home-item-11">Conduct classes only in approved, safe locations</span> <strong
                        id="home-item-12">(living room, study area)</strong> <span id="home-item-13">. If the student is
                        staying in a hotel, the class must be held in a designated public area</span> <strong
                        id="home-item-14">(lobby, business center, or other safe public spaces).</strong>
                </span>
            </div>
        </div>
    </div>
    <div class="location-image">
        <img src="../resources/img/tutorial/location.png" alt="WeTalk Location Coverage">
    </div>
</div>