<?php
    echo "Hola estoy en el PHP<br>";
    $num_random = rand(1,5);
    echo $num_random;
    echo "<br>";
 
    echo $_GET['numero']." ";
    
    if(isset($_GET['numero']) && $_GET['numero'] == $num_random){
        echo "Enhorabuena, has acertado!";
    }
    else if(!isset($_GET['numero'])){
        echo "No hemos recibido ningun número";
        echo '<form action="adivina.html"><input type=submit></form>';
    }
    else{
        echo "Has fallado prueba otra vez.";
    }
?>




