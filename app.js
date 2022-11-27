const validateForm = () => {
    let x = document.forms["mainContainer"]["fname"].value;
    if (x == "") {
      alert("Ingrese un dato en el campo");
      return false;
    }
  }