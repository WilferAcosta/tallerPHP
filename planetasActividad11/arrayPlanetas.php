<?php 
echo <<<HTML
Encontrar planetas únicos en dos sistemas solares
 :<br> <a href="indexPlaneta.html">Volver</a><br>
HTML;
$planeta1 =["Mercurio", "Venus", "Tierra", "Marte", "Júpiter", "Saturno", "Urano", "Neptuno", "Plutón"];
$planeta2 = ["Marte", "Júpiter", "Saturno", "Urano", "Neptuno", "Plutón", "Eris", "Ceres"];   
        $resultado= array_diff($planeta1,$planeta2);
        var_dump($resultado);
?>