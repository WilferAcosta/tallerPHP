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
    print_r($sistemaSolar);
    $resultado = array_sum($sistemaSolar);
    echo "<h1>la suma de las masa del sistemas solar es: $resultado kilogramos</h1>";
?>