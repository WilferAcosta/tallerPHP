<?php 
echo <<<HTML
Los planetas creados fueron :<br> <a href="indexPlaneta.html">Volver</a><br>
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

        $ir = array_rand($planetas);
        echo "<h1>el planeta a explorar es: $planetas[$ir]</h1>";
?>