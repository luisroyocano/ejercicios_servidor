<?php


if(!isset($_POST['nombre'] )&& !isset($_POST['sexo'])){
   
    echo "No se han recibido parámetros";
}
else{
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
     echo "Hola ".$nombre." eres ".$sexo;
}
?>

