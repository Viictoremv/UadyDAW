
const validateForm = () => {
    let name = document.forms["form"]["validateName"].value;
    let email = document.forms["form"]["validateEmailAdress"].value;
    let password = document.forms["form"]["validatePassword"].value;
    
    let nameInput = document.getElementById("user");
    let emailInput = document.getElementById("email");
    let passInput = document.getElementById("password");
    
    if ( name == "" &&  email == "" && password == "") { 
      nameInput.style.borderColor = "red";
      emailInput.style.borderColor = "red";
      passInput.style.borderColor = "red";
      return false;
    } 

}