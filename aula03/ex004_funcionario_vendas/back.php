<?php
$salariobase = $_REQUEST['salarioBase'];
$totalvendas = $_REQUEST['totalVendas'];

$salarioTotal = $salariobase + $totalvendas * 0.04;
echo "$salarioTotal"
?>