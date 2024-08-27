<?php

include 'index.php';

class Lojadecarro {
    public $fab, $imp = 0.45, $dist = 0.28;

    function imposto($fab, $imp) {
        $imposto = $fab * $imp;
        return $imposto;
    }

    function dist($resultImp, $dist) {
        $dist = $resultImp + ($resultImp * $dist);
        return $dist;
    }

    function imprimir($resultDist, $operacao) {
        if($operacao == 'calcular') {
            echo "Custo de Fabricação: R$ $resultDist <br>";
        }
    }
}

$calc = new Lojadecarro;
$resultImp = $calc->imposto($_POST['fab'], $calc->imp);
$resultDist = $calc->dist($resultImp, $calc->dist);
$calc->imprimir($resultDist, $_POST['operacao']);

$total = $_POST['fab'] + $resultDist;
echo "Custo ao Consumidor: R$ $total";
?>
