<?php 
echo <<<HTML
Los planetas creados fueron :<br> <a href="indexPlaneta.html">Volver</a><br>
HTML;
$planeta1 =["Mercurio", "Venus", "Tierra", "Marte", "Júpiter", "Saturno", "Urano", "Neptuno", "Plutón"];
$planeta2 = ["Marte", "Júpiter", "Saturno", "Urano", "Neptuno", "Plutón", "Eris", "Ceres"];   
        $resultado= array_intersect($planeta1,$planeta2);
        var_dump($resultado);
?>