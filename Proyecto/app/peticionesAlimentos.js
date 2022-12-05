
window.onload = function () {

	//document.getElementById("imprimir").onclick = function () { window.print() };
	document.getElementById("agregarBd").onclick = function () { verVentana("/uadyDAW/Proyecto/pages/elementosAgregar/agregarBdAlimentos.php") };	
    
    document.getElementById("agregarContador").onclick = function() {
        if(!esNumeroPositivo(document.getElementById("campoCant").value)) {
            alert("Debe proporcionar una cantidad valida");
			document.getElementById("campoCant").focus();
            return false;
        }

        alert("Poner acción aqui");
    }
}




document.getElementById("campo").addEventListener("keyup", getNombres)

function getNombres() {

    let inputAlimento = document.getElementById("campo").value
    let lista = document.getElementById("lista")

    if (inputAlimento.length > 0) {

        let url = "/uadyDAW/Proyecto/pages/elementosAgregar/getAlimentos.php"
        let formData = new FormData()
        formData.append("campo", inputAlimento)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors" //Default cors, no-cors, same-origin
        }).then(response => response.json())
            .then(data => {
                lista.style.display = 'block'
                lista.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        lista.style.display = 'none'
    }
}

function mostrar(datos) {
    const arrayDatos = datos.split(",");
    let nombre = arrayDatos[0];
    let cantidad = arrayDatos[1];
    let unidad = arrayDatos[2];
    let calorias = arrayDatos[3];

    lista.style.display = 'none'

    let divResultados = document.getElementById("divResultados");

    divResultados.style.display = 'block';

    let h5Elegir = document.getElementById("h5Elegir");
    let labelContiene = document.getElementById("labelContiene");
    let labelCantidad = document.getElementById("labelCantidad");

    h5Elegir.innerHTML = "Elegiste " + nombre;
    labelContiene.innerHTML = "Contiene " + calorias + " calorias cada " + cantidad + unidad ;
    labelCantidad.innerHTML = "¿Cuál sera la cantidad en " + unidad + " por consumir?";
    
}

function verVentana(url) {
    var ventana = window.open(url, "ventana", "width=500, height=400");
	ventana.focus();
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


