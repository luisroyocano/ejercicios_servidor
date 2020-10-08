<?php
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];

if(isset($_POST['nombre'] )&& isset($_POST['sexo'])){
    echo "Hola ".$nombre." eres ".$sexo."";
}
else{
    echo "No se han recibido parámetros";
}
?>

