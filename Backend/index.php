<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Forms</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        .forms-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background: url('assets/bg.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            animation: animateBg 5s linear infinite;
            position: relative;
        }
@keyframes animateBg {
            100% {
                filter: hue-rotate(360deg);
            }
        }
        .login-box,
        .register-box,
        .forgot-password-box,
        .otp-verification-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 300px;
            padding: 20px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            backdrop-filter: blur(15px);
            opacity: 0;
            z-index: 0;
            transition: opacity 0.5s ease, z-index 0.5s ease;
        }
        .active {
            opacity: 1;
            z-index: 1;
        }
        h2 {
            font-size: 1.5em;
            color: #fff;
            text-align: center;
        }
        .input-box {
            position: relative;
            width: 100%;
            margin: 15px 0;
            border-bottom: 2px solid #fff;
        }
        .input-box label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 1em;
            color: #fff;
            pointer-events: none;
            transition: 0.5s;
        }
        .input-box input:focus ~ label,
        .input-box input:valid ~ label {
            top: -5px;
        }
        .input-box input {
            width: 100%;
            height: 40px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            color: #fff;
            padding: 0 35px 0 5px;
        }
        .input-box .icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            line-height: 57px;
        }
        .remember-forget {
            margin: 10px 0;
            font-size: 0.9em;
            color: #fff;
            display: flex;
            justify-content: space-between;
        }
        button {
            width: 100%;
            height: 40px;
            background: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            cursor: pointer;
            font-size: 1em;
            color: #000;
            font-weight: 500;
        }
        button:hover {
            background-color: #ddd;
        }
        .register-link {
            font-size: 0.9em;
            color: #fff;
            text-align: center;
            margin: 20px 0 10px;
        }
        .register-link p a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }
        .register-link p a:hover {
            text-decoration: underline;
        }
@media only screen and (max-width: 768px) {
            .login-box,
            .register-box,
            .forgot-password-box,
            .otp-verification-box {
                width: 90%;
            }

@media only screen and (min-width: 800px) {
                .login-box,
                .register-box,
                .forgot-password-box,
                .otp-verification-box {
                    width: 90%;

                }
            </style>
        </head>
        <body>
            <section class="forms-container">
                <!-- Login Form -->
                <div class="login-box active" id="login-box" action="POST">
                    <form id="login-form">
                        <h2>Login</h2>
                        <div class="input-box">
                            <span class="icon"><ion-icon></ion-icon></span>
                            <input type="email" placeholder="example@gmail.com" id="login-email" name="cmail"required>
                            <label for="">Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon></ion-icon></span>
                            <input type="password" placeholder="password" id="login-password" name="cpasswrd" required>
                            <label for="">Password</label>
                        </div>
                        <div class="remember-forget">
                            <label><input type="checkbox" id="remember-me"> Remember me</label>
                        </div>
                       <a href="main.php"><button type="submit">Login</button></a>
                        <div class="register-link">
                            <p>
                                Don't have an account? <a href="javascript:void(0)" id="register-link">Register</a>
                            </p>

                        </div>
                    </form>
                </div>

                <!-- Register Form -->
                <div class="register-box" id="register-box">
                    <form id="register-form" action="POST">
                        <h2>Register</h2>
                        <div class="input-box">
                            <span class="icon"><ion-icon></ion-icon></span>
                            <input type="text" id="full-name" name="person" required>
                            <label for="">Full Name</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon></ion-icon></span>
                            <input type="text" id="gender" name="gender" required>
                            <label for="">Gender</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon></ion-icon></span>
                            <input type="email" id="register-email" name="mail" required>
                            <label for="">Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon></ion-icon></span>
                            <input type="tel" id="phone" name="number" required pattern="[0-9]{10}" title="Enter a 10-digit phone number">
                            <label for="">Phone Number</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon></ion-icon></span>
                            <input type="text" id="address" name="address"required>
                            <label for="">Address</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon></ion-icon></span>
                            <input type="password" id="register-password" name="password" required>
                            <label for="">Password</label>
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon></ion-icon></span>
                            <input type="password" id="confirm-password" name="confirmpasswrd" required>
                            <label for="">Confirm Password</label>
                        </div>
                       <a href="main.php"><button type="submit" name="register">Register</button></a>
                        <div class="register-link">
                            <p>
                                Already have an account? <a href="javascript:void(0)" onclick="toggleBox('login')">Login</a>
                            </p>
                        </div>
                    </form>
                </div>

                <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
                <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
                <script>
                    // Ensure the DOM is fully loaded before running the script
                    document.addEventListener("DOMContentLoaded", () => {
                        // Function to toggle between different forms
                        function toggleBox(boxName) {
                            const loginBox = document.getElementById('login-box');
                            const registerBox = document.getElementById('register-box');
                            const forgotPasswordBox = document.getElementById('forgot-password-box');
                            const otpVerificationBox = document.getElementById('otp-verification-box');

                            // Hide all boxes
                            if (loginBox) loginBox.classList.remove('active');
                            if (registerBox) registerBox.classList.remove('active');
                            if (forgotPasswordBox) forgotPasswordBox.classList.remove('active');
                            if (otpVerificationBox) otpVerificationBox.classList.remove('active');

                            // Show the target box
                            if (boxName === 'login' && loginBox) loginBox.classList.add('active');
                            if (boxName === 'register' && registerBox) registerBox.classList.add('active');
                            if (boxName === 'forgot-password' && forgotPasswordBox) forgotPasswordBox.classList.add('active');
                            if (boxName === 'otp-verification' && otpVerificationBox) otpVerificationBox.classList.add('active');
                        }

                        // Attach event listener to "Don't have an account?" link
                        const registerLink = document.getElementById('register-link');
                        if (registerLink) {
                            registerLink.addEventListener('click', () => {
                                toggleBox('register');
                            });
                        }

                        // Example for login link (if needed)
                        const loginLink = document.querySelector("a[href='javascript:void(0)'][onclick*='login']");
                        if (loginLink) {
                            loginLink.addEventListener('click', () => {
                                toggleBox('login');
                            });
                        }
                    });
                </script>
            </body>
        </html>
<?php
require 'function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        if (registerUser($username, $password)) {
            echo "User registered successfully!";
        } else {
            echo "Failed to register.";
        }
    } elseif (isset($_POST['login'])) {
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $user = authenticateUser($username, $password);
        if ($user) {
            echo "Welcome, " . htmlspecialchars($user['username']) . "!";
        } else {
            echo "Invalid credentials.";
        }
    }
}
?>