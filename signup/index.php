<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="../resources/img/favicon.ico">
    <title>Wetalk - Wetalk International Education Pte. Ltd.</title>

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
        }

        .container {
            display: flex;
            flex: 1;
            position: relative;
        }

        .image-side {
            flex: 1;
            background-image: url('../signup/img/banner.png');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            max-width: 150px;
        }

        .login-side {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            flex-direction: column;
        }

        .login-form {
            width: 100%;
            max-width: 400px;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        .login-form h2 {
            margin-bottom: 20px;
        }

        .login-form input {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }


        .login-form textarea {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form select {
            width: 95%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-form button:hover {
            background: #0056b3;
        }

        .footer {
            text-align: left;
            padding: 10px 0px 20px 50px;
            color: gray;
            font-size: 12px;
            position: absolute;
            bottom: 0;
            width: 100%;

        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .image-side {
                display: none;
            }

            .login-side {
                background-image: url('../signup/img/banner.png');
                background-size: cover;
                background-position: center;
                width: 100%;
                padding-top: 60px;
                /* Adjust as needed */
                position: relative;
            }

            .logo {
                position: fixed;
                top: 20px;
                left: 50%;
                transform: translateX(-50%);
                max-width: 100px;
                margin: 0;
            }

            .footer {
                text-align: center;
                padding: 10px;
                color: gray;
                font-size: 12px;
                position: absolute;
                bottom: 10px;
                width: 100%;

            }
        }
    </style>
</head>

<body oncontextmenu="return false;">
    <div class="container">
        <div class="image-side">
            <img src="../signup/img/logo_white.png" alt="Logo" class="logo">
        </div>
        <div class="login-side">
            <img src="../signup/img/logo_white.png" alt="Logo" class="logo">
            <form method="post" action="../includes/signup_save.php" class="login-form">
                <h2>Book a class now! 现在预定课程</h2>
                <p style="color:#767E90; font-size:13px; line-height:20px">Once you log in or create an account, it
                    means that
                    you have read and agreed to WeTalk <a href="../service/" target="_blank"> terms of service </a>
                    and <a href="../privacy/" target="_blank"> privacy agreement </a>. </p>

                <p style="color:#767E90; font-size:13px; line-height:20px; margin-top:-10px">一旦您登录或创建帐户，即表示您已阅读并同意
                    向WeTalk提供<a href="../service/" target="_blank"> 服务条款和 </a>
                    <a href="../privacy/" target="_blank"> 隐私协议 </a>。
                </p>

                <input required type="text" name="first_name" placeholder="Given Name 名">
                <input required type="text" name="last_name" placeholder="Family Name 姓">
                <input required type="email" name="email" placeholder="Email 电子邮件地址">
                <input required type="text" name="contact" placeholder="Contact Number 电话号码">

                <select required title="" style="width: 100%;" class=" js-example-basic-single" name="course">
                    <option value="">
                        Select a Course 选择一个课程
                    </option>
                    <!-- <option value="Trending Guo Xue">
                        Trending Guo Xue 潮国学
                    </option> -->
                    <!-- <option value="Exam-oriented Course (Kids)">
                        Exam-oriented Course (Kids) 应试中文课程（儿童）
                    </option> -->
                    <!-- <option value="Exam-oriented Chinese Course (Adult)">
                        Exam-oriented Chinese Course (Adult) 应试中文课程（成人）
                    </option> -->
                    <option value="Kids English Class">
                        Kids English Class 儿童英语课程
                    </option>
                    <option value="Adult English Class">
                        Adult English Class 成人英语课程
                    </option>
                    <option value="Kids Mandarin Class">
                        Kids Mandarin Class 儿童普通话课程
                    </option>
                    <option value="Adult Mandarin Class">
                        Adult Mandarin Class 成人普通话课程
                    </option>
                    <!-- <option value="Chinese Idioms">
                        Chinese Idioms 中华成语课
                    </option> -->
                    <!-- <option value="Filipino Program">
                        Filipino Program 菲律宾语课
                    </option> -->
                </select>

                <hr>
                <textarea name="message" type="text" placeholder="Message 信息"></textarea>
                <button type="submit">Submit</button>
                <!-- <p style="color:#767E90; font-size:13px; line-height:20px">Have an account already? <a href="../signin/">Log-in</a> </p> -->
            </form>
        </div>
        <div class="footer">
            &copy; WeTalk International Education Pte. Ltd. <?php echo date("Y"); ?>
        </div>
    </div>
</body>

</html>