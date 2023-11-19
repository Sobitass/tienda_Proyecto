function validatePassword() {
    // Password validation code (already provided)
}

function validateForm() {
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
    const passwordValidationMessage = document.getElementById("password-validation-message");

    // Check if the username and password fields are filled
    if (usernameInput.value === "" || passwordInput.value === "") {
        alert("Please fill in both username and password fields.");
        return false; // Prevent the link navigation
    }

    // Check if the password meets the requirements (you can call your password validation function here)
    const isPasswordValid=1; /* call your password validation function here */

    if (!isPasswordValid) {
        // Display a password validation message if needed
        passwordValidationMessage.textContent = "Password does not meet the requirements.";
        return false; // Prevent the link navigation
    }

    return true; // Continue with link navigation if both username and password are valid
}
function validatePassword() {
    // Password validation code (already provided)
}

//función que escucha el submit del form
document.getElementById("submission-form").addEventListener('submit', function(e){
    e.preventDefault();
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");

    if (usernameInput.value === "" || passwordInput.value === "") {
        alert("Faltan campos por llenar.")
    }else{
        window.location="../HTML/home.html"
    }

})