<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $hola = <<<EOD
                HOLA HOLA
                HOLA
                EOD;
        
            for($tabla=1; $tabla<=10; $tabla++){
                echo "<h1>la tabla del ".$tabla." es: <h1>";
//                echo <<<EOT
//                      <h1>la tabla del $tabla es: <h1>
//                        EOT;
                for($i=1; $i<=10; $i++){
                    $resultado = $tabla*$i;
                    echo "<div display='inline'><table border=1>"
                    . "<tr><td>".$tabla." x ".$i." = ".$resultado."</td></tr>"
                            . "</table></div>";
                }
            } 
        ?>
        <table>
            <td>
            
            </td>
        </table>
    </body>
</html>
