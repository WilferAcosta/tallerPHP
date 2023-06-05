<?php 
echo <<<HTML
Los planetas creados fueron :<br> <a href="indexPlaneta.html">Volver</a>
HTML;
$numeroPlaneta='deshabilitado';
if (isset($_POST)) {
    $numeroPlaneta=$_POST["cantidad"];
    $sistema = array_fill(0, $numeroPlaneta, 'planeta');
    //var_dump($sistema);
    function imprimir($planeta){
    echo "$planeta...\n";
    };
    echo"<br>";
    array_walk($sistema,'imprimir');
}
?>
