// Defining a function to diaplay error message
function printError(elemId, hintMsg){
  document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
  // Retriving the values of form elements
  
  var name = document.contactForm.name.value;
  var email = document.contactForm.email.value;
  var phone = document.contactForm.phone.value;
  var country = document.contactForm.message.value;
 
  // Defining error variables with a default value
  var nameErr = emailErr = phoneErr = messageErr = true;

  // Validate name

  if (name == "") {
    printError("name", "Please enter your Full name");
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(name) === false) {
      printError("nameErr", "Please enter your Full name");
    } else {
      printError("nameErr", "");
      nameErr = false;
    }
  }
  if (email == "") {
    printError("email", "Please enter a valid email address");
  } else {
    // Regular expression for basic email validation
    var regex = /^S+@\S+\.\S+$/;
    if (regex.test(email) === false) {
      printError("emailErr", "Please enter a valid email address");
    } else {
      printError("emailErr", "");
      emailErr = false;
    }
  }
  // Validate phone number
  if (phone == "") {
    printError("phoneErr", "Please enter a valid phone number");
  } else {
    var regex = /^[1-9]\d{9}$/;
    if (regex.test(phone) === false) {
      printError("phoneErr", "Please enter a valid phone number");
    } else {
      printError("phoneErr", "");
      phoneErr = false;
    }
  }
  if (message == "") {
    printError("messageErr", "Please enter your Thoughts");
  } else {
    var regex = /^[a-zA-Z\s]+$/;
    if (regex.test(message) == false) {
      printError("messageErr", "Please enter your Thoughts");
    } else {
      printError("messageErr", "");
      messageErr = false;
    }
  }



  //  Prevent the form from being submitted if there are errors
  if ((nameErr || emailErr || phoneErr || messageErr) == true) {
    return false;
  } else {
    // Creating a string from input data for preview
    var dataPreview = "you have entered the following details\n" +
      "Full name :" + name + "\n" +
      "Email Address:" + email + "\n" +
      "phone Number:" + phone + "\n" +
      "Message :" + message + "\n" +
                 
   
      // Displaying input data in a dialog box before submitting the form
      alert(dataPreview);

  }
}