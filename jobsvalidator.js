// validator.js
//   An example of input validation using the change and submit
//   events, using the DOM 2 event model
//   Note: This document does not work with IE8

// ********************************************************** //
// The event handler function for the name text box

function chkName(event) {

// Get the target node of the event

  var myName = event.currentTarget;

// Test the format of the input name
//  Allow the spaces after the commas to be optional
//  Allow the period after the initial to be optional

  var pos = myName.value.search(/^[A-Za-z ]*$/);

  if (pos != 0) {
    alert("The name you entered (" + myName.value +
          ") is not in the correct form. \n" +
          "Only alphabets and character spaces are allowed.");
    myName.focus();
    myName.select();
	return false;
  }
}

// ********************************************************** //
// The event handler function for the email text box

function chkEmail(event) {


// Get the target node of the event

  var myEmail = event.currentTarget;

// Test the format of the input email

  var pos = myEmail.value.search(/^[A-Za-z0-9\.\-]+\@[A-Za-z0-9]*\.*[A-Za-z0-9]*\.*[A-Za-z0-9]+\.[A-Za-z0-9]{2,3}$/);
  var ext = myEmail.value.search(/\.{2,}/);

  if (pos != 0 || ext != -1) {
    alert("The email you entered (" + myEmail.value +
          ") is not in the correct form. \n");
    myEmail.focus();
    myEmail.select();
	return false;
  }
}

// ********************************************************** //
// The event handler function for the date text box

function chkDate(event) {

  var myDate = event.currentTarget;

  var tmr = new Date(Date.now() + 86400000);
  var tmrDate = tmr.getFullYear()+"-"+(tmr.getMonth()+1)+"-"+tmr.getDate();

  if (myDate.value < tmrDate) {
    alert("The date selected cannot be from today or the past.");
    myDate.focus();
    myDate.select();
	return false;
  }
}

// ********************************************************** //
// The event handler function for the experience text box

function chkExperience(event) {

  var myExperience = event.currentTarget;
  var valExperience = myExperience.value.trim();

  if (valExperience == "") {
    alert("The field cannot be left blank");
    myExperience.focus();
    myExperience.select();
	return false;
  }

}
