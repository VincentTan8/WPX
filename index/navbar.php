<style>
    .navbar {
        font-family: 'Times New Roman', Times, serif;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 10000;
        background: transparent;

    }

    .navbar .nav-link,
    .navbar .dropdown-toggle {
        color: white;
    }

    .navbar .nav-link:hover,
    .navbar .dropdown-item:hover {
        background-color: rgba(255, 255, 255, 0.2);
        color: white;
    }


    .navbar .dropdown-menu {
        background-color: white;
        min-width: 200px;
        margin-top: 15px;
        border: none;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        position: relative;
        display: none;
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s ease;
    }


    .nav-item.dropdown {
        position: relative;
    }

    .nav-item.dropdown:hover>.dropdown-menu {
        display: block;
        visibility: visible;
        opacity: 1;
    }


    .nav-item.dropdown::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        height: 15px;
        background: transparent;
        z-index: 1;
    }


    .navbar .dropdown-item {
        color: #7f7f7f;
        padding: 10px 20px;
        line-height: 1.5;
        display: flex;
        align-items: center;
    }

    .navbar .dropdown-item:hover {
        background-color: #f8f9fa;
        color: black;
        border-radius: 10px;
    }


    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu::after {
        content: "";
        position: absolute;
        top: 0;
        right: -20px;
        width: 30px;
        height: 100%;
    }

    .dropdown-submenu>.dropdown-toggle::after {
        float: right;
        margin-left: 0.5em;
        font-size: 0.75em;
    }

    .dropdown-submenu>.dropdown-menu {
        top: -90px;
        left: 102%;
        margin-top: 0;
        transform: translateY(-5px);
        border-radius: 20px;
    }

    .dropdown-submenu:hover>.dropdown-menu {
        display: block;
        visibility: visible;
        opacity: 1;
    }


    .navbar-nav .nav-link.hover-underline {
        position: relative;
        overflow: hidden;
    }

    .navbar-nav .nav-link.hover-underline::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%) translateX(-10px);
        width: 47px;
        height: 10px;
        background: url('assets/wetalk/menu_line.png') no-repeat center;
        background-size: contain;
        opacity: 0;
        transition: transform 0.4s ease, opacity 0.4s ease;
        border: none;
    }

    .navbar-nav .nav-link.hover-underline:hover::after {
        transform: translateX(-50%) translateX(0);
        opacity: 1;
    }

    .nav-item.dropdown .nav-link.hover-underline::after {
        opacity: 0;
        transform: translateX(-50%) translateX(-10px);
        transition: transform 0.4s ease, opacity 0.4s ease;
    }

    .nav-item.dropdown:hover .nav-link.hover-underline::after,
    .nav-item.dropdown:hover .dropdown-menu .nav-link.hover-underline::after {
        display: block;
        opacity: 1;
        transform: translateX(-50%) translateX(0);
    }


    .navbar-nav .nav-link i.material-icons {
        font-size: 20px;
        vertical-align: middle;
    }


    .navbar-auth {
        gap: 8px;
    }


    @media (max-width: 1380px) {
        .navbar {
            display: none;
        }
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light custom-navbar">
    <div class="container-fluid" style="padding: 10px 30px; gap: 10px">

        <!-- Left: Logo -->
        <a class="navbar-brand" href="main-page.php">
            <img src="assets/wetalk/logo_white.png" alt="Wetalk Logo" style="height: auto; width:160px;">
        </a>

        <!-- Toggler: Hidden since you're using a custom hamburger -->
        <button class="navbar-toggler d-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu"
            aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Center: Navigation Menu -->
        <div class="collapse navbar-collapse justify-content-center flex-grow-1" id="navbarMenu">
            <ul class="navbar-nav d-flex align-items-center gap-5 mb-0">

                <li class="nav-item">
                    <a class="nav-link hover-underline" href="main-page.php" id="sr-nav-home">Home</a>
                </li>

                <!-- WeTalk Courses Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hover-underline" href="#" id="sr-nav-wetalk-courses"
                        role="button">
                        WeTalk Courses<i class="material-icons">arrow_drop_down</i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="wetalkCourses">
                        <li><a class="dropdown-item" id="sr-nav-intelligent-database"
                                href="https://wetalk.com/short-video/">Intelligent Database</a>
                        </li>
                        <li><a class="dropdown-item" id="sr-nav-recording-course"
                                href="https://wetalk.com/recorded-courses/">Recording Course</a>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item " id="sr-nav-course" href="#">Course <i class="material-icons"
                                    style="padding-left:80px;">arrow_right</i></a>
                            <ul class="dropdown-menu">
                                <li><a class=" dropdown-item" id="sr-nav-chinese"
                                        href="https://wetalk.com/chinese/">Linguistic</a>
                                </li>
                                <li><a class="dropdown-item" id="sr-nav-sinology"
                                        href="https://wetalk.com/sinology/">Chinese Culture
                                        Learning</a></li>
                                <li><a class="dropdown-item" id="sr-nav-science"
                                        href="https://wetalk.com/science/">Science</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link hover-underline" id="sr-nav-linguistics"
                        href="https://wetalk.com/linguistic/">Linguistic</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-underline" id="sr-nav-teachers"
                        href="https://wetalk.com/teacher/">Teacher</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link hover-underline" id="sr-nav-news" href="https://wetalk.com/news/">News</a>
                </li>

                <!-- Educational Tours Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hover-underline" href="#" id="sr-nav-educ-tour" role="button">
                        Educational Tours<i class="material-icons">arrow_drop_down</i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="eduToursDropdown">
                        <li><a class="dropdown-item" id="sr-nav-taiwan"
                                href="https://wetalk.com/educational-tours/taiwan/">Taiwan</a></li>
                        <li><a class="dropdown-item" id="sr-nav-china"
                                href="https://wetalk.com/educational-tours/china/">China</a></li>
                        <li><a class="dropdown-item" id="sr-nav-singapore"
                                href="https://wetalk.com/educational-tours/singapore/">Singapore</a>
                        </li>
                        <li><a class="dropdown-item" id="sr-nav-japan"
                                href="https://wetalk.com/educational-tours/japan/">Japan</a></li>
                        <li><a class="dropdown-item" id="sr-nav-philippines"
                                href="https://wetalk.com/educational-tours/philippines/">Philippines</a></li>
                    </ul>
                </li>

                <!-- Company Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle hover-underline" href="#" id="sr-nav-company" role="button">
                        Company<i class="material-icons">arrow_drop_down</i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="companyMenu">
                        <li><a class="dropdown-item" id="sr-nav-charity" href="https://wetalk.com/charity/">Charity</a>
                        </li>
                        <li><a class="dropdown-item" id="sr-nav-about-us" href="https://wetalk.com/about-us/">About
                                Us</a></li>
                        <li><a class="dropdown-item" id="sr-nav-campus"
                                href="https://wetalk.com/campus-philippines/">Campus</a></li>
                    </ul>
                </li>

            </ul>
        </div>

        <!-- Right: Auth Buttons -->
        <div class="navbar-auth d-flex align-items-center" style="gap:20px;">
            <a class="nav-link" id="sr-nav-signin" href="https://wetalk.com/signin/">Sign In</a>
            <span style="color:white;">|</span>
            <a class="btn btn-primary " id="sr-nav-signup" href="https://wetalk.com/signup/"
                style="border-radius: 20px; padding: 5px 20px; background:transparent; border: 2px solid white;">Sign
                Up</a>
        </div>
    </div>
</nav>