<?php
$Nom=$_POST["nombre"];
$uno="";
if($Nom=$_POST["nombre"]){
    $uno=$Nom;
}else{
    $uno="No se lleno su nombre";
}
$Ape=$_POST["apellidop"];
$dos="";
if($Ape=$_POST["apellidop"]){
    $dos=$Ape;
}else{
    $dos="No se lleno su apellido paterno";
}
$lis=$_POST["apellidom"];
$tres="";
if($lis=$_POST["apellidom"]){
    $tres=$lis;
}else{
    $tres="No se lleno su apellido materno";
}
$DNI=$_POST["dni"];
$cuatro="";
if($DNI=$_POST["dni"]){
    $cuatro=$DNI;
}else{
    $cuatro="No se lleno su DNI";
}
$Separadas = explode(" ", $uno);
$CODE=$_POST["code"];
//Primera parte del codigo//
foreach ($Separadas as $primera) {
    $CODE.= substr($primera, 0, 1);
}
//Tercera parte del codigo//
$DIS="";
$divide= explode(" ", $dos);
foreach ($divide as $tercera) {
    $DIS .= substr($tercera, 0, 2);
}
$cinco="";
if($CODE=$_POST["code"]){
    $cinco = "$CODE$cuatro$DIS";
}else{
    $cinco = "No se pudo generar el codigo";
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
                Nombres:<br><br> <?php echo $uno ?>
                <br><br>
                Apellido Paterno:<br><br> <?php echo $dos ?>
                <br><br>
                Apellido Materno:<br><br> <?php echo $tres?>
                <br><br>
                DNI:<br><br> <?php echo $cuatro ?>
                <br><br>
                Codigo:<br><br> <?php echo $cinco ?>             
                <br><br>
            </fieldset>
        </form>
    </body>
        </center>
</html>