const passwordField = document.getElementById("password");
const passwordIcon = document.getElementById("passwordIcon");
const togglePassword = document.getElementById("passwordIcon");

togglePassword.addEventListener("click", function () {
    const currentType = passwordField.type;
    passwordField.type = currentType === "password" ? "text" : "password";
    passwordIcon.src =
        currentType === "password"
            ? "/assets/eye-open.svg"
            : "/assets/eye-close.svg";
});

document.addEventListener('DOMContentLoaded', function () {
    const emailInput = document.getElementById('email');
    const passwordInput = document.getElementById('password');
    const continueButton = document.getElementById('continueButton');

    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');

    function validateForm() {
        let isValid = true;

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

        continueButton.disabled = !isValid;
    }
    emailInput.addEventListener('input', validateForm);
    passwordInput.addEventListener('input', validateForm);
});