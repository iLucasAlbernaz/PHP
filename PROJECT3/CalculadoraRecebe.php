<?php
    class CalculadoraRecebe{

        public $numero1;
        public $numero2;
        public $acao;
        public $resultado;
            function calcular ($numero1, $numero2, $acao){

            if (is_numeric($numero1) && is_numeric($numero2)){
                
                if ($acao =="somar"){
                        $resultado=$numero1+$numero2;
                echo " <center> <h1> SOMA: $resultado </h1> </center>";

                 }else if ($acao =="subtrair"){
                        $resultado=$numero1-$numero2;
                echo " <center> <h1> SUBTRAÇÃO: $resultado </h1> </center>";

                 }else if ($acao =="multiplicar"){
                        $resultado=$numero1*$numero2;
                echo " <center> <h1> MULTIPLICAÇÃO: $resultado </h1> </center>";

                 }else if ($acao =="dividir"){
                        $resultado=$numero1/$numero2;
                echo " <center> <h1> DIVISÃO: $resultado </h1> </center>";}

                  } else { 
                echo " <center> <h1> DIGITE SOMENTE NUMEROS! </h1> </center>";}
                  
        }// fim do método
    }// fim da classe
    
$objeto = new CalculadoraRecebe;
$objeto -> calcular ($_POST['numero1'], $_POST['numero2'], $_POST['acao']);

?>