<?php
$Nom=$_POST["nombre"];
$Ape=$_POST["apellido"];
$DNI=$_POST["dni"];
$Separadas = explode(" ", $Nom);
$CODE=$_POST["code"];
//Primera parte del codigo//
foreach ($Separadas as $primera) {
    $CODE.= substr($primera, 0, 1);
}
//Tercera parte del codigo//
$DIS="";
$divide= explode(" ", $Ape);
foreach ($divide as $tercera) {
    $DIS .= substr($tercera, 0, 2);
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <style>
            html{
                background-color: grey;
            }
            fieldset{
                background: blanchedalmond;
                margin: 0 auto;
            }
            h1{
                color: red;
            }
            legend{
                color: red;
            }
        </style>
        <center>
        <h1>Datos del formulario</h1>
    </head>
    <body>
        <form method="post" action="Lab10_Recibe.php">
            <fieldset>
                <br>
                Nombres:<br><br> <?php echo $Nom ?>
                <br><br>
                Apellidos:<br><br> <?php echo $Ape ?>
                <br><br>
                DNI:<br><br> <?php echo $DNI ?>
                <br><br>
                Codigo:<br><br> <?php echo "$CODE$DNI$DIS" ?>             
                <br><br>
            </fieldset>
        </form>
    </body>
        </center>
</html>