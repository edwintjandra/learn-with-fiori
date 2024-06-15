document.addEventListener('DOMContentLoaded', function () {
    const promptInput = document.getElementById('prompt');
    const askButton = document.getElementById('ask');

    // Function to validate form
    function validateForm() {
        let isValid = true;

        if (promptInput.value.trim() === '') {
            isValid = false;
        }
        askButton.disabled = !isValid;
    }

    // Event listener for input changes in the prompt input field
    promptInput.addEventListener('input', validateForm);

    // Initial validation check
    validateForm();
});
