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