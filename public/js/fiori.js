document.addEventListener('DOMContentLoaded', function () {
    const promptInput = document.getElementById('prompt');
    const askButton = document.getElementById('ask');
    const straightAnswer = document.getElementById('straight-answer');
    const neutralAnswer = document.getElementById('neutral-answer');
    const softAnswer = document.getElementById('soft-answer');

    straightAnswer.addEventListener('click', function () {
        const textContent = Array.from(straightAnswer.querySelectorAll('li'))
                                .map(li => li.textContent.trim())
                                .join('\n');

        promptInput.value = textContent;
        validateForm();
    });

    softAnswer.addEventListener('click', function () {
        const textContent = Array.from(softAnswer.querySelectorAll('li'))
                                .map(li => li.textContent.trim())
                                .join('\n');

        promptInput.value = textContent;
        validateForm();
    });

    neutralAnswer.addEventListener('click', function () {
        const textContent = Array.from(neutralAnswer.querySelectorAll('li'))
                                .map(li => li.textContent.trim())
                                .join('\n');

        promptInput.value = textContent;
        validateForm();
    });

    // Function to validate form and adjust textarea height class
    function validateForm() {
        let isValid = true;

        if (promptInput.value.trim() === '') {
            isValid = false;
        }
        
        // Adjust textarea class based on content
        if (isValid) {
            promptInput.classList.remove('max-h-10');
        } else {
            promptInput.classList.add('max-h-10');
        }

        askButton.disabled = !isValid;
    }

    // Event listener for input changes in the prompt input field
    promptInput.addEventListener('input', validateForm);

    // Initial validation check
    validateForm();

        const copyButtons = document.querySelectorAll('.copy-button');

        copyButtons.forEach(button => {
            button.addEventListener('click', () => {
                const textToCopy = button.previousElementSibling.textContent.trim();

                navigator.clipboard.writeText(textToCopy)
            });
        });

});
