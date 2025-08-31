<?php   
    $valorInicial = $_REQUEST['valor'];

    if($valorInicial > 40000){
        $valorFinal = $valorIncial * 1.05;
        echo "Valor final é: R$ $valorFinal";
    }elseif($valorInicial >70000){
        $valorFinal = $valorInicial * 1.10 * 1.15;
        echo "Valor final é: R$ $valorFinal";
    }else{
        $valorFinal = $valorInicial * 1.15 * 1.20;
        echo "Valor final é: R$ $valorFinal";
    }
    



?>