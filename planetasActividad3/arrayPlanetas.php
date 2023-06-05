<?php 
echo <<<HTML
Los planetas creados fueron :<br> <a href="indexPlaneta.html">Volver</a><br>
HTML;
$sistemaSolar = array(
    "sol" => false,
    "mercurio" => false,
    "venus" => true,
    "tierra" => true,
    "marte" => true,
    "jupiter" => true,
    "saturno" => false,
    "urano" => false,
    "neptuno" => true,
    "pluton" => false
);
if (isset($_POST)) {
    $dato = $_POST['planeta'];
    function habitables($valor){
        return $valor == true;
    };
    function noHabitables($valor){
        return $valor == false;
    };
    switch($dato){
        case "habitable":
            echo "habitable :\n";
            echo "<br>";
            print_r(array_filter($sistemaSolar, "habitables"));
            break;
        case "noHabitable":
            echo "no Habitable :\n";
            echo "<br>";
            print_r(array_filter($sistemaSolar,"noHabitables"));
            break;
    }
}
?>
