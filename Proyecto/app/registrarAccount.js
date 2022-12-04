function errorLogin() {
  
  var inputNombre = document.getElementById("user");
  var inputEmail = document.getElementById("email");
  var inputPassword = document.getElementById("password");

  inputNombre.style.borderColor = "red";
  inputEmail.style.borderColor = "red";
  inputPassword.style.borderColor = "red";
}

function errorEmail() {
  var inputEmail = document.getElementById("email");

  inputEmail.style.borderColor = "red";
}