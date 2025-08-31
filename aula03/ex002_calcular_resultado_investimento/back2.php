<?php
    $tipoDeInvestimento = $_REQUEST['tipoDeInvestimento'];
    $valorInvestido = $_REQUEST['valorInvestido'];

    if($tipoDeInvestimento == "1"){
        $valorFinal = $valorInvestido * 1.03;
        echo "Em um mês seu saldo será R$: $valorFinal";
    }
    elseif($tipoDeInvestimento == "2"){
        $valorFinal = $valorInvestido * 1.04;
        echo "Em um mês seu saldo será R$: $valorFinal";
    }
    else{
        echo "Opção invalida :(";
    }

?>