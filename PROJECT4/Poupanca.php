<?php include 'index.php'?>
<?php

Class Poupanca{
    public $r, $j=0.007, $juros;

    function juros ($r,$j){
        $juros=$r*$j;
         return $juros;

    }
     
    function imprimir($resultJuros,$operacao){
        if($operacao=='calcular')
            echo "Rendeu no mês: R$ $resultJuros <br>";
    }
}
$calc = new Poupanca;
$resultJuros=$calc->juros($_POST['r'],$calc->j);
$calc->imprimir($resultJuros,$_POST['operacao']);
?>
