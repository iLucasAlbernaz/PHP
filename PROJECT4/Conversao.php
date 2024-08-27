<?php include 'index.php'?>
<?php

Class Conversao{
    public $d, $c, $mult;

    function mult ($d,$c){
        $mult=$d*$c;
         return $mult;

    }
     
    function imprimir($resultMult,$operacao){
        if($operacao=='confirmado')
            echo "Reais: R$ $resultMult <br>";
    }
}
$calc = new Conversao;
$resultMult=$calc->mult($_POST['d'],$_POST['c']);
$calc->imprimir($resultMult,$_POST['operacao']);
?>
