<?php 
echo <<<HTML
Los planetas creados fueron :<br> <a href="indexPlaneta.html">Volver</a><br>
HTML;
$sistemaSolar = array(
    "sol" => 198000,
    "mercurio" => 3.3,
    "venus" => 48.7,
    "tierra" => 59.7,
    "marte" => 6.4,
    "jupiter" => 19000,
    "saturno" => 5688,
    "urano" => 868,
    "neptuno" => 1024,
    "pluton" => 0.62
);
    if(assert($_POST)){
        $buscar = $_POST['buscar'];
        if(array_key_exists($buscar,$sistemaSolar)){
            echo "<br>", $buscar, " Sí existe en el sistema solar";
        }else{
                echo "<br>", $buscar," No existe en el sistema solar";
            }
        
};
