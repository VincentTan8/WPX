<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transparent Navbar</title>
    <style>
        /* General styles for the navigation bar */
        .navbar-nav_side {
            list-style: none;
            padding: 0;
            margin: 0;
            display: block;
            background-color: rgba(0, 0, 0, 0.7);
            /* Transparent background for the navbar */
            /*   width: 200px; Optional: width of the vertical menu */
        }

        .nav-item_side {
            position: relative;
            margin-bottom: 10px;
            /* Optional: spacing between nav items */
        }

        .nav-link_side {
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            color: #ffffff;
            background-color: rgba(0, 0, 0, 0.7);
            /* Transparent background for the links */
        }

        .nav-link_side:hover {
            background-color: rgba(220, 220, 220, 0.7);
            /* Transparent background on hover */
            color: darkolivegreen;
        }

        /* Hide submenu by default */
        .submenu {
            display: none;
            list-style: none;
            padding: 0;
            margin: 0;
            border-color: rgba(0, 0, 0, 0.7);
            background-color: rgba(0, 0, 0, 0.7);
            /* Transparent background for the submenu */
            overflow: hidden;
            /* Hide overflowing content */
            max-height: 0;
            /* Initially collapsed height */
            transition: max-height 0.9s ease;
            /* Smooth slide-down animation */
        }

        /* Show submenu when parent item is hovered */
        .nav-item_side:hover>.submenu {
            display: block;
            max-height: 500px;
            /* Adjust to the maximum height of your submenu */
            animation-name: slideDown;
            animation-duration: 0.9s;
            animation-timing-function: ease;
        }

        @keyframes slideDown {
            from {
                max-height: 0;
            }

            to {
                max-height: 200px;
                /* Adjust to the maximum height of your submenu */
            }
        }

        /* Style submenu items */
        .submenu li {
            margin: 0;
        }

        /* Style submenu links */
        .submenu li a {
            display: block;
            padding: 10px 15px;
            color: #ffffff;
            /* Text color of the submenu links */
            text-decoration: none;
            background-color: rgba(0, 0, 0, 0.7);
            /* Transparent background for the submenu links */
        }

        /* Hover effect for submenu links */
        .submenu li a:hover {
            background-color: rgba(220, 220, 220, 0.7);
            /* Transparent background on hover */
            color: darkolivegreen;
        }

        /* Ensure the submenu items push down the following items */
        .submenu {
            position: relative;
        }
    </style>
</head>

<body>
    <div class="navbar-nav_side" style="margin-top: 70px;">
        <ul>
            <li>
                <a style="color:#ffffff; margin-left: 15px;
                    background-color: transparent;
                    text-decoration: none;" href="../">Home</a>
            </li>
            <li class="nav-item_side">
                <a class="nav-link_side link dropdown-toggle" href="#b">WeTalk Courses</a>
                <ul class="submenu">
                    <li>
                        <a style="color:#ffffff; margin-left: 15px;
                            background-color: transparent;
                            text-decoration: none;" href="../short-video/">&nbsp;Intelligent Databases</a>
                    </li>
                    <li><a style="color:#ffffff; margin-left: 15px;
                            background-color: transparent;
                            text-decoration: none;" href="../recorded-courses/"><!--<i class="fas fa-lightbulb"></i>&nbsp;Intelligent Databases</a></li>
                    <li><a   class="dropdown-toggle" href="#"><!--<i class="fas fa-file-video"></i>-->&nbsp;Recording
                            Course</a></li>
                    <li class="nav-item_side">
                        <!-- <a href="#s" class="nav-link_side dropdown-toggle">&nbsp;Online Course</a>
                        <ul class="submenu">
                            <li><a href="#course1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Linguistics</a></li>
                            <li><a href="#course2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chinese Culture Learning</a></li>
                            <li><a href="#course3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Science</a></li>
                        </ul> -->
                        <a href="#s"
                            class="nav-link_side  dropdown-toggle  ">&nbsp;<!--<i class="fas fa-book"></i>-->Course</a>
                        <ul class="submenu">
                            <li><a href="../chinese/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Linguistics</a>
                            </li>
                            <li><a href="../sinology/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chinese Culture
                                    Learning</a></li>
                            <li><a href="../science/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Science</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li style="margin-top: -5px;">
                <a style="color:#ffffff; margin-left: 15px;
                    background-color: transparent;
                    text-decoration: none;" href="../linguistic/">Linguistics</a>
            </li>

            <li style="margin-top: 15px;">
                <a style="color:#ffffff; margin-left: 15px;
                    background-color: transparent;
                    text-decoration: none;" href="../teacher/">Teachers</a>
            </li>

            <li style="margin-top: 15px;">
                <a style="color:#ffffff; margin-left: 15px;
                    background-color: transparent;
                    text-decoration: none;" href="../news/">News</a>
            </li>



            <li style="margin-top: 15px;">
                <a style="color:#ffffff; margin-left: 15px;
                    background-color: transparent;
                    text-decoration: none;" href="../study-abroad/">Study Abroad</a>

            </li>
            <li class="nav-item_side" style="margin-top: 10px;">
                <a class="nav-link_side dropdown-toggle" href="../educational-tour/">Educational Tours</a>
                <ul class="submenu">
                    <li><a href="../educational-tour/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Info</a></li>
                    <li><a href="../tour/?dest=TW">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taiwan</a></li>
                    <li><a href="../tour/?dest=CN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;China</a></li>
                    <li><a href="../tour/?dest=SG">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Singapore</a></li>
                    <li><a href="../tour/?dest=JP">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Japan</a></li>
                    <li><a href="../tour/?dest=PH">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Philippines</a></li>
                </ul>
            </li>
            <li class="nav-item_side" style="margin-top: 10px;">
                <a class="nav-link_side dropdown-toggle" href="#s">Company</a>
                <!-- Submenu for Delicious Food -->
                <ul class="submenu">
                    <li><a href="../charity/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charity</a></li>
                    <li><a href="../about-us/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a></li>
                    <li><a href="../campus-philippines/">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Campus</a></li>
                </ul>
            </li>

            <li style="margin-top: 10px;">
                <a style="color:#ffffff; margin-left: 15px;
                    background-color: transparent;
                    text-decoration: none;" href="#contact">Sign In</a>
            </li>

            <li style="margin-top: 15px;">
                <a style="color:#ffffff; margin-left: 15px;
                    background-color: transparent;
                    text-decoration: none;" href="#contact">Sign Up</a>
            </li>
            <li class="nav-item_side" style="margin-top: 10px;">
                <a class="nav-link_side dropdown-toggle" href="#s">Language</a>
                <ul class="submenu">
                    <li><a href="../includes/language.php?lang=EN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;English</a></li>
                    <li><a href="../includes/language.php?lang=CN">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;中文</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <script>
        // JavaScript to handle the submenu toggling
        document.querySelectorAll('.nav-link_side').forEach(item => {
            item.addEventListener('click', event => {
                event.preventDefault();

                // Close all open submenus
                document.querySelectorAll('.submenu').forEach(submenu => {
                    if (submenu !== item.nextElementSibling) {
                        submenu.style.maxHeight = null;
                    }
                });

                // Toggle the clicked submenu
                const submenu = item.nextElementSibling;
                if (submenu.style.maxHeight) {
                    submenu.style.maxHeight = null;
                } else {
                    submenu.style.maxHeight = submenu.scrollHeight + "px";
                }
            });
        });
    </script>
</body>

</html>