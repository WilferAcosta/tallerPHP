<?php 
echo <<<HTML
Crear una lista de satélites para un planet:<br> <a href="indexPlaneta.html">Volver</a><br>
HTML;
$planeta =["Mercurio", "Venus", "Tierra", "Marte", "Júpiter", "Saturno", "Urano", "Neptuno", "Plutón"];
//"Eris", "Ceres"   
        var_dump($planeta);
        array_push($planeta,"Eris", "Ceres");
        echo "<br>";
        echo "<h1>agregando mas planetas</h1>";
        echo "<br>";
        print_r($planeta);
?>