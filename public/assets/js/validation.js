
/**
 * Frontend validation of form.
 */
function check () {
  var name = document.forms["cartform"]["name"].value;
  var email = document.forms["cartform"]["email"].value;
  var phone = document.forms["cartform"]["phone"].value;

  var alphabetRegex = /^[a-zA-Z]+$/;
  var phoneRegex = /^\+91\d{10}$/;

  if (username == null || username == "") {
    $("#errorname").text("Please enter name.");
    return false;
   }
  if(!alphabetRegex.test(name)) {
    $("#errorname").text("Should contain only alphabet.");
    return false;
  }

  if (email == null || email == "") {
    $("#erroremail").text("Please enter email.");
    return false;
  }

  if (phone == null || phone == "") {
    $("#errorphone").text("Please enter contact number.");
    return false;
  }
  if(!phoneRegex.test(phone)) {
    $("#errorphone").text("Enter valid number starting with +91");
    return false;
  }

  

}