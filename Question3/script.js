document
  .getElementById("registrationForm")
  .addEventListener("submit", function (event) {
    var fullName = document.getElementById("fullName").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    var fullNameError = document.getElementById("fullNameError");
    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");

    var isValid = true;

    // Full Name Validation
    if (fullName.trim() === "") {
      fullNameError.textContent = "Please enter your full name";
      isValid = false;
    } else {
      fullNameError.textContent = "";
    }

    // Email Validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      emailError.textContent = "Please enter a valid email address";
      isValid = false;
    } else {
      emailError.textContent = "";
    }

    // Password Validation
    if (password.length < 6) {
      passwordError.textContent = "Password must be at least 6 characters long";
      isValid = false;
    } else {
      passwordError.textContent = "";
    }

    if (!isValid) {
      event.preventDefault(); // Prevent form submission if there are errors
    }
  });
