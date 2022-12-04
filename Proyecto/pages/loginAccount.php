<?php
    $error = (isset($_GET["error"])) ? $_GET["error"] : "";
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>Login</title>
        <script src="/UadyDAW/Proyecto/app/loginAccount.js"></script>
        <link href="/UadyDAW/Proyecto/style/estiloLogin.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="loginBox">
            <img class="icon" src="/UadyDAW/Proyecto/assets/images/login.png">
            <h1>Inicia Sesión</h1>
            <form name="form" action="procesosAccount.php"  method="post">
                <!--Correo-->
                <label for="correo">Correo Electrónico</label>
                <input type="text" name="inputEmail" id = "email">

                <!--Contraseña-->
                <label for="contraseña">Contraseña</label>
                <input type="password" name="inputPassword" id = "password">

                <?php if($error ==1) { ?>
                    <script type="text/javascript">errorLogin();</script>
                    <p class = "error">uno o ambos campos estan incompletos</p>
                <?php } elseif ($error == 2) { ?>
                    <script type="text/javascript">errorEmail();</script>
                    <p class = "error">El formato del correo es incorrecto</p>
                <?php } elseif($error == 3) { ?>
                    <script type="text/javascript">errorLogin();</script>
                    <p class = "error">El correo o la contraseña son incorrectos</p>

                <?php } ?>

                <input type="submit" name = "boton" value="Iniciar Sesión">

            </form>
            <p>¿No tienes una cuenta? <a href="/UadyDAW/Proyecto/pages/registrarAccount.php"> Registrate </a></p>
        </div>

    </body>
</html>    