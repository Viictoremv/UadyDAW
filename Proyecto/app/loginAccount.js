
const validateForm = () => {
    let email = document.forms["form"]["validateEmailAdress"].value;
    let password = document.forms["form"]["validatePassword"].value;
    
    let emailInput = document.getElementById("email");
    let passInput = document.getElementById("password");
    
    if ( emailInput == "admin@hotmail.com" && passInput == "1234") { 
      window.location("/app/ContadorCalorias.html");
      return true;
    } else{
      emailInput.style.borderColor = "red";
      passInput.style.borderColor = "red";
      return false;

    }



}