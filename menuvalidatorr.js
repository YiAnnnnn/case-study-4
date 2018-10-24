// validatorr.js
//   The last part of validator2. Registers the
//   event handlers
//   Note: This script does not work with IE8

// Get the DOM addresses of the elements and register
//  the event handlers

      var javaNode = document.getElementById("java");
      var cafe1Node = document.getElementById("cafe1");
	  var cafe2Node = document.getElementById("cafe2");
      var cappuccino1Node = document.getElementById("cappuccino1");
      var cappuccino2Node = document.getElementById("cappuccino2");
      javaNode.addEventListener("change", subJava, false);
      cafe1Node.addEventListener("change", subCafe, false);
	  cafe2Node.addEventListener("change", subCafe, false);
      cappuccino1Node.addEventListener("change", subCappuccino, false);
      cappuccino2Node.addEventListener("change", subCappuccino, false);
