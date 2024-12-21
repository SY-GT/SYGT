function toggleBox(box) {
    const loginBox = document.querySelector('.login-box');
    const registerBox = document.querySelector('.register-box');
    const forgotPasswordBox = document.querySelector('.forgot-password-box');
    const otpVerificationBox = document.querySelector('.otp-verification-box');

    loginBox.classList.remove('active');
    registerBox.classList.remove('active');
    forgotPasswordBox.classList.remove('active');
    otpVerificationBox.classList.remove('active');

    if (box === 'login') {
        loginBox.classList.add('active');
    } else if (box === 'register') {
        registerBox.classList.add('active');
    } else if (box === 'forgot-password') {
        forgotPasswordBox.classList.add('active');
    } else if (box === 'otp-verification') {
        otpVerificationBox.classList.add('active');
    }
}
// Toggle between forms
function toggleBox(boxName) {
    const loginBox = document.getElementById('login-box');
    const registerBox = document.getElementById('register-box');
    const forgotPasswordBox = document.getElementById('forgot-password-box');
    const otpVerificationBox = document.getElementById('otp-verification-box');

    // Hide all boxes
    loginBox.classList.remove('active');
    registerBox.classList.remove('active');
    forgotPasswordBox.classList.remove('active');
    otpVerificationBox.classList.remove('active');

    // Show the target box
    if (boxName === 'login') {
        loginBox.classList.add('active');
    } else if (boxName === 'register') {
        registerBox.classList.add('active');
    } else if (boxName === 'forgot-password') {
        forgotPasswordBox.classList.add('active');
    } else if (boxName === 'otp-verification') {
        otpVerificationBox.classList.add('active');
    }
}

// Handle login form submission
document.getElementById('login-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('login-email').value;
    const password = document.getElementById('login-password').value;

    // Handle login logic here (e.g., send to server or perform validation)
    alert(`Logging in with ${email} and password: ${password}`);
});

// Handle register form submission
document.getElementById('register-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const fullName = document.getElementById('full-name').value;
    const gender = document.getElementById('gender').value;
    const email = document.getElementById('register-email').value;
    const phone = document.getElementById('phone').value;
    const address = document.getElementById('address').value;
    const password = document.getElementById('register-password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    // Handle register logic here
    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        return;
    }
    alert(`Registering with ${fullName}, ${email}, ${phone}, ${address}`);
});

// Handle forgot password form submission
document.getElementById('forgot-password-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('forgot-email').value;

    // Handle forgot password logic here
    alert(`Sending OTP to ${email}`);
});

// Handle OTP form submission
document.getElementById('otp-form').addEventListener('submit', function (e) {
    e.preventDefault();
    const otp = document.getElementById('otp').value;
    const newPassword = document.getElementById('new-password').value;

    // Handle OTP verification and password reset
    alert(`Verifying OTP: ${otp} and resetting password.`);
});