<?php 
echo <<<HTML
Revertir el orden de los planetas en un sistema solar:<br> <a href="indexPlaneta.html">Volver</a><br>
HTML;
$planetas = ["sol",
"mercurio",
"venus",
"tierra",
"marte",
"jupiter",
"saturno",
"urano",
"neptuno",
"pluton"];
        print_r($planetas);
        echo "<h1>Ordenando el array</h1>";
        $ordenar = array_reverse($planetas);
        print_r($ordenar);
?>