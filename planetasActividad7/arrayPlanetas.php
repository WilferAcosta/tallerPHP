<?php 
echo <<<HTML
Los planetas creados fueron :<br> <a href="indexPlaneta.html">Volver</a><br>
HTML;
$naves = ["Enterprise", "Millennium Falcon", "Starship Voyager", "Serenity", "Discovery", "TIE Fighter", "X-Wing", "Babylon 5", "Galactica", "Prometheus"];
    if(assert($_POST)){
        $buscar = $_POST['buscar'];
        if(in_array($buscar,$naves)){
            echo "<br>", $buscar, " Sí existe la nave espacial";
        }else{
                echo "<br>", $buscar," No existe la nave espacial";
            }
        
};
