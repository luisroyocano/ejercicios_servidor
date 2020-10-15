<?php
    
    function pinta_formulario(){
        echo '<form action="main.php?acumulador=$acumulador&aciertos=$aciertos&fallos=$fallos" method="post">
                <label>Introduce el infinitivo:</label><br><br>
                    <input type="text" name="infinitivo"><br><br>
                <label>Introduce el pasado:</label><br><br>
                    <input type="text" name="pasado"><br><br>
                <label>Introduce el participio:</label><br><br>
                    <input type="text" name="participio"><br><br>
                <input type="submit">
            </form>';
    }
?>

