// validator.js
//   An example of input validation using the change and submit
//   events, using the DOM 2 event model
//   Note: This document does not work with IE8


function subJava(event) {

  var qtyJava = event.currentTarget.value;

  document.getElementById("subtotalJava").value = qtyJava * 2.00;
  document.getElementById("subtotalJava").value = parseFloat(document.getElementById("subtotalJava").value).toFixed(2);

  total();

}


function subCafe(event) {

  var qtyCafe1 = document.getElementById("cafe1").value;
  var qtyCafe2 = document.getElementById("cafe2").value;

  document.getElementById("subtotalCafe").value = qtyCafe1 * 2.00 + qtyCafe2 * 3.00;
  document.getElementById("subtotalCafe").value = parseFloat(document.getElementById("subtotalCafe").value).toFixed(2);

  total();

}

function subCappuccino(event) {

  var qtyCappuccino1 = document.getElementById("cappuccino1").value;
  var qtyCappuccino2 = document.getElementById("cappuccino2").value;

  document.getElementById("subtotalCappuccino").value = qtyCappuccino1 * 4.75 + qtyCappuccino2 * 5.75;
  document.getElementById("subtotalCappuccino").value = parseFloat(document.getElementById("subtotalCappuccino").value).toFixed(2);

  total();

}

function total() {
  var qtyJava = document.getElementById("java").value;
  var qtyCafe1 = document.getElementById("cafe1").value;
  var qtyCafe2 = document.getElementById("cafe2").value;
  var qtyCappuccino1 = document.getElementById("cappuccino1").value;
  var qtyCappuccino2 = document.getElementById("cappuccino2").value;

// Compute the cost

  document.getElementById("cost").value = qtyJava * 2.00 + qtyCafe1 * 2.00 + qtyCafe2 * 3.00 + qtyCappuccino1 * 4.75 + qtyCappuccino2 * 5.75;
  document.getElementById("cost").value = parseFloat(document.getElementById("cost").value).toFixed(2);
}  //* end of computeCost
