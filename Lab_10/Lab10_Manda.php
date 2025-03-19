<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <style>
            html{
                background-color: orange;
            }
            fieldset{
                background: yellow;
                margin: 0 auto;
                width: 0 auto;

            }
            h1{
                color: red;
            }
            legend{
                color: red;
            }
        </style>
        <center>
        <h1>Formulario muy normal</h1>
    </head>
    <body>
        <form method="post" action="Lab10_Recibe.php">
            <fieldset>
                <legend>Ingresa sus datos:</legend>
                <br>
                Nombres:<br>
                <input type="text" name="nombre">
                <br>
                Apellidos:<br>
                <input type="text" name="apellido">
                <br>
                DNI:<br>
                <input type="text" name="dni">
                <br>              
                <input type="hidden" name="code">
                <br>
                <input type="hidden" name="dis">
                <br>
                <input type="submit" value="enviar" name="">
            </fieldset>
        </form>
    </body>
        </center>
</html>