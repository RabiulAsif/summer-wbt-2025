function checkForm() {
  var reason = prompt("Reason for contact? (Thesis / Project)");

  if (reason === "Thesis") {
    var thesisTitle = prompt("What is your thesis title?");
    alert("Thesis Title: " + thesisTitle);
    console.log("Reason for contact: Thesis");
  } else if (reason === "Project") {
    console.log("Reason for contact: Project");

    var service = prompt("Select a service: (App / Web)");
    if (service === "App") {
      console.log("Service selected: App Development");
    } else if (service === "Web") {
      console.log("Service selected: Web Development");
    } else {
      console.log("Invalid service selected.");
    }

    var job = prompt("Are you providing any job? (Yes / No)");
    if (job === "Yes") {
      var position = prompt("Position in job? (HR / Developer / Designer)");
      console.log("Job provided. Position: " + position);
    } else if (job === "No") {
      console.log("No job is being provided.");
    } else {
      console.log("Invalid input for job offer.");
    }
  } else {
    console.log("Invalid reason selected.");
  }
}

checkForm();