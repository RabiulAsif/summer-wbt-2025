const database = [
  {
    username: "alan",
    password: "super"
  }
];

const form = document.querySelector('form');

form.addEventListener('submit', function(e) {
  e.preventDefault(); 

  const userNamePrompt = prompt("What's your username?");
  const passwordPrompt = prompt("What's your password?");

  function signIn(user, pass) {
    if (user === database[0].username && pass === database[0].password) {
      return true;
    } else {
      return false;
    }
  }

  if (signIn(userNamePrompt, passwordPrompt)) {
    const contactData = {
      firstName: form.firstname.value,
      lastName: form.lastname.value,
      email: form.email.value,
      reasonForContact: form.reason.value,
      service: form.service.value,
      providingJob: form.provide.value || "Not selected",
      positionInJob: form.position.value
    };

    console.group("Contact Form Submission");
    console.log("First Name:", contactData.firstName);
    console.log("Last Name:", contactData.lastName);
    console.log("Email:", contactData.email);
    console.log("Reason for Contact:", contactData.reasonForContact);
    console.log("Service:", contactData.service);
    console.log("Providing Job:", contactData.providingJob);
    console.log("Position in Job:", contactData.positionInJob);
    console.groupEnd();
  } else {
    console.log("Incorrect username or password. Access denied!");
  }
});
