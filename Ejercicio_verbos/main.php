<?php
include "verbos.php";
include "functions.php";



if(!isset($_POST['infinitivo']) && !isset($_POST['pasado']) && !isset($_POST['participio']) ){
        echo array_values($verbos)[$acumulador][0].':<br><br>';
        pinta_formulario();
        if(isset ($acumulador)){
            echo $acumulador;
        }
    }

?>
