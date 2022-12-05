<?php
    $error = (isset($_GET["error"])) ? $_GET["error"] : "";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Registro</title>
        <link href="/UadyDAW/Proyecto/style/estiloLogin.css" rel="stylesheet" type="text/css" />
        <script language="javascript" src="/UadyDAW/Proyecto/app/registrarAccount.js" ></script>
    </head>

    
    <body>
        <div class="loginBox">
            <img class="icon" src="/UadyDAW/Proyecto/assets/images/register.webp">
            <h1>Registrate</h1>
            <form name="form" action="elementosUsuarios/procesosAccount.php"  method="post">
                <!--Usuario-->
                
                <label for="usuario">Nombre Completo</label>
                <input type="text"  name="inputNombre" id="user" >
    
                <!--Correo-->
                <label for="correo">Correo Electrónico</label>
                <input type="text"  name="inputEmail" id="email">

                <!--Contraseña-->
                <label for="contraseña">Contraseña</label>
                <input type="password"  name="inputPassword" id="password">

                <?php if($error ==1) { ?>
                    <script type="text/javascript">errorLogin();</script>
                    <p class = "error">uno o mas campos estan incompletos</p>
                <?php } elseif ($error == 2) { ?>
                    <script type="text/javascript">errorEmail();</script>
                    <p class = "error">El formato del correo es incorrecto</p>
                <?php } elseif($error == 3) { ?>
                    <script type="text/javascript">errorLogin();</script>
                    <p class = "error">Ocurrio un error al registrar al usuario</p>
                <?php } elseif ($error == 4) { ?>
                    <script type="text/javascript">errorEmail();</script>
                    <p class = "error">El correo ya existe</p>
                <?php } ?>
    
                <input type="submit"  name = "boton" value="Registrarse">
    
            </form>
            <p>¿Ya tienes una cuenta? <a href="loginAccount.php">Ingresa aquí </a></p>
        </div>
    
    </body>
</html>