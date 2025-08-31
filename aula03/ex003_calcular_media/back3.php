<?php
$nome = $_REQUEST['nome'];
$nota1 = $_REQUEST['nota1'];
$nota2 = $_REQUEST['nota2'];
$notaFinal = ($nota1 + $nota2) /2;

    echo"O aluno $nome ficou com $notaFinal de média";
?>