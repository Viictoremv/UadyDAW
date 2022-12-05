window.onload = function () {
	document.getElementById("cerrar").onclick = function () { window.close() }
	document.formulario.agregar.onclick = function () {
			if(document.formulario.nombre.value == "") {
				alert("Debe proporcionar el nombre del alimento");
				document.formulario.nombre.focus();
				return false;
			}

			if(!esNumeroPositivo(document.formulario.cantidad.value)) {
				alert("Inserte una cantidad válida");
				document.formulario.cantidad.focus();
				return false;
			}
			
			if(!esNumeroPositivo(document.formulario.calorias.value)) {
                alert("Inserte una cantidad de calorias válida");
				document.formulario.calorias.focus();
				return false;
            }

			agregarAlimento(document.formulario.nombre.value, document.formulario.cantidad.value, document.formulario.unidadAlimento.value, document.formulario.calorias.value);
			

		}
}

function agregarAlimento(nombre, cantidad, unidad, calorias){
	let url = "/uadyDAW/Proyecto/pages/elementosAgregar/setAlimentosBD.php"
        let formData = new FormData()
        formData.append("nombre", nombre);
        formData.append("cantidad", cantidad);
        formData.append("unidad", unidad);
        formData.append("calorias", calorias);

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors" //Default cors, no-cors, same-origin
        }).then(response => response.json())
            .then(data => {
                if(data == true) {
                    window.alert("El alimento se agrego correctamente");
                    window.close();
                } else {
                    window.alert("El alimento que intentas agregar ya existe");
                }
            })
            .catch(err => console.log(err))
}

function esNumeroPositivo(cadena){  
    
    cadena = cadena.replace(/\s\s+/g, " ");;

    if(cadena == " " || cadena.trim().length === 0) {
        return false;
    }

    if (isNaN(cadena)) {
        return false;
    } 

    if (parseFloat(cadena) <= 0) {
        return false;
    }

    return true;   
}