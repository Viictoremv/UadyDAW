
/*
const validateForm = () => {
    let email = document.forms["form"]["validateEmailAdress"].value;
    let password = document.forms["form"]["validatePassword"].value;
    
    let emailInput = document.getElementById("email");
    let passInput = document.getElementById("password");
    
    if ( email == "admin@hotmail.com" && password == "1234") { 
      window.location("/UadyDAW/Proyecto/app/ContadorCalorias.html");
      return true;
    } else{
      emailInput.style.borderColor = "red";
      passInput.style.borderColor = "red";
      return false;

    }

}
*/

function errorLogin() {
  
  var inputEmail = document.getElementById("email");
  var inputPassword = document.getElementById("password");

  inputEmail.style.borderColor = "red";
  inputPassword.style.borderColor = "red";
}

function errorEmail() {
  var inputEmail = document.getElementById("email");

  inputEmail.style.borderColor = "red";
}