const passwordField = document.getElementById("password");
const passwordIcon = document.getElementById("passwordIcon");
const togglePassword = document.getElementById("passwordIcon");

const cpasswordField = document.getElementById("cpassword");
const cpasswordIcon = document.getElementById("cpasswordIcon");
const ctogglePassword = document.getElementById("cpasswordIcon");

togglePassword.addEventListener("click", function () {
    const currentType = passwordField.type;
    passwordField.type = currentType === "password" ? "text" : "password";
    passwordIcon.src =
        currentType === "password"
            ? "/assets/eye-open.svg"
            : "/assets/eye-close.svg";
});

ctogglePassword.addEventListener("click", function () {
    const currentType = cpasswordField.type;
    cpasswordField.type = currentType === "password" ? "text" : "password";
    cpasswordIcon.src =
        currentType === "password"
            ? "/assets/eye-open.svg"
            : "/assets/eye-close.svg";
});

document.addEventListener('DOMContentLoaded', function () {
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const cpasswordInput = document.getElementById('cpassword');
    const continueButton = document.getElementById('continueButton');

    const nameError = document.getElementById('nameError');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    const cpasswordError = document.getElementById('cpasswordError');

    function validateForm() {
        let isValid = true;

        if (nameInput.value.trim() === '') {
            nameError.classList.remove('hidden');
            isValid = false;
        } else {
            nameError.classList.add('hidden');
        }

        const emailPattern = /^[^@]+@[^@]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(emailInput.value)) {
            emailError.classList.remove('hidden');
            isValid = false;
        } else {
            emailError.classList.add('hidden');
        }

        if (passwordInput.value.length < 6) {
            passwordError.classList.remove('hidden');
            isValid = false;
        } else {
            passwordError.classList.add('hidden');
        }

        if (passwordInput.value !== cpasswordInput.value) {
            cpasswordError.classList.remove('hidden');
            isValid = false;
        } else {
            cpasswordError.classList.add('hidden');
        }

        continueButton.disabled = !isValid;
    }

    nameInput.addEventListener('input', validateForm);
    emailInput.addEventListener('input', validateForm);
    passwordInput.addEventListener('input', validateForm);
    cpasswordInput.addEventListener('input', validateForm);
});