/**
 * Frontend validation of form.
 *  Field empty validation and syntax validation.
 *    @returns  false if amy condition is not satisfied.
 */
function empty() {
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var phone = document.getElementById("phone");

  var alphabetRegex = /^[a-zA-Z]+$/;
  var phoneRegex = /^\+91\d{10}$/;

  if (name == null || name == "") {
    alert("Please enter name.");
    return false;
  }
   if (email == null || email == "") {
    alert("Please enter email");
    return false;
  }
  if (phone == null || phone == "") {
    alert("Please enter contact number.");
    return false;
   }

  //  if(!alphabetRegex.test(name)) {
  //   alert("Username can only contain alphabet");
  //   return false;
  // }
  // if(!alphabetRegex.test(phone)) {
  //   alert("Enter valid phone number.");
  //   return false;
  // }

}
