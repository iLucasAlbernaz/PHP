<?php include 'index.php'?>
<?php

Class Matematica{
    public $n1,$n2,$maior,$mult;
    function maior($n1,$n2){
        if($n1>$n2){

            return $n1;
        }else{
            return $n2;
        }
        
    }// FIM DO METADO MAIOR

    function mult($n1,$n2){
        $mult=$n1*$n2;
            return $mult;     
 
    }// FIM DO METADO MULTIPLICAÇÃO
    
    function imprimir($resultMaior,$resultMult,$operacao){
        if($operacao=='maior')
            echo "Maior: $resultMaior <br>";
        else if($operacao=='mult')   
            echo "Multiplicação: $resultMult<br>";

    }// FIM DO METADO IMPRIMIR
} // FIM DA CLASSE.

$calc = new Matematica;
$resultMaior=$calc->maior($_POST['n1'],$_POST['n2']);
$resultMult=$calc->mult($_POST['n1'],$_POST['n2']);
$calc->imprimir($resultMaior,$resultMult,$_POST['operacao']);
?>