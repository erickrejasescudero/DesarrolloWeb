<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div id="contenedor">
        <form action="autenticar.php" method="POST">
            <label for="txtUsuario">Usuario</label>
            <input type="text" name="txtUsuario" value="<?php
            if(isset($_COOKIE['Usuario']))
            {
                echo $_COOKIE['Usuario'];
            }
            ?>"><br>
            <label for="txtPassword">Contraseña</label>
            <input type="password" name="txtPassword" value="<?php
            if(isset($_COOKIE['Password']))
            {
                echo $_COOKIE['Password'];
            }
            ?>"><br>

            <div id="funciones">
                <input type="checkbox" name="rUsuario" value="recordarU"
                <?php 
                    if(isset($_COOKIE['rUsuario']))
                    {
                        echo'checked="checked"';
                        unset($_COOKIE['rUsuario']);
                    }
                ?>
                >Recordar Usuario<br>
                <input type="checkbox" name="rPassword" value="recordarP"
                <?php
                    if(isset($_COOKIE['rPassword']))
                    {
                        echo'checked="checked"';
                        unset($_COOKIE['rPassword']);
                    }
                ?>
                >Recordar Password <br>
                <input type="submit" name="button" id="button" value="Ingresar">
                <input type="reset" value="Limpiar">
            </div>
            
        </form>
    </div>
</body>
</html>