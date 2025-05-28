<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}
?>
<?php include "../includes/header.php"; ?>

<head>
    <title>Login</title>
    <style>
        .login {
            margin-top: 8rem;
            padding: 2rem;
            border-radius: 10px;
            justify-self: center;
            width: 90%;
            max-width: 400px;
            text-align: center;
        }

        .login-container {

            padding: 2rem;
            border-radius: 10px;

            width: 90%;
            max-width: 400px;
        }

        .login-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .login-container input,
        .login-container button {
            width: 100%;
            padding: 12px 15px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 1rem;
        }

        .login-container input:focus {
            border-color: #4a90e2;
            outline: none;
        }

        .login-container button {
            background-color: #4a90e2;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #357ab7;
        }

        @media (max-width: 500px) {
            .login-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="login">
        <div class="login-container">
            <h2>Login</h2>
            <form method="post" action="authenticate.php">
                <input type="text" name="username" placeholder="Username" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

<?php include "../includes/footer.php"; ?>