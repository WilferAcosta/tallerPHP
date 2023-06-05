<?php 
echo <<<HTML
Los planetas creados fueron :<br> <a href="indexPlaneta.html">Volver</a><br>
HTML;
$sistemaSolar = array(
    "sol" => 274,
    "mercurio" => 3.7,
    "venus" => 8.87,
    "tierra" => 9.8,
    "marte" => 3.71,
    "jupiter" => 24.79,
    "saturno" => 10.44,
    "urano" => 8.87,
    "neptuno" => 11.15,
    "pluton" => 0.62
);
if (isset($_POST)) {
    $dato = $_POST['planeta'];
    function calcular($valor){
        return ($valor*100)/9.8;
    }
    $resultado = array_map("calcular", $sistemaSolar);
    print_r($resultado);
}
?>
