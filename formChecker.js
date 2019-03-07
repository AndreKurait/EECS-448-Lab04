function validate(){
  let valid = true;

  if(Number(document.getElementById("item1").value) < 0 || Number(document.getElementById("item2").value) < 0 || Number(document.getElementById("item3").value) < 0){
    valid = false;
  }

  let email = document.getElementById("user").value;
  let regularExpression = RegExp(/\S+@\S+\.\S+/);
  if (!regularExpression.test(email)) {
    valid = false
  }
  if(!valid) {
    alert("Invalid entry. Try again.");
    window.location.href ="./customerFrontend.html";
  }
  return valid;
}
