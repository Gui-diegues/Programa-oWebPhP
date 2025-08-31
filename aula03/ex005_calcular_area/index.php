<?php
    $altura = $_GET['altura'];
    $baseMenor = $_GET['base_menor'];
    $baseMaior = $_GET['base_maior'];   
    
    $area = ($baseMaior + $baseMenor) * $altura / 2;
    echo $area;
?>
