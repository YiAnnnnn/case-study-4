// validatorr.js
//   The last part of validator2. Registers the
//   event handlers
//   Note: This script does not work with IE8

// Get the DOM addresses of the elements and register
//  the event handlers

      var nameNode = document.getElementById("name");
      var emailNode = document.getElementById("email");
      var dateNode = document.getElementById("date");
	  var experienceNode = document.getElementById("experience");
      nameNode.addEventListener("change", chkName, false);
      emailNode.addEventListener("change", chkEmail, false);
      dateNode.addEventListener("change", chkDate, false);
	  experienceNode.addEventListener("change", chkExperience, false);
