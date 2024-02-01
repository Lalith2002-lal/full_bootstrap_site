// Declration area
const form = document.getElementById("form");
const username = document.getElementById("inputName4");
const email = document.getElementById("inputEmail4");
const contact = document.getElementById("inputContactNumber4");
const textArea = document.getElementById("floatingTextarea");

// Regular Expression for the Email Id
String.prototype.isEmail = function () {
  return !!this.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/);
};

// Regular Expression for the Alphabet
String.prototype.isAlpha = function () {
  return !!this.match(/^[a-zA-Z\s]+$/);
};

// Regular Expression for the Mobile Number
String.prototype.isMobileNumber = function () {
  return !!this.match(/^\d{10}$/);
};

function checkRequired(inputs) {
  console.log("CheckRequire function called");
  inputs.forEach((input) => {
    if (input.value.trim() === "") {
      // Error message
      errorInput(input, `${getName(input)} is Required`);
    } else {
      // Success message
      successInput(input);
    }
  });
}

// Function for getting the name to display next to the error message
function getName(input) {
  return input.getAttribute("data-name");
}

// Function for the error
function errorInput(input, message) {
  const formGroup = input.parentElement;
  formGroup.className = "form-group error";
  let p = formGroup.querySelector("p");
  if (!p) {
    p = document.createElement("p");
    formGroup.appendChild(p);
  }
  p.innerHTML = message;
}

// Function for the success
function successInput(input) {
  const formGroup = input.parentElement;
  formGroup.className = "form-group success";
  let p = formGroup.querySelector("p");
  if (!p) {
    p = document.createElement("p");
    formGroup.appendChild(p);
  }
  p.innerHTML = "";
}

// Function for the length checking
function checkLength(input, min, max) {
  const data = input.value.trim().length;

  if (data < min) {
    errorInput(
      input,
      `${getName(input)} must be atleast greater than ${min} characters`
    );
  } else if (data > max) {
    errorInput(
      input,
      `${getName(input)} must be atleast lesser than ${max} characters`
    );
  } else {
    successInput(input);
  }
}

// Function to check is that the input is Email ID
function checkEmail(input) {
  if (!input.value.trim().isEmail()) {
    errorInput(input, `This is not a valid email address`);
  }
}

// Function to check is that the input is Alphabets
function checkAlpha(input) {
  if (!input.value.trim().isAlpha()) {
    errorInput(input, `${getName(input)} Must be Alphabets`);
  }
}

// Funciton to check that is the input is Numbers
function checkNumbers(input) {
  if (!input.value.trim().isMobileNumber()) {
    errorInput(
      input,
      `This is not a mobile number , Please enter valid mobile number`
    );
  }
}

form.addEventListener("submit", function (e) {
  // Preventing the default event

  e.preventDefault();

  // Conditions for the inputs
  checkRequired([username, email, contact, textArea]);
  checkLength(username, 5, 10);
  checkLength(contact, 10, 12);
  checkLength(textArea, 20, 50);

  // Verificaitons for the input elements
  checkAlpha(username);
  checkEmail(email);
  checkNumbers(contact);

  // Preventing the submission if there is error
  const error = document.querySelectorAll(".form-group.error");
  if (error.length > 0) {
    return;
  }

  // Ajax
  var formData = new FormData($("#form")[0]);
  $.ajax({
    url: "sendmail.php",
    type: "post",
    data: formData,
    contentType: false,
    processData: false,
    success: function (result) {
      //alert(result);
      $("#form_result").text(result);

      // Reset the data after the submission

      setTimeout(() => {
        $("#form_result").text("");

        const reset = form.reset();

        // Removing the text in the p tag
        const formGroups = document.querySelectorAll(".form-group");
        formGroups.forEach((formGroup) => {
          formGroup.className = "form-group";
          const p = formGroup.querySelector("p");
          if (p) {
            p.innerHTML = "";
          }
        });
      }, 5000);
    },
  });
});
