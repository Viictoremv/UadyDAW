<?php
function validarUsuario()
{
    require 'conectarUsuarios.php';

    $inputEmail = (isset($_POST["inputEmail"])) ? $_POST["inputEmail"] : "";
    $inputPassword = (isset($_POST["inputPassword"])) ? $_POST["inputPassword"] : "";

    if((empty($inputEmail) and empty($inputPassword)) or (empty($inputEmail) or empty($inputPassword))) {
        header("location:/UadyDAW/Proyecto/pages/loginAccount.php?error=1");
    } else if (validarEmail($inputEmail) == false) {
        header("location:/UadyDAW/Proyecto/pages/loginAccount.php?error=2");
    } else {
        if (!$conexion) {
            die("Connection failed: " . mysqli_connect_error());
        }
            
        $consulta = "SELECT COUNT(*) as contar FROM usuarios WHERE Correo = '$inputEmail' AND Contraseña = '$inputPassword'";
        $query = mysqli_query($conexion, $consulta);

        $array = mysqli_fetch_array($query);

        mysqli_close($conexion);
        if ($array['contar'] == 0) {
            header("location:/UadyDAW/Proyecto/pages/loginAccount.php?error=3");
        } else {
            header("location:/UadyDAW/Proyecto/pages/ContadorCalorias.php");
        }
    }
}

function validarEmail($email)
{
    // Remover caracteres ilegales del email
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Validar email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function registrarUsuario() {
    require 'conectarUsuarios.php';

    $inputNombre = (isset($_POST["inputNombre"])) ? $_POST["inputNombre"] : "";
    $inputEmail = (isset($_POST["inputEmail"])) ? $_POST["inputEmail"] : "";
    $inputPassword = (isset($_POST["inputPassword"])) ? $_POST["inputPassword"] : "";

    if((empty($inputEmail) and empty($inputPassword) and empty($inputNombre)) or (empty($inputEmail) or empty($inputPassword) or empty($inputNombre))){
        header("location:/UadyDAW/Proyecto/pages/registrarAccount.php?error=1");
    } else if (validarEmail($inputEmail) == false) {
        header("location:/UadyDAW/Proyecto/pages/registrarAccount.php?error=2");
    } else {
        if (!$conexion) {
            die("Connection failed: " . mysqli_connect_error());
        }
        

        $consultaExistencia = "SELECT COUNT(*) as contar FROM usuarios WHERE Correo = '$inputEmail'";

        $query = mysqli_query($conexion, $consultaExistencia);
        $array = mysqli_fetch_array($query);

        if ($array['contar'] > 0) {
            header("location:/UadyDAW/Proyecto/pages/registrarAccount.php?error=4");
        } else {
            $consulta = "INSERT INTO usuarios VALUES ('$inputNombre','$inputEmail','$inputPassword')";
        
            if (mysqli_query($conexion, $consulta)) {
                header("location:/UadyDAW/Proyecto/pages/loginAccount.php");
            } else {
                header("location:/UadyDAW/Proyecto/pages/registrarAccount.php?error=3");
            }

            mysqli_close($conn);
        }
    }
}

$boton = (isset($_POST["boton"])) ? $_POST["boton"] : "";

if ($boton == "Iniciar Sesión") {
    validarUsuario();
} elseif ($boton == "Registrarse") {
    registrarUsuario();
}
?>
