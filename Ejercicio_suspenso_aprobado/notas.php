<?php
    if(!isset($_POST['nota']) && !isset($_POST['nombre'])){
        echo '<form action="notas.php" method="post" >
            <label>Introduce tu nombre:</label>
            <input type="text" name="nombre"><br>
            <label>Introduce tu nota:</label>
            <input type="number" name="nota"><br>
            <input type="submit">
        </form>';
    }else{
        echo "Hola ".$_POST['nombre'].", ";
        if($_POST['nota'] >= 5){
          echo  "has aprobado!";
        }else{
            echo "has suspendido..";
        }
    }
?>

