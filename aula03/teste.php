<?php

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    if($idade >= 18){
        echo "Olá $nome. bem vindo!";
    }else{
        echo "Olá, $nome. Mal-vindo.";
    }

    //echo "Nome: $nome <br>";
    //echo "Idade: $idade <br>";

?>