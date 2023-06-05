<?php 
echo <<<HTML
Los planetas creados fueron :<br> <a href="indexPlaneta.html">Volver</a>
HTML;
$numeroPlaneta='deshabilitado';
if (isset($_POST)) {
    $numeroPlaneta=$_POST["cantidad"];
    $sistema = array_fill(0, $numeroPlaneta, 'planeta');
    function imprimir($planeta){
    echo "<p>...$planeta...\n</p>";
    };
    echo"<br>";
    array_walk($sistema,'imprimir');
}
?>
