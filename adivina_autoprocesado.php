<?php
    $num_random = rand(1,5);
    echo $num_random;
    echo "<br>";

    if(!isset($_GET['numero'])){
        echo '<form action="adivina_autoprocesado.php"><input type="submit>"</form>';

    }
    else{
        
    }

?>

