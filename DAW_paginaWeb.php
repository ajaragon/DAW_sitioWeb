<?php

function carga($clase)
{

    require "$clase.php";

}//fin de la función

header("location:areaUsuario.php");

spl_autoload_register("carga");

?>

<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <fieldset>
            <legend>Formulario</legend>
            <form>
                <label>NOMBRE: <input type="text" name="nombre" id=""/></label>
                <label>APELLIDO: <input type="text" name="apellido" id=""/></label>
                <label>DNI: <input type="text" name="dni" id=""/></label>
                <input type="submit" value="Acceder" name="submit" id=""/></label>
            </form>
        </fieldset>
    </body>
</html>

