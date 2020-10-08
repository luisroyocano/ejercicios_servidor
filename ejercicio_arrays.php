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
            $temperaturas=array();
            $temperaturas['caja_1']=array(0,1,3,2,1,1,4,2,0,1,2,4);
            $temperaturas['caja_2']=array(2,3,1,1,5,1,1,2,1,2,2,1);
            $temperaturas['caja_3']=array(0,1,0,2,3,4,4,2,1,2,3,2);
            $temperaturas['caja_4']=array(0,2,1,1,3,3,2,2,1,1,1,3);
            $temperaturas['caja_5']=array(3,1,1,2,4,4,1,0,0,2,3,3);
            $temperaturas['caja_6']=array(3,1,1,2,4,4,1,0,0,2,3,3);
            $temperaturas['caja_7']=array(3,1,1,2,4,4,1,0,0,2,3,3);
            $temperaturas['caja_8']=array(3,1,1,2,4,4,1,0,0,2,8,3);
            $temperaturas['caja_9']=array(3,1,1,2,4,4,1,0,0,2,3,3);
            
            
            echo '<div><table border=1>';
            foreach($temperaturas as $valor1 => $valores){
                echo '<tr><th>'.$valor1.'</th>';
                foreach($valores as $valor2){
                    $color = "green";
                            if($valor2 > 3){ $color = "red"; }         
                    echo '<td style="background-color:'.$color.';">'.$valor2.'</td>';                      
                }
                echo "</tr>";
            }  
            echo "</table></div>";
        
         

        ?>
        
    </body>
</html>

