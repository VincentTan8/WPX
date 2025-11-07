<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Not Found — WeTalk</title>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            color: #333;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
        }

        .logo {
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
            height: auto;
        }

        h1 {
            font-size: 4rem;
            margin: 0;
        }

        p {
            font-size: 1.2rem;
            margin: 20px 0;
        }

        a.btn {
            display: inline-block;
            text-decoration: none;
            background: #f2b33d;
            color: #fff;
            padding: 12px 24px;
            border-radius: 4px;
            font-size: 1rem;
            margin: 20px 0;
            transition: background 0.3s ease;
        }

        a.btn:hover {
            background: #d99e32;
        }

        @media(max-width: 600px) {
            h1 {
                font-size: 3rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="/resources/img/logo.png" alt="">
        </div>
        <h1>404</h1>
        <p>Oops! The page you’re looking for cannot be found.</p>
        <p>Please return to the homepage and continue browsing.</p>
        <a class="btn" href="/">Go to Homepage</a>
    </div>
</body>

</html>